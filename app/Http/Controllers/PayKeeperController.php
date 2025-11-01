<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Purchase; 
use Carbon\Carbon;

class PayKeeperController extends Controller
{
    /**
     * Инициирует платеж: сохраняет данные пользователя и генерирует ссылку на оплату.
     */
    public function initPayment(Request $request)
    {
        // 1. Валидация данных пользователя
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        // 2. Подготовка данных для запроса и БД
        $payAmount = config('app.product_price', 5000); 
        $orderId = time() . rand(1000, 9999); 

        // 3. Сохранение данных в БД со статусом 'pending'
        try {
            $purchase = Purchase::create([
                'order_id' => $orderId,
                'name' => $validatedData['name'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email'],
                'amount' => $payAmount,
                'status' => 'pending',
            ]);
        } catch (\Exception $e) {
            Log::error('PayKeeper: Failed to save purchase to DB.', ['error' => $e->getMessage()]);
            abort(404);
        }

        // 4. Запрос к PayKeeper API
        $serverUrl = config('app.paykeeper_server');
        $login = config('app.paykeeper_login');
        $password = config('app.paykeeper_password');
        $serviceName = config('app.product_name', 'Продукт');
        $tokenResponse = $response = Http::withBasicAuth($login, $password)
                ->post("{$serverUrl}/info/settings/token/");
        $data = $tokenResponse->json();
        $securityToken = $data['token'];
        if (empty($securityToken)) {
            abort(404);
        }
        $requestData = [
            'pay_amount' => number_format($payAmount, 2, '.', ''),
            'orderid' => $orderId,
            'service_name' => $serviceName,
            'client_email' => $validatedData['email'], 
            'client_phone' => $validatedData['phone'], 
            'clientid' => $validatedData['name'],   
            // *** ОПТИМАЛЬНО: client_return_url ведет на отдельный маршрут success ***
            'client_return_url' => route('paykeeper.success'), 
            'token' => $securityToken,
        ];

        try {
            $response = Http::asForm()
                ->withBasicAuth($login, $password)
                ->post("{$serverUrl}/change/invoice/preview/", $requestData);

            $data = $response->json();

            if ($response->successful() && isset($data['invoice_id'])) {
                $invoiceId = $data['invoice_id'];
                $paymentLink = "{$serverUrl}/bill/{$invoiceId}/";

                Log::info("PayKeeper: Payment initiated for Order ID: {$orderId}, Invoice ID: {$invoiceId}");

                // Перенаправление пользователя на страницу оплаты PayKeeper
                return redirect()->away($paymentLink);

            } else {
                Log::error('PayKeeper: Failed to get payment link.', ['response' => $data]);
                $purchase->update(['status' => 'failed']); 
                abort(404);
            }

        } catch (\Exception $e) {
            Log::error('PayKeeper: Exception during payment initiation.', ['error' => $e->getMessage()]);
            $purchase->update(['status' => 'failed']);
            abort(404);
        }
    }

    /**
     * Обрабатывает POST-уведомление (Callback) от сервера PayKeeper.
     * ТОЛЬКО для обновления статуса в БД.
     */
    public function callback(Request $request)
    {
        // PayKeeper всегда отправляет POST-запрос для Callback
        if (!$request->isMethod('POST')) {
            return response('Method Not Allowed', 405);
        }
        
        // 1. Получение данных и проверка подписи
        $secretKey = config('app.paykeeper_secret_key');
        $signature = $request->input('signature');
        $id = $request->input('id');
        $sum = $request->input('sum');
        $orderid = $request->input('orderid');
        $clientid = $request->input('clientid');
        $status = $request->input('status');

        // Строка для проверки подписи (согласно документации PayKeeper)
        $checkString = $id . $sum . $orderid . $clientid . $status . $secretKey;
        $calculatedSignature = hash('sha256', $checkString);

        if ($calculatedSignature !== $signature) {
            Log::warning('PayKeeper: Invalid signature received.', ['request_data' => $request->all()]);
            return response('Error: Invalid signature', 400);
        }

        // 2. Поиск заказа в БД
        $purchase = Purchase::where('order_id', $orderid)->first();

        if (!$purchase) {
            Log::error("PayKeeper: Purchase not found for order_id: {$orderid}");
            return response('Error: Order not found', 404);
        }

        // 3. Обработка статуса платежа
        if ($status === 'success' && $purchase->status !== 'success') {
            // Платеж успешен! Обновляем БД.
            $purchase->update([
                'status' => 'success',
                'paid_at' => Carbon::now(),
            ]);

            Log::info("PayKeeper: Payment SUCCESS for Order ID: {$orderid}. DB updated.");
        } else if ($status === 'refunded' && $purchase->status !== 'refunded') {
            // Возврат
            $purchase->update(['status' => 'refunded']);
            Log::info("PayKeeper: Payment REFUNDED for Order ID: {$orderid}.");
        } else {
            // Другие статусы (pending, failed, etc.)
            $purchase->update(['status' => $status]);
            Log::info("PayKeeper: Payment status updated to {$status} for Order ID: {$orderid}.");
        }

        // 4. Возвращаем "OK" для PayKeeper
        return response('OK');
    }

    /**
     * Обрабатывает GET-редирект пользователя после оплаты.
     * Здесь происходит перенаправление в Telegram-канал.
     */
    public function success(Request $request)
    {
        $botToken = '7958020272:AAFIr2RCIEcAEYvTUTaQd0r98A3MJYG8zyA'; // Замените на реальный токен
        $channelId = -1002519574252; // Замените на реальный ID канала (с -100...)

        // URL для Telegram API
        $url = "https://api.telegram.org/bot{$botToken}/createChatInviteLink";

        // Параметры: одноразовая ссылка, истекает через 24 часа (86400 секунд)
        $expiresDate = time() + 3600; // Можно изменить на другой срок, например 3600 для 1 часа

        $payload = [
            'chat_id' => $channelId,
            'member_limit' => 1, // Одноразовая (после 1 присоединения деактивируется)
            'expires_date' => $expiresDate,
            // Опционально: 'name' => 'Invite for user ' . $user->id, // Для отслеживания
        ];

        try {
            // Отправляем POST-запрос
            $response = Http::withOptions([
                'curl' => [
                    CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4, // принудительно IPv4
                ],
                'timeout' => 20, // можно увеличить при необходимости
            ])->post($url, $payload);
            $data = $response->json();

            if ($data['ok']) {
                $inviteLink = $data['result']['invite_link'];
                return redirect()->away($inviteLink);
            } else {
                // Ошибка от Telegram
                Log::error('Telegram API error: ' . $data['description']);
                abort(404);
            }
        } catch (RequestException $e) {
            // Ошибка запроса (например, сеть или неверный токен)
            Log::error('Telegram request failed: ' . $e->getMessage());
            abort(404);
        }

        // Если что-то пошло не так, fallback
        abort(404);
    }
}
<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            // Header Section
            ['key' => 'page_title', 'value' => 'Канал-гайд для девушек в Telegram', 'type' => 'text', 'section' => 'header', 'description' => 'Заголовок страницы (title tag)'],
            ['key' => 'header_title', 'value' => 'КАНАЛ-ГАЙД ДЛЯ ДЕВУШЕК', 'type' => 'text', 'section' => 'header', 'description' => 'Главный заголовок'],
            ['key' => 'header_subtitle', 'value' => 'в Telegram Магдалена Великая', 'type' => 'text', 'section' => 'header', 'description' => 'Подзаголовок'],
            ['key' => 'header_quote', 'value' => '«Хочу, чтобы как можно больше людей выглядели стильно, самовыражались и не запрещали себе быть собой, как внешне, так и внутренне»', 'type' => 'text', 'section' => 'header', 'description' => 'Цитата'],
            ['key' => 'header_description', 'value' => 'Канал для всех, кто хочет быть стильными, проявленными, свободными и выражать себя через внешний стиль!', 'type' => 'text', 'section' => 'header', 'description' => 'Описание'],

            // Purpose Section
            ['key' => 'purpose_title', 'value' => 'СМЫСЛ КАНАЛА', 'type' => 'text', 'section' => 'purpose', 'description' => 'Заголовок раздела'],
            ['key' => 'purpose_item_1', 'value' => 'Собрать гардероб из вещей, которые отражают вас.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 1'],
            ['key' => 'purpose_item_2', 'value' => 'Понять, из каких вещей должен состоять гардероб, чтобы все сочеталось, и вы не стояли по 2 часа, думая, что надеть.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 2'],
            ['key' => 'purpose_item_3', 'value' => 'Знать, где покупать стильные вещи.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 3'],

            // Content Section
            ['key' => 'content_title', 'value' => 'СОДЕРЖАНИЕ КАНАЛА-ГАЙДА', 'type' => 'text', 'section' => 'content', 'description' => 'Заголовок раздела'],
            ['key' => 'content_item_1', 'value' => '1. Список зарубежных и российских магазинов', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 1'],
            ['key' => 'content_item_2_title', 'value' => '2. Подборки вещей для девушек:', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 2 - заголовок'],
            ['key' => 'content_item_3', 'value' => '3. Готовые образы', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 3'],
            // Подпункты (Верхняя одежда, Верх, Низ и т.д.) оставлены статичными, так как они являются списком, который сложнее редактировать в CMS.
            // Если нужно, их можно добавить как отдельный ключ с HTML-разметкой или JSON-списком.

            // Purchase Section
            ['key' => 'purchase_title', 'value' => 'КУПИТЬ ДОСТУП К КАНАЛУ-ГАЙДУ В TELEGRAM', 'type' => 'text', 'section' => 'purchase', 'description' => 'Заголовок раздела'],
            ['key' => 'purchase_info_1', 'value' => 'Подборки российских и зарубежных брендов.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 1'],
            ['key' => 'purchase_info_2', 'value' => 'Сроки работы канала: 1 ноября - 31 декабря', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 2'],
            ['key' => 'purchase_info_3', 'value' => 'Доступ: бессрочный.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 3'],
            ['key' => 'purchase_info_4', 'value' => 'Ответы на вопросы: в комментариях.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 4'],
            ['key' => 'purchase_info_5', 'value' => 'Диапазон цен в канале: 5 000-2 000 000₽.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 5'],
            ['key' => 'purchase_note', 'value' => 'После оплаты вас сразу перебросит в Telegram-канал, не закрывайте страницу!', 'type' => 'text', 'section' => 'purchase', 'description' => 'Важное замечание'],
            ['key' => 'purchase_price', 'value' => '5000', 'type' => 'text', 'section' => 'purchase', 'description' => 'Цена'],
            ['key' => 'purchase_payment_methods', 'value' => 'Способы оплаты: российские и зарубежные карты', 'type' => 'text', 'section' => 'purchase', 'description' => 'Способы оплаты'],
            ['key' => 'purchase_email', 'value' => 'madgapikland@gmail.com', 'type' => 'email', 'section' => 'purchase', 'description' => 'Email для вопросов'],

            // Footer Section
            ['key' => 'footer_company_name', 'value' => 'ИП Ефремова М. А.', 'type' => 'text', 'section' => 'footer', 'description' => 'Название компании'],
            ['key' => 'footer_inn', 'value' => 'ИНН 771553631885', 'type' => 'text', 'section' => 'footer', 'description' => 'ИНН'],
            ['key' => 'footer_ogrn', 'value' => 'ОГРНИП 324774600601827', 'type' => 'text', 'section' => 'footer', 'description' => 'ОГРНИП'],
            ['key' => 'footer_email', 'value' => 'madgapikland@gmail.com', 'type' => 'email', 'section' => 'footer', 'description' => 'Email'],
            ['key' => 'footer_telegram_link', 'value' => 'https://t.me/magdalena_velikaya', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на Telegram-канал'],
            ['key' => 'footer_telegram_text', 'value' => 'Магдалена Великая', 'type' => 'text', 'section' => 'footer', 'description' => 'Текст ссылки на Telegram-канал'],
            ['key' => 'footer_privacy_link', 'value' => '#', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на политику конфиденциальности'],
            ['key' => 'footer_consent_link', 'value' => '#', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на согласие обработки данных'],
            ['key' => 'footer_email_consent_link', 'value' => '#', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на согласие рассылки'],
            ['key' => 'footer_offer_link', 'value' => '#', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на публичную оферту'],
        ];

        foreach ($contents as $content ) {
            SiteContent::updateOrCreate(['key' => $content['key']], $content);
        }
    }
}
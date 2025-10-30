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
            ['key' => 'page_title', 'value' => 'Осенне-зимний канал-гайд для девушек в Telegram', 'type' => 'text', 'section' => 'header', 'description' => 'Заголовок страницы (title tag)'],
            ['key' => 'header_title', 'value' => 'ОСЕННЕ-ЗИМНИЙ КАНАЛ-ГАЙД ДЛЯ ДЕВУШЕК', 'type' => 'text', 'section' => 'header', 'description' => 'Главный заголовок'],
            ['key' => 'header_subtitle', 'value' => 'в Telegram Magdalena Velikaya', 'type' => 'text', 'section' => 'header', 'description' => 'Подзаголовок'],
            ['key' => 'header_quote', 'value' => '«Хочу, чтобы как можно больше людей выглядели стильно, самовыражались и не запрещали себе быть собой, как внешне, так и внутренне»', 'type' => 'text', 'section' => 'header', 'description' => 'Цитата'],
            ['key' => 'header_description', 'value' => 'Канал для всех, кто хочет быть стильными, проявленными, свободными и выражать себя через внешний стиль!', 'type' => 'text', 'section' => 'header', 'description' => 'Описание'],

            // Purpose Section
            ['key' => 'purpose_title', 'value' => 'СМЫСЛ КАНАЛА', 'type' => 'text', 'section' => 'purpose', 'description' => 'Заголовок раздела'],
            ['key' => 'purpose_text_1', 'value' => 'Я часто от вас слышу: «А почему ты мне не предложила эту вещь», «Покажи, что тебе нравится», «Где мне найти вот это» и.т.д.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_2', 'value' => 'Я ответила на все ваши вопросы в один гайд. В нем огромный выбор классных вещей, вы все найдете в нем что-то свое!', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_3', 'value' => 'В нем весь мой многолетний опыт, вся моя любовь к деталям и магию преображения — это ваш личный ключ к идеальному сезону.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_4', 'value' => 'вы сможете:', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_item_1', 'value' => 'Собрать гардероб из вещей, которые отражают вас.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 1'],
            ['key' => 'purpose_item_2', 'value' => 'Понять, из каких вещей должен состоять гардероб, чтобы все сочеталось, и вы не стояли по 2 часа, думая, что надеть.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 2'],
            ['key' => 'purpose_item_3', 'value' => 'Знать, где покупать стильные вещи.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 3'],
            ['key' => 'purpose_item_4', 'value' => 'Проконсультироваться со мной стоит ли вам брать ту или иную вещь и с чем ее носить', 'type' => 'text', 'section' => 'purpose', 'description' => 'Пункт 4'],

            // Content Section
            ['key' => 'content_title', 'value' => 'СОДЕРЖАНИЕ КАНАЛА-ГАЙДА', 'type' => 'text', 'section' => 'content', 'description' => 'Заголовок раздела'],
            ['key' => 'content_item_1', 'value' => '1. Список зарубежных и российских магазинов', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 1'],
            ['key' => 'content_item_2_title', 'value' => '2. Подборки вещей для девушек. Более 1000 уникальных вещей:', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 2 - заголовок'],
            ['key' => 'content_item_3', 'value' => '3. Готовые образы. Более 40 готовых образов на любой случай жизни', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 3'],
            ['key' => 'content_item_4', 'value' => 'Пополнение гайда каждые 10 дней', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 4'],
            // Подпункты (Верхняя одежда, Верх, Низ и т.д.) оставлены статичными, так как они являются списком, который сложнее редактировать в CMS.
            // Если нужно, их можно добавить как отдельный ключ с HTML-разметкой или JSON-списком.

            // Purchase Section
            ['key' => 'purchase_title', 'value' => 'КУПИТЬ ДОСТУП К КАНАЛУ-ГАЙДУ В TELEGRAM', 'type' => 'text', 'section' => 'purchase', 'description' => 'Заголовок раздела'],
            ['key' => 'purchase_info_1', 'value' => 'Получите онлайн-стилиста в кармане на 2 месяца', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 1'],
            ['key' => 'purchase_info_2', 'value' => 'Доступ бессрочный', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 2'],
            ['key' => 'purchase_info_3', 'value' => 'Пополнение гайда - до 31.12.25.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 3'],
            ['key' => 'purchase_note', 'value' => 'После оплаты вас сразу перебросит в Telegram-канал, не закрывайте страницу!', 'type' => 'text', 'section' => 'purchase', 'description' => 'Важное замечание'],
            ['key' => 'purchase_price_1', 'value' => '- 1 ноября – 31 декабря: 5000 ₽.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Цена 1 месяца'],
            ['key' => 'purchase_price_2', 'value' => '- Декабрь: 3000 ₽.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Цена 2 месяца'],
            ['key' => 'purchase_price_3', 'value' => '- Январь: 1000 ₽.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Цена 3 месяца'],
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
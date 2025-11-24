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
            ['key' => 'page_title', 'value' => 'Осенне-зимний гайд для девушек в Telegram', 'type' => 'text', 'section' => 'header', 'description' => 'Заголовок страницы (title tag)'],
            ['key' => 'header_title', 'value' => 'ОСЕННЕ-ЗИМНИЙ ГАЙД ДЛЯ ДЕВУШЕК', 'type' => 'text', 'section' => 'header', 'description' => 'Главный заголовок'],
            ['key' => 'header_subtitle', 'value' => 'в Telegram Magdalena Velikaya', 'type' => 'text', 'section' => 'header', 'description' => 'Подзаголовок'],
            ['key' => 'header_quote_1', 'value' => 'Я часто от вас слышу: «А почему ты мне не предложила эту вещь», «Покажи, что тебе нравится», «Где мне найти вот это» и.т.д.', 'type' => 'text', 'section' => 'header', 'description' => 'Цитата 1'],
            ['key' => 'header_quote_2', 'value' => 'Я ответила на все ваши вопросы в одном гайде. В нем огромный выбор классных вещей, вы все найдете в нем что-то свое!', 'type' => 'text', 'section' => 'header', 'description' => 'Цитата 2'],
            ['key' => 'header_quote_3', 'value' => 'В нем весь мой многолетний опыт, вся моя любовь к деталям и магия преображения — это ваш личный ключ к идеальному сезону.', 'type' => 'text', 'section' => 'header', 'description' => 'Цитата 3'],

            // About me Section
            ['key' => 'about_title', 'value' => 'Обо мне', 'type' => 'text', 'section' => 'about', 'description' => 'Заголовок раздела'],
            ['key' => 'about_text_1', 'value' => 'Привет! Меня зовут Магда.', 'type' => 'text', 'section' => 'about', 'description' => 'Текст раздела'],
            ['key' => 'about_text_2', 'value' => 'Я персональный стилист, которого вы знаете 20 лет. Ваше доверие - моя главная ценность. И вы знаете, как я обожаю с вами работать, одевать и переодевать вас, ходить с вами на шоппинги, кайфовать с вами в гардеробах. Работа с вашим внутренним состоянием - моя главная задача! ', 'type' => 'text', 'section' => 'about', 'description' => 'Текст раздела'],
            ['key' => 'about_text_3', 'value' => 'Моими клиентами являются все, кто хочет улучшить свой внешний образ от домохозяек до селебрити. Моими учителями и наставниками были Ракель Першкова, Катя Ножкина, Наташа Гольденберг, Айсель Трудель, Арсен Belief, Владимир Акопджанов, Родион и Ксения Мамонтовы.', 'type' => 'text', 'section' => 'about', 'description' => 'Текст раздела'],
            ['key' => 'about_text_4', 'value' => 'В этом гайде собраны более 1000 уникальных вещей на каждый день, десятки готовых образов, которые будут пополняться еженедельно. Используйте его для покупки отдельных вещей или готовых образов, а я в комментариях отвечу на все ваши вопросы и запросы в рамках этого гайда.', 'type' => 'text', 'section' => 'about', 'description' => 'Текст раздела'],
            ['key' => 'about_text_5', 'value' => 'Совсем скоро можно будет приобрести также и мужской гайд', 'type' => 'text', 'section' => 'about', 'description' => 'Текст раздела'],

            // Purpose Section
            ['key' => 'purpose_title', 'value' => 'Для чего нужен гайд', 'type' => 'text', 'section' => 'purpose', 'description' => 'Заголовок раздела'],
            ['key' => 'purpose_text_1', 'value' => 'В гайде собрано более 1000 вещей, десятки готовых образов, которые будут пополняться еженедельно в разных стилях и в разных ценовых сегментах - вам всегда будет, что надеть.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_2', 'value' => 'Соберете функциональный гардероб, где каждая вещь будет часто использоваться.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_3', 'value' => 'Если вы пока не готовы работать со стилистом, то гайд это отличный вариант, чтобы обновить ваш гардероб.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_4', 'value' => 'Сэкономите часы на походы по магазинам.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_5', 'value' => 'Гайд - это отличный подарок для вашей подруги, мамы, сестры и тд (для оформления подарка пишите на почту magda.stylist@mail.ru).', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],
            ['key' => 'purpose_text_6', 'value' => 'С помощью гайда вы откроете для себя новые бренды и магазины, о которых ранее могли не слышать - в нем представлены самые актуальные российские и зарубежные бренды.', 'type' => 'text', 'section' => 'purpose', 'description' => 'Текст раздела'],

            // Content Section
            ['key' => 'content_title', 'value' => 'СОДЕРЖАНИЕ ГАЙДА', 'type' => 'text', 'section' => 'content', 'description' => 'Заголовок раздела'],
            ['key' => 'content_item_1', 'value' => '1. Список зарубежных и российских магазинов', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 1'],
            ['key' => 'content_item_2_title', 'value' => '2. Более 1000 уникальных вещей:', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 2 - заголовок'],
            ['key' => 'content_item_3', 'value' => '3. Десятки готовых образов на любой случай жизни', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 3'],
            ['key' => 'content_item_4', 'value' => 'Пополнение гайда каждую неделю', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 4'],
            ['key' => 'content_item_5', 'value' => 'Дополнительные услуги:', 'type' => 'text', 'section' => 'content', 'description' => 'Пункт 5'],
            // Подпункты (Верхняя одежда, Верх, Низ и т.д.) оставлены статичными, так как они являются списком, который сложнее редактировать в CMS.
            // Если нужно, их можно добавить как отдельный ключ с HTML-разметкой или JSON-списком.

            // Purchase Section
            ['key' => 'purchase_title', 'value' => 'КУПИТЬ ДОСТУП К ГАЙДУ В TELEGRAM', 'type' => 'text', 'section' => 'purchase', 'description' => 'Заголовок раздела'],
            ['key' => 'purchase_info_1', 'value' => 'Получите онлайн-стилиста в кармане на 2 месяца (в этот период времени я отвечаю на все ваши вопросы и запросы в рамках гайда)', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 1'],
            ['key' => 'purchase_info_2', 'value' => 'Пополнение гайда - до 31.12.25.', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 2'],
            ['key' => 'purchase_info_3', 'value' => 'Доступ бессрочный. Вы сможете находиться в нем сколько угодно', 'type' => 'text', 'section' => 'purchase', 'description' => 'Информация 3'],
            ['key' => 'purchase_note', 'value' => 'После оплаты вам на почту придёт ссылка на Telegram-канал', 'type' => 'text', 'section' => 'purchase', 'description' => 'Важное замечание'],
            ['key' => 'purchase_price_1', 'value' => '5000 ₽', 'type' => 'text', 'section' => 'purchase', 'description' => 'Цена 1 месяца'],
            ['key' => 'purchase_payment_methods', 'value' => 'Способ оплаты: СБП', 'type' => 'text', 'section' => 'purchase', 'description' => 'Способы оплаты'],
            ['key' => 'purchase_email', 'value' => 'magda.stylist@mail.ru', 'type' => 'email', 'section' => 'purchase', 'description' => 'Email для вопросов'],

            // Footer Section
            ['key' => 'footer_company_name', 'value' => 'ИП Ефремова М. А.', 'type' => 'text', 'section' => 'footer', 'description' => 'Название компании'],
            ['key' => 'footer_inn', 'value' => 'ИНН 771553631885', 'type' => 'text', 'section' => 'footer', 'description' => 'ИНН'],
            ['key' => 'footer_ogrn', 'value' => 'ОГРНИП 324774600601827', 'type' => 'text', 'section' => 'footer', 'description' => 'ОГРНИП'],
            ['key' => 'footer_email', 'value' => 'magda.stylist@mail.ru', 'type' => 'email', 'section' => 'footer', 'description' => 'Email'],
            ['key' => 'footer_telegram_link', 'value' => 'https://t.me/magdalena_velikaya', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на Telegram-канал'],
            ['key' => 'footer_telegram_text', 'value' => 'Magdalena Velikaya', 'type' => 'text', 'section' => 'footer', 'description' => 'Текст ссылки на Telegram-канал'],
            ['key' => 'footer_privacy_link', 'value' => '/personal_data.pdf', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на политику конфиденциальности'],
            ['key' => 'footer_consent_link', 'value' => '/personal_agree.pdf', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на согласие обработки данных'],
            ['key' => 'footer_email_consent_link', 'value' => '/advertising.pdf', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на согласие рассылки'],
            ['key' => 'footer_offer_link', 'value' => '/oferta.pdf', 'type' => 'link', 'section' => 'footer', 'description' => 'Ссылка на публичную оферту'],
        ];

        foreach ($contents as $content ) {
            SiteContent::updateOrCreate(['key' => $content['key']], $content);
        }
    }
}
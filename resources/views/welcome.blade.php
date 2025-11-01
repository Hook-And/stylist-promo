<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ \App\Models\SiteContent::get('page_title') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <h1>{{ \App\Models\SiteContent::get('header_title') }}</h1>
        <p class="subtitle">{{ \App\Models\SiteContent::get('header_subtitle') }}</p>
        <p class="quote">{{ \App\Models\SiteContent::get('header_quote') }}</p>
        <p class="description">{{ \App\Models\SiteContent::get('header_description') }}</p>
        <a href="#purchase" class="btn">Купить</a>
    </header>

    <!-- Purpose Section -->
    <section class="purpose-section">
        <div class="container">
            <h2>{{ \App\Models\SiteContent::get('purpose_title') }}</h2>
            <div class="purpose-content">
                <div class="purpose-text">{{ \App\Models\SiteContent::get('purpose_text_1') }}</div>
                <div class="purpose-text">{{ \App\Models\SiteContent::get('purpose_text_2') }}</div>
                <div class="purpose-text">{{ \App\Models\SiteContent::get('purpose_text_3') }}</div>
                <div class="purpose-text">{{ \App\Models\SiteContent::get('purpose_text_4') }}</div>
                <div class="purpose-item">{{ \App\Models\SiteContent::get('purpose_item_1') }}</div>
                <div class="purpose-item">{{ \App\Models\SiteContent::get('purpose_item_2') }}</div>
                <div class="purpose-item">{{ \App\Models\SiteContent::get('purpose_item_3') }}</div>
                <div class="purpose-item">{{ \App\Models\SiteContent::get('purpose_item_4') }}</div>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="#purchase" class="btn">Купить</a>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <h2>{{ \App\Models\SiteContent::get('content_title') }}</h2>
            <div class="content-list">
                <div class="content-item">
                    <h3>{{ \App\Models\SiteContent::get('content_item_1') }}</h3>
                </div>
                <div class="content-item">
                    <h3>{{ \App\Models\SiteContent::get('content_item_2_title') }}</h3>
                    <ul class="sub-list">
                        <li>Верхняя одежда</li>
                        <li>Верх</li>
                        <li>Низ</li>
                        <li>Платья</li>
                        <li>Обувь</li>
                        <li>Аксессуары</li>
                        <li>Украшения</li>
                    </ul>
                </div>
                <div class="content-item">
                    <h3>{{ \App\Models\SiteContent::get('content_item_3') }}</h3>
                </div>
                <div class="content-item">
                    <h3>{{ \App\Models\SiteContent::get('content_item_4') }}</h3>
                </div>
                <div class="content-item">
                    <h3>{{ \App\Models\SiteContent::get('content_item_5') }}</h3>
                    <ul class="sub-list">
                        <li>Ответы на вопросы в комментариях</li>
                        <li>Скидка на мои услуги 30% до 31 декабря 2025 года</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="#purchase" class="btn">Купить</a>
            </div>
        </div>
    </section>

    <!-- Purchase Section -->
    <section class="purchase-section" id="purchase">
        <div class="purchase-content">
            <h2>{{ \App\Models\SiteContent::get('purchase_title') }}</h2>
            <div class="purchase-info">
                <p><strong>{{ \App\Models\SiteContent::get('purchase_info_1') }}</strong></p>
                <p><strong>{{ \App\Models\SiteContent::get('purchase_info_2') }}</strong></p>
                <p><strong>{{ \App\Models\SiteContent::get('purchase_info_3') }}</strong></p>
                <p class="note">{{ \App\Models\SiteContent::get('purchase_note') }}</p>
                <div class="price">
                    {{ \App\Models\SiteContent::get('purchase_price_1') }}
                </div>
                <p style="text-align: center; color: #999; margin-top: 20px;">{{ \App\Models\SiteContent::get('purchase_payment_methods') }}</p>
            </div>
            <!-- Форма оплаты остается статичной, но использует динамические маршруты -->
            <form action="{{ route('paykeeper.init') }}" method="POST" class="purchase-form">
                @csrf
                <div class="form-group">
                    <label for="name">Ваше Имя</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="btn">Оплатить</button>
            </form>
            <p style="margin-top: 30px; color: #999; font-size: 0.95rem;">Если остались вопросы: <a href="mailto:{{ \App\Models\SiteContent::get('purchase_email') }}" style="color: #fff; text-decoration: underline;">{{ \App\Models\SiteContent::get('purchase_email') }}</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <p><strong>{{ \App\Models\SiteContent::get('footer_company_name') }}</strong></p>
                <p>{{ \App\Models\SiteContent::get('footer_inn') }}</p>
                <p>{{ \App\Models\SiteContent::get('footer_ogrn') }}</p>
            </div>
            <div class="footer-info">
                <p><strong>Почта:</strong> <a href="mailto:{{ \App\Models\SiteContent::get('footer_email') }}" style="color: #fff;">{{ \App\Models\SiteContent::get('footer_email') }}</a></p>
                <p><strong>Телеграм-канал:</strong> <a href="{{ \App\Models\SiteContent::get('footer_telegram_link') }}" style="color: #fff;">{{ \App\Models\SiteContent::get('footer_telegram_text') }}</a></p>
            </div>
            <div class="footer-links">
                <a href="{{ \App\Models\SiteContent::get('footer_privacy_link') }}">Политика в отношении обработки персональных данных</a>
                <a href="{{ \App\Models\SiteContent::get('footer_consent_link') }}">Согласие на обработку персональных данных</a>
                <a href="{{ \App\Models\SiteContent::get('footer_email_consent_link') }}">Согласие на рассылку электронных сообщений</a>
                <a href="{{ \App\Models\SiteContent::get('footer_offer_link') }}">Публичная оферта</a>
            </div>
        </div>
    </footer>
</body>
</html>
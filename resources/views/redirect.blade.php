<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Доступ предоставлен</title>
    <meta http-equiv="refresh" content="1;url={{ $telegramLink }}">
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding-top: 50px; }
        .spinner { border: 4px solid rgba(0, 0, 0, 0.1 ); width: 36px; height: 36px; border-radius: 50%; border-left-color: #09f; animation: spin 1s ease infinite; margin: 20px auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>
    <h1>Доступ предоставлен!</h1>
    <p>Вы успешно оплатили доступ к каналу-гайду.</p>
    <div class="spinner"></div>
    <p>Через секунду вы будете автоматически перенаправлены в Telegram.</p>

    <script>
        // Дополнительная мера безопасности: открываем в новом окне, чтобы не засорять историю
        setTimeout(function() {
            window.open('{{ $telegramLink }}', '_blank');
            // Перенаправляем текущее окно на главную страницу
            window.location.href = '/'; 
        }, 1000); 
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Telegram Mini App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>
<body>
<h2>Telegram'dan giriş yapılıyor...</h2>

<script>
    const tg = window.Telegram.WebApp;
    tg.expand();

    const user = tg.initDataUnsafe.user;

    fetch("{{ url('/webapp/login') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            initData: tg.initData,
            user: user
        })
    })
        .then(res => res.json())
        .then(data => {
            window.location.href = "/webapp/dashboard";
            if (data.status === 'ok') {
                window.location.href = "/webapp/dashboard";
            } else {
                alert("Giriş doğrulanamadı");
            }
        });
</script>
</body>
</html>

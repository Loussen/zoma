document.addEventListener('DOMContentLoaded', async function () {
    const tg = window.Telegram.WebApp;
    tg.ready();

    if (tg.initData) {
        const payload = {
            initData: tg.initData
        };

        try {
            const response = await fetch('/api/telegram-auth', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload)
            });

            if (response.ok) {
                const data = await response.json();
                console.log("Login success", data);
            } else {
                const err = await response.json();
                console.error(err);
                alert('Telegram authentication failed!');
            }
        } catch (e) {
            console.error("Fetch error:", e);
        }
    } else {
        alert('Telegram WebApp initData not found!');
    }
});

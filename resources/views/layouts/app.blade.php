<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoma Zoma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        accent: '#06b6d4',
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col bg-gradient-to-br from-gray-900 via-slate-800 to-indigo-900 text-gray-100 dark bg-gray-900">
    <main class="flex-1 pb-20">
        @yield('content')
    </main>
    <nav class="fixed bottom-0 left-0 right-0 bg-gray-800 border-t border-gray-700 shadow flex justify-around items-center h-16 z-50 dark:bg-gray-900">
        <a href="{{ route('dashboard') }}" class="flex flex-col items-center text-gray-400 hover:text-primary transition">
            <span class="material-icons">home</span>
            <span class="text-xs">Ana Sayfa</span>
        </a>
        <a href="{{ route('market') }}" class="flex flex-col items-center text-gray-400 hover:text-primary transition">
            <span class="material-icons">storefront</span>
            <span class="text-xs">Market</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-400 hover:text-primary transition">
            <span class="material-icons">person</span>
            <span class="text-xs">Profil</span>
        </a>
    </nav>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

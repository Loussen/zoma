<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        'coffee-400': '#7B3F00',
                        'lilac-400': '#C8A2C8',
                    },
                    keyframes: {
                        blink: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.3' },
                        },
                    },
                    animation: {
                        blink: 'blink 1s infinite',
                    },
                },
            },
        }
    </script>
    <style>
        @keyframes egg-glow {
            0%, 100% {
                text-shadow:
                    0 0 5px currentColor,
                    0 0 10px currentColor,
                    0 0 20px currentColor;
                color: inherit;
            }
            50% {
                text-shadow: none;
                color: inherit;
            }
        }
        .egg-glow {
            animation: egg-glow 2s infinite;
        }

        /* iOS Safe Area Support */
        @supports (padding: max(0px)) {
            .pb-safe {
                padding-bottom: max(1rem, env(safe-area-inset-bottom));
            }
        }

        /* Fallback for older iOS versions */
        @supports not (padding: max(0px)) {
            .pb-safe {
                padding-bottom: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>
<body class="min-h-screen flex flex-col bg-gradient-to-br from-gray-900 via-slate-800 to-indigo-900 text-gray-100 dark bg-gray-900">
    <main class="flex-1 pb-24">
        @yield('content')
    </main>
    <nav class="fixed bottom-0 left-0 right-0 bg-gray-900/95 backdrop-blur-sm border-t border-gray-700/50 shadow-lg flex justify-around items-center h-15 z-50 pb-4 pt-2 pl-3 pr-2">
        <a href="{{ route('dashboard') }}"
                       class="flex flex-col items-center justify-center h-full px-3 pl-5 pr-5 pt-2 pb-2 {{ request()->routeIs('dashboard') ? 'bg-primary/20 rounded-lg' : 'text-gray-400' }} hover:text-primary transition-all duration-200">
            <span class="material-icons text-xl mb-1 text-white">home</span>
            <span class="text-xs font-medium text-white">Home</span>
        </a>

        <a href="{{ route('market') }}"
                       class="flex flex-col items-center justify-center h-full px-3 pl-5 pr-5 pt-2 pb-2 {{ request()->routeIs('market') ? 'bg-primary/20 rounded-lg ' : 'text-gray-400' }} hover:text-primary transition-all duration-200">
            <span class="material-icons text-xl mb-1 text-white">storefront</span>
            <span class="text-xs font-medium text-white">Store</span>
        </a>

        <a href="#"
           class="flex flex-col items-center justify-center h-full px-3 {{ request()->routeIs('profile') ? 'text-primary bg-primary/10 rounded-t-lg' : 'text-gray-400' }} hover:text-primary transition-all duration-200">
            <span class="material-icons text-xl mb-1">person</span>
            <span class="text-xs font-medium">Profil</span>
        </a>

        <a href="#"
           class="flex flex-col items-center justify-center h-full px-3 {{ request()->routeIs('profile') ? 'text-primary bg-primary/10 rounded-t-lg' : 'text-gray-400' }} hover:text-primary transition-all duration-200">
            <span class="material-icons text-xl mb-1">person</span>
            <span class="text-xs font-medium">Profil</span>
        </a>

        <a href="#"
           class="flex flex-col items-center justify-center h-full px-3 {{ request()->routeIs('profile') ? 'text-primary bg-primary/10 rounded-t-lg' : 'text-gray-400' }} hover:text-primary transition-all duration-200">
            <span class="material-icons text-xl mb-1">person</span>
            <span class="text-xs font-medium">Profil</span>
        </a>

        <a href="#"
           class="flex flex-col items-center justify-center h-full px-3 {{ request()->routeIs('profile') ? 'text-primary bg-primary/10 rounded-t-lg' : 'text-gray-400' }} hover:text-primary transition-all duration-200">
            <span class="material-icons text-xl mb-1">person</span>
            <span class="text-xs font-medium">Profil</span>
        </a>
    </nav>

    <!-- Alert Component -->
{{--    <div id="alert-container" class="fixed top-4 left-4 right-4 z-50 transform transition-all duration-300 translate-y-[-100%] opacity-0">--}}
{{--        <div class="bg-white rounded-lg shadow-lg border-l-4 border-green-500 p-4 flex items-start space-x-3">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">--}}
{{--                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flex-1 min-w-0">--}}
{{--                <p class="text-sm font-medium text-gray-900" id="alert-title">Success!</p>--}}
{{--                <p class="text-sm text-gray-500 mt-1" id="alert-message">Your action was completed successfully.</p>--}}
{{--            </div>--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <button onclick="hideAlert()" class="text-gray-400 hover:text-gray-600 transition-colors">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <script>
        // Telegram WebApp setup
        document.addEventListener('DOMContentLoaded', function() {
            if (window.Telegram && window.Telegram.WebApp) {
                const tg = window.Telegram.WebApp;

                                // Enable closing confirmation
                if (typeof tg.enableClosingConfirmation === 'function') {
                    tg.enableClosingConfirmation();
                    console.log('Closing confirmation enabled');
                }
                
                // Expand the WebApp
                if (typeof tg.expand === 'function') {
                    tg.expand();
                }
                
                // Request fullscreen
                if (typeof tg.requestFullscreen === 'function') {
                    tg.requestFullscreen();
                    console.log('Fullscreen requested');
                }
                
                // Ready the WebApp
                if (typeof tg.ready === 'function') {
                    tg.ready();
                }

                console.log('Telegram WebApp initialized successfully');
            } else {
                console.log('Telegram WebApp not available');
            }
        });

        // Alert functions
        // function showAlert(title, message, type = 'success') {
        //     const container = document.getElementById('alert-container');
        //     const titleEl = document.getElementById('alert-title');
        //     const messageEl = document.getElementById('alert-message');

        //     // Set content
        //     titleEl.textContent = title;
        //     messageEl.textContent = message;

        //     // Set colors based on type
        //     const borderColor = type === 'success' ? 'border-green-500' :
        //                        type === 'error' ? 'border-red-500' :
        //                        type === 'warning' ? 'border-yellow-500' : 'border-blue-500';

        //     const bgColor = type === 'success' ? 'bg-green-100' :
        //                    type === 'error' ? 'bg-red-100' :
        //                    type === 'warning' ? 'bg-yellow-100' : 'bg-blue-100';

        //     const iconColor = type === 'success' ? 'text-green-600' :
        //                      type === 'error' ? 'text-red-600' :
        //                      type === 'warning' ? 'text-yellow-600' : 'text-blue-600';

        //     // Update classes
        //     container.querySelector('.border-l-4').className = `border-l-4 ${borderColor}`;
        //     container.querySelector('.bg-green-100').className = `w-8 h-8 ${bgColor} rounded-full flex items-center justify-center`;
        //     container.querySelector('.text-green-600').className = `w-5 h-5 ${iconColor}`;

        //     // Show alert
        //     container.classList.remove('translate-y-[-100%]', 'opacity-0');
        //     container.classList.add('translate-y-0', 'opacity-100');

        //     // Auto hide after 5 seconds
        //     setTimeout(() => {
        //         hideAlert();
        //     }, 5000);
        // }

        // function hideAlert() {
        //     const container = document.getElementById('alert-container');
        //     container.classList.add('translate-y-[-100%]', 'opacity-0');
        //     container.classList.remove('translate-y-0', 'opacity-100');
        // }

        // // Make functions globally available
        // window.showAlert = showAlert;
        // window.hideAlert = hideAlert;
    </script>

    @stack('scripts')
</body>
</html>

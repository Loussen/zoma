<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Zoma Zoma - Giriş</title>
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
                        pulse: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        spin: {
                            '0%': { transform: 'rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg)' },
                        }
                    },
                    animation: {
                        blink: 'blink 1s infinite',
                        pulse: 'pulse 2s infinite',
                        float: 'float 3s ease-in-out infinite',
                        spin: 'spin 1s linear infinite',
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

        .loading-dots::after {
            content: '';
            animation: dots 1.5s steps(5, end) infinite;
        }

        @keyframes dots {
            0%, 20% { content: ''; }
            40% { content: '.'; }
            60% { content: '..'; }
            80%, 100% { content: '...'; }
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>
<body class="min-h-screen flex flex-col bg-gradient-to-br from-gray-900 via-slate-800 to-indigo-900 text-gray-100 dark bg-gray-900">
    <div class="flex-1 flex items-center justify-center px-4">
        <div class="text-center max-w-md w-full">
            <!-- Logo/Icon Section -->
            <div class="mb-8">
                <div class="relative inline-block">
                    <!-- Main Zoma Zoma Logo -->
                    <div class="text-6xl font-bold mb-4 animate-float">
                        <svg width="40" height="80" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                            <text x="2" y="18" font-size="30" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                            <text x="11" y="11" font-size="22" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
                        </svg>
                    </div>

                    <!-- Floating Eggs Animation -->
                    <div class="absolute -top-2 -right-2">
                        <span class="material-icons text-yellow-400 text-2xl animate-pulse">egg</span>
                    </div>
                    <div class="absolute -bottom-2 -left-2">
                        <span class="material-icons text-orange-300 text-xl animate-pulse" style="animation-delay: 0.5s;">egg</span>
                    </div>
                    <div class="absolute top-1/2 -right-6">
                        <span class="material-icons text-red-500 text-lg animate-pulse" style="animation-delay: 1s;">egg</span>
                    </div>
                </div>

                <h1 class="text-2xl font-bold text-white mb-2">Zoma Zoma</h1>
                <p class="text-gray-400 text-sm">Eggs breeding game</p>
            </div>

            <!-- Loading Section -->
            <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 shadow-xl">
                <div class="flex items-center justify-center mb-6">
                    <!-- Spinning Loading Icon -->
                    <div class="relative">
                        <div class="w-12 h-12 border-4 border-gray-600 border-t-primary rounded-full animate-spin"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="material-icons text-primary text-xl">egg</span>
                        </div>
                    </div>
                </div>

                <h2 class="text-lg font-semibold text-white mb-2">
                    Logging in from Telegram
                </h2>
                <p class="text-gray-400 text-sm loading-dots">
                    Verification process in progress
                </p>

                <!-- Progress Bar -->
                <div class="mt-6">
                    <div class="w-full bg-gray-700 rounded-full h-2">
                        <div class="bg-gradient-to-r from-primary to-accent h-2 rounded-full animate-pulse" style="width: 60%"></div>
                    </div>
                </div>
            </div>

            <!-- Status Messages -->
            <div class="mt-6 space-y-2">
                <div class="flex items-center justify-center gap-2 text-sm text-gray-400">
                    <span class="material-icons text-green-400 text-sm">check_circle</span>
                    <span>Telegram connection established</span>
                </div>
                <div class="flex items-center justify-center gap-2 text-sm text-gray-400">
                    <div class="w-3 h-3 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
                    <span>Verifying user</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tg = window.Telegram.WebApp;
        tg.expand();

        tg.requestFullscreen();

        const user = tg.initDataUnsafe.user;

        // Add some delay for better UX
        setTimeout(() => {
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
                if (data.status === 'ok') {
                    // Show success message before redirect
                    document.querySelector('.bg-gray-800\\/50').innerHTML = `
                        <div class="text-center">
                            <div class="flex items-center justify-center mb-6">
                                <span class="material-icons text-green-400 text-6xl">check_circle</span>
                            </div>
                            <h2 class="text-lg font-semibold text-white mb-2">Login successful!</h2>
                            <p class="text-gray-400 text-sm">Redirecting...</p>
                        </div>
                    `;

                    setTimeout(() => {
                        window.location.href = "/webapp/dashboard";
                    }, 1000);
                } else {
                    // Show error message
                    document.querySelector('.bg-gray-800\\/50').innerHTML = `
                        <div class="text-center">
                            <div class="flex items-center justify-center mb-6">
                                <span class="material-icons text-red-400 text-6xl">error</span>
                            </div>
                            <h2 class="text-lg font-semibold text-white mb-2">Login failed</h2>
                            <p class="text-gray-400 text-sm">Verification process failed</p>
                            <button onclick="location.reload()" class="mt-4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-accent transition">
                                Try Again
                            </button>
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.querySelector('.bg-gray-800\\/50').innerHTML = `
                    <div class="text-center">
                        <div class="flex items-center justify-center mb-6">
                            <span class="material-icons text-red-400 text-6xl">error</span>
                        </div>
                                                    <h2 class="text-lg font-semibold text-white mb-2">Connection error</h2>
                            <p class="text-gray-400 text-sm">Please check your internet connection</p>
                            <button onclick="location.reload()" class="mt-4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-accent transition">
                                Try Again
                            </button>
                    </div>
                `;
            });
        }, 2000); // 2 second delay for better UX
    </script>
</body>
</html>

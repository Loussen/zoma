@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8 px-4">
    <div class="flex items-center justify-between mb-8">
        <div>
            <div class="text-xs text-gray-400">Balance</div>
            <div class="flex items-center gap-2">
                <span class="text-2xl font-bold text-primary">8,750</span>
                <span class="inline-block align-middle">
                    <!-- Elegant zz symbol SVG: big Z, smaller Z starting from the middle, shifted up and right -->
                    <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                      <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                      <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
                    </svg>
                </span>
            </div>
            <div class="text-xs text-gray-400">1
            <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>
            ≈ $0.10</div>
        </div>
    </div>
    @if(auth()->user())
      <div class="text-center text-lg font-bold mb-4">
        {{ auth()->user()->telegram_first_name }} {{ auth()->user()->telegram_last_name }}
      </div>
    @endif
    <h2 class="text-lg font-semibold mb-4 text-accent">Market</h2>
    <div class="space-y-6">
        <!-- Chicken -->
        <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col gap-2">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-4">
                    <span class="material-icons text-5xl text-yellow-400">egg</span>
                    <div>
                        <div class="font-semibold text-lg">Chicken</div>
                        <div class="text-xs text-gray-400 mt-1">Price: <span class="text-primary font-bold">500 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span></div>
                    </div>
                </div>
                <button class="px-4 py-2 bg-primary text-white rounded-lg font-semibold shadow hover:bg-accent transition">Buy</button>
            </div>
            <div class="mt-2">
                <div class="text-xs text-gray-400 font-semibold mb-1">Eggs:</div>
                <ul class="flex flex-col gap-1">
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-400"></span>
                        </span>
                        <span class="font-bold text-yellow-400">Yellow Egg</span>
                        <span class="text-xs bg-yellow-400/20 text-yellow-400 px-2 py-0.5 rounded-full">+1 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">10 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                        </span>
                        <span class="font-bold text-red-500">Red Egg</span>
                        <span class="text-xs bg-red-500/20 text-red-500 px-2 py-0.5 rounded-full">+3 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">30 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-900 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-amber-900"></span>
                        </span>
                        <span class="font-bold text-amber-900">Brown Egg</span>
                        <span class="text-xs bg-amber-900/20 text-amber-900 px-2 py-0.5 rounded-full">+10 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">1 hour</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Ostrich -->
        <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col gap-2">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-4">
                    <span class="material-icons text-5xl text-blue-500">egg</span>
                    <div>
                        <div class="font-semibold text-lg">Ostrich</div>
                        <div class="text-xs text-gray-400 mt-1">Price: <span class="text-primary font-bold">5000 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span></div>
                    </div>
                </div>
                <button class="px-4 py-2 bg-primary text-white rounded-lg font-semibold shadow hover:bg-accent transition">Buy</button>
            </div>
            <div class="mt-2">
                <div class="text-xs text-gray-400 font-semibold mb-1">Eggs:</div>
                <ul class="flex flex-col gap-1">
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                        </span>
                        <span class="font-bold text-blue-500 animate-pulse">Blue Egg</span>
                        <span class="text-xs bg-blue-500/20 text-blue-500 px-2 py-0.5 rounded-full animate-pulse">+8 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">45 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </span>
                        <span class="font-bold text-green-500 animate-pulse">Green Egg</span>
                        <span class="text-xs bg-green-500/20 text-green-500 px-2 py-0.5 rounded-full animate-pulse">+5 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">20 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full" style="background-color: #C8A2C8; opacity: 0.75;"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3" style="background-color: #C8A2C8;"></span>
                        </span>
                        <span class="font-bold" style="color: #C8A2C8;">Lilac Egg</span>
                        <span class="text-xs px-2 py-0.5 rounded-full" style="background-color: #C8A2C820; color: #C8A2C8;">+12 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">2 hours</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Goose -->
        <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col gap-2">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-4">
                    <span class="material-icons text-5xl text-gray-100">egg</span>
                    <div>
                        <div class="font-semibold text-lg">Goose</div>
                        <div class="text-xs text-gray-400 mt-1">Price: <span class="text-primary font-bold">1200 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span></div>
                    </div>
                </div>
                <button class="px-4 py-2 bg-primary text-white rounded-lg font-semibold shadow hover:bg-accent transition">Buy</button>
            </div>
            <div class="mt-2">
                <div class="text-xs text-gray-400 font-semibold mb-1">Eggs:</div>
                <ul class="flex flex-col gap-1">
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-100 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-gray-100"></span>
                        </span>
                        <span class="font-bold text-gray-100 animate-pulse">White Egg</span>
                        <span class="text-xs bg-gray-100/20 text-gray-100 px-2 py-0.5 rounded-full animate-pulse">+2 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">15 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-orange-400"></span>
                        </span>
                        <span class="font-bold text-orange-400 animate-pulse">Orange Egg</span>
                        <span class="text-xs bg-orange-400/20 text-orange-400 px-2 py-0.5 rounded-full animate-pulse">+4 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">40 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-400"></span>
                        </span>
                        <span class="font-bold text-pink-400 animate-pulse">Pink Egg</span>
                        <span class="text-xs bg-pink-400/20 text-pink-400 px-2 py-0.5 rounded-full animate-pulse">+7 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">1 hour</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Duck -->
        <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col gap-2">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-4">
                    <span class="material-icons text-5xl text-green-400">egg</span>
                    <div>
                        <div class="font-semibold text-lg">Duck</div>
                        <div class="text-xs text-gray-400 mt-1">Price: <span class="text-primary font-bold">2000 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span></div>
                    </div>
                </div>
                <button class="px-4 py-2 bg-primary text-white rounded-lg font-semibold shadow hover:bg-accent transition">Buy</button>
            </div>
            <div class="mt-2">
                <div class="text-xs text-gray-400 font-semibold mb-1">Eggs:</div>
                <ul class="flex flex-col gap-1">
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-300 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-orange-300"></span>
                        </span>
                        <span class="font-bold text-orange-300">Sunset Egg</span>
                        <span class="text-xs bg-orange-300/20 text-orange-300 px-2 py-0.5 rounded-full">+6 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">20 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-300 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-teal-300"></span>
                        </span>
                        <span class="font-bold text-teal-300">Mint Egg</span>
                        <span class="text-xs bg-teal-300/20 text-teal-300 px-2 py-0.5 rounded-full">+9 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">45 min</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-300 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-amber-300"></span>
                        </span>
                        <span class="font-bold text-amber-300">Golden Egg</span>
                        <span class="text-xs bg-amber-300/20 text-amber-300 px-2 py-0.5 rounded-full">+15 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
            </svg>  </span>
                        <span class="text-xs text-gray-400">2 hours</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
 
@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8 px-4">
    @if($user)
        <div class="text-center text-lg font-bold mb-4">
            {{ $user->telegram_first_name }} {{ $user->telegram_last_name }}
        </div>
    @endif
    <div class="flex items-center justify-between mb-6">
        <div>
            <div class="text-xs text-gray-400">Balance</div>
            <div class="flex items-center gap-2">
                <span class="text-2xl font-bold text-primary">
                    {{ $user && $user->zoma_balance ? (fmod($user->zoma_balance, 1) != 0 ? number_format($user->zoma_balance, 2) : number_format($user->zoma_balance, 0)) : 0 }}
                </span>
                <span class="inline-block align-middle">
                    <!-- Elegant zz symbol SVG: big Z, smaller Z starting from the middle, shifted up and right -->
                    <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                      <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                      <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
                    </svg>
                </span>
            </div>
            <div class="text-xs text-gray-400">1 <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                    <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                    <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
                </svg>   ≈ $0.10</div>
        </div>
        <div>
            <div class="text-xs text-gray-400">Total Eggs</div>
            <div class="text-2xl font-bold text-yellow-400">{{ $totalEggs }}</div>
        </div>
    </div>
    <h2 class="text-lg font-semibold mb-4 text-accent">Market</h2>
    <div class="space-y-6">
        @foreach($birds as $bird)
            <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col gap-2">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-4">
                        <span class="material-icons text-5xl text-{{ $bird->color }}">{{ $bird->emoji }}</span>
                        <div>
                            <div class="font-semibold text-lg mt-2">{{ $bird->name }}</div>
                            <div class="text-xs text-gray-400 mt-2">Price:
                                <span class="text-primary font-bold">{{ $bird->price }}
                                    <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                                        <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                                        <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="px-4 py-2 bg-primary text-white rounded-lg font-semibold shadow hover:bg-accent transition">Buy</button>
                </div>
                <div class="mt-2">
                    <div class="text-xs text-gray-400 font-semibold mb-1">Eggs:</div>
                    <ul class="flex flex-col gap-1">
                        @foreach ($bird->eggs as $egg)
                            <li class="flex items-center gap-2">
                                <span class="relative flex h-6 w-3 items-center justify-center" style="background-color: transparent;">
                                        <span class="material-icons text-{{ $egg->color }} text-2xl" style="line-height: 1;">
                                            egg
                                        </span>
                                    </span>
                                <span class="font-bold text-{{ $egg->color }}">{{ $egg->name }}</span>
                                <span class="text-xs bg-yellow-400/20 text-{{ $egg->color }} px-2 py-0.5 rounded-full">+{{ $egg->value }}
                                        <svg width="20" height="14" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                                            <text x="2" y="18" font-size="22" font-family="monospace" font-weight="bold" fill="#6366f1" opacity="0.8">Z</text>
                                            <text x="11" y="11" font-size="14" font-family="monospace" font-weight="bold" fill="#06b6d4" opacity="0.95">Z</text>
                                            </svg>
                                    </span>
                                <span class="text-xs text-gray-400">{{ $egg->interval_minutes }} min</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

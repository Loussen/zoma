@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-extrabold mb-6 text-center tracking-tight text-primary">Zoma Zoma Mini Oyunlar</h1>
    <div class="mb-8">
        <h2 class="text-lg font-semibold mb-3 text-accent">Popüler Oyunlar</h2>
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition transform duration-200 dark:bg-gray-800">
                <span class="material-icons text-5xl text-primary mb-3">sports_esports</span>
                <span class="font-semibold text-lg mb-1">Zoma Puzzle</span>
                <button class="mt-2 px-4 py-1.5 bg-primary text-white rounded-lg text-sm font-medium shadow hover:bg-accent transition">Oyna</button>
            </div>
            <div class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition transform duration-200 dark:bg-gray-800">
                <span class="material-icons text-5xl text-accent mb-3">casino</span>
                <span class="font-semibold text-lg mb-1">Zoma Slot</span>
                <button class="mt-2 px-4 py-1.5 bg-accent text-white rounded-lg text-sm font-medium shadow hover:bg-primary transition">Oyna</button>
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-lg font-semibold mb-3 text-accent">Seviyeler</h2>
        <ul class="space-y-3">
            <li class="bg-gray-800 rounded-xl shadow p-4 flex items-center justify-between dark:bg-gray-800">
                <span class="font-medium">Seviye 1</span>
                <span class="text-xs bg-primary/20 text-primary px-3 py-1 rounded-full">Başlangıç</span>
            </li>
            <li class="bg-gray-800 rounded-xl shadow p-4 flex items-center justify-between dark:bg-gray-800">
                <span class="font-medium">Seviye 2</span>
                <span class="text-xs bg-accent/20 text-accent px-3 py-1 rounded-full">Orta</span>
            </li>
            <li class="bg-gray-800 rounded-xl shadow p-4 flex items-center justify-between dark:bg-gray-800">
                <span class="font-medium">Seviye 3</span>
                <span class="text-xs bg-yellow-400/20 text-yellow-400 px-3 py-1 rounded-full">Zor</span>
            </li>
        </ul>
    </div>
</div>
@endsection 
<?php

use App\Http\Controllers\Api\TelegramAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;

//Route::post('/telegram-auth', [TelegramAuthController::class, 'loginOrRegister'])
//    ->middleware(['telegram.verify','web']);
//
//Route::get('/', [MainController::class, 'dashboard'])->name('dashboard');
//Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
//Route::get('/market', [MainController::class, 'market'])->name('market');

Route::get('/webapp', [MainController::class, 'index']);
Route::post('/webapp/login', [MainController::class, 'login']);

Route::middleware('webapp.auth')->group(function () {
    Route::get('/webapp/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('/webapp/market', [MainController::class, 'market'])->name('market');
    Route::get('/webapp/logout', [MainController::class, 'logout']);
});

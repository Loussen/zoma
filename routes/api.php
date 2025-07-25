<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TelegramAuthController;
use App\Http\Middleware\TelegramVerifyMiddleware;

//Route::post('/telegram-auth', [TelegramAuthController::class, 'loginOrRegister'])
//    ->middleware(['telegram.verify','web']);

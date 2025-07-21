<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\TelegramHelper;

class TelegramVerifyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $initData = $request->input('initData'); // RAW initData

        if (!TelegramHelper::verifyTelegramAuth($initData, $botToken)) {
            return response()->json(['error' => 'Invalid Telegram login'], 401);
        }

        // initData'dan user bilgilerini çıkar
        parse_str($initData, $parsedData);
        $user = json_decode(urldecode($parsedData['user']), true);

        $request->merge([
            'telegram_id' => $user['id'] ?? null,
            'telegram_username' => $user['username'] ?? null,
            'telegram_first_name' => $user['first_name'] ?? null,
            'telegram_last_name' => $user['last_name'] ?? null,
        ]);

        return $next($request);
    }



}

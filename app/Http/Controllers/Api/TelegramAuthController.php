<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TelegramAuthController extends Controller
{
    public function loginOrRegister(Request $request): JsonResponse
    {
        $data = $request->all();

        $user = Customer::where('telegram_id', $data['telegram_id'])->first();

        $userData = [
            'telegram_username'   => $data['telegram_username'] ?? $user->telegram_username ?? null,
            'telegram_first_name' => $data['telegram_first_name'] ?? $user->telegram_first_name ?? null,
            'telegram_last_name'  => $data['telegram_last_name'] ?? $user->telegram_last_name ?? null,
            'name'                => trim(($data['telegram_first_name'] ?? $user->telegram_first_name ?? '') . ' ' . ($data['telegram_last_name'] ?? $user->telegram_last_name ?? '')),
        ];

        if (!$user) {
            $user = Customer::create(array_merge($userData, [
                'telegram_id' => $data['telegram_id'],
                'email'       => $data['telegram_id'] . '@telegram.local',
                'password'    => bcrypt(uniqid()),
            ]));
        } else {
            $user->update($userData);
        }

        Auth::login($user);
        // If using Sanctum or Passport, you can return a token:
        $token = $user->createToken('telegram')->plainTextToken;

        Log::info($token);

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function index()
    {
        return view('webapp');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'initData' => 'required|string',
            'user' => 'required|array',
        ]);

        $isValid = $this->verifyTelegramInitData($data['initData']);

        if (!$isValid) {
            return response()->json(['error' => 'Verification failed'], 403);
        }

        $user = Customer::updateOrCreate(
            ['telegram_id' => $data['user']['id']],
            [
                'telegram_username' => $data['user']['username'] ?? null,
                'telegram_first_name' => $data['user']['first_name'] ?? null,
                'telegram_last_name' => $data['user']['last_name'] ?? null,
                'name' => $data['user']['first_name'] ?? null,
            ]
        );

        session(['auth_user' => $user]);

        return response()->json(['status' => 'ok']);
    }

    public function dashboard()
    {
        $user = session('auth_user');
        return view('dashboard', compact('user'));
    }

    public function logout()
    {
        session()->forget('auth_user');
        return redirect('/webapp');
    }

    private function verifyTelegramInitData($initData)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');

        $data_check_string = $initData;

        $data_check_arr = explode('&', rawurldecode($data_check_string));

        $needle = 'hash=';

        $check_hash = FALSE;
        foreach($data_check_arr AS &$val){
            if(substr($val, 0, strlen($needle)) === $needle){
                $check_hash = substr_replace($val, '', 0, strlen($needle));
                $val = NULL;
            }
        }

        $data_check_arr = array_filter($data_check_arr);
        sort($data_check_arr);

        $data_check_string = implode("\n", $data_check_arr);
        $secret_key = hash_hmac('sha256', $botToken, "WebAppData", true);
        $hash = bin2hex(hash_hmac('sha256', $data_check_string, $secret_key, true) );

        if(strcmp($hash, $check_hash) === 0){
            return true;
        } else {
            return false;
        }
    }

    public function market()
    {
        return view('market');
    }
}

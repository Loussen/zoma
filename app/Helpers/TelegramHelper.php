<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class TelegramHelper
{
    /**
     * Verify Telegram WebApp/Login Widget data integrity.
     * @param array $data All Telegram params (including hash)
     * @param string $botToken Your bot token
     * @return bool
     */
    public static function verifyTelegramAuth(string $initData, string $botToken): bool
    {
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

}

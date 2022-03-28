<?php

use App\Models\Setting;

if(!function_exists('get_setting'))
{
    function get_setting($key)
    {
        return Setting::value($key);
    }
}

if (! function_exists('short_string')) {
    function short_string($str) {
            $rest = substr($str, 0, 10);
            return $rest;
    }
}
<?php

namespace App\Core;

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function get($key, $trim = true)
    {
        if (!array_key_exists($key, $_GET)) {
            throw new \Exception("Error Processing Request");
        }
        return trim(strip_tags($_GET[$key]));
    }

    public function post($key, $trim = true)
    {
        if (!array_key_exists($key, $_POST)) {
            throw new \Exception("Error Processing Request");
        }
        return trim(strip_tags($_POST[$key]));
    }
}

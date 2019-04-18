<?php

namespace App\Core;

class Config
{

    public static $config = [];

    public static function get($key)
    {
        if (!self::$config) {
            $configFiles = [
                'app.php',
                'database.php'
            ];
            foreach ($configFiles as $file) {
                self::loadConfig($file);
            }
        }
        return self::$config[$key];
    }
    private static function loadConfig($configFile)
    {
        if (!file_exists('../config/'.$configFile)) {
            return false;
        }
        $configs = require '../config/'.$configFile;
        self::$config = array_merge(self::$config, $configs);
    }
}

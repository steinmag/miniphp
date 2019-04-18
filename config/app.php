<?php

return [

     /*
    |--------------------------------------------------------------------------
    | Application paths
    |--------------------------------------------------------------------------
    |
    | Here you may specify the different paths that you
    | want to use throughout the entire application.
    |
    */
    "base_path" => realpath(dirname(__FILE__)."/../"),
    "core_path" => realpath(dirname(__FILE__)."/../")."/app/core/",
    "app_path" => realpath(dirname(__FILE__)."/../")."/app/",
    "resource_path" => realpath(dirname(__FILE__)."/../")."/resources/",
    "views_path" => realpath(dirname(__FILE__)."/../")."/resources/views/",
    "cache_path" => realpath(dirname(__FILE__)."/../")."/storage/cache/",

];

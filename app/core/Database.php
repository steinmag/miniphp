<?php
use Illuminate\Database\Capsule\Manager as DB;

$database = new DB;
$database->addConnection([
    'driver'    => env('DB_CONNECTION'),
    'host'      => env('DB_HOST'),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => ''
]);

$database->setAsGlobal();
$database->bootEloquent();

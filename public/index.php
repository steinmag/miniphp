<?php

require __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../bootstrap/app.php';

 // Load helper functinos
require __DIR__.'/../bootstrap/helpers.php';

// Boot up Eloquent
include App\Core\Config::get('core_path') . 'Database.php';

// New up the router and load routes
App\Core\Router::load('routes/web.php')
    ->direct(App\Core\Request::uri(), App\Core\Request::method());

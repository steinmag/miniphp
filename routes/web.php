<?php

$router->get('', 'HomeController@index');
$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@home');
$router->get('test', 'HomeController@test');

$router->get('users', 'UsersController@index');

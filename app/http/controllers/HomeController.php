<?php

namespace App\http\controllers;

use App\http\controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}

<?php

namespace App\http\controllers;

use App\http\controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::take(10)->get();
        return view('users.list', compact('users'));
    }
}

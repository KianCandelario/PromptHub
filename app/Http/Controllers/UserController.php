<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function signup() {
        return view('signup');
    }

    public function signin() {
        return view('login');
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('register', [UserController::class, 'signup']);
Route::get('login', [UserController::class, 'signin']);

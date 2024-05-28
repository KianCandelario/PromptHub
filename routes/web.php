<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/home', [UserController::class, 'home_page']);

Route::get('register', [UserController::class, 'signup']);

Route::post('/store', [UserController::class, 'store']);

Route::get('login', [UserController::class, 'signin']);
Route::post('/login', [UserController::class, 'authenticate']);
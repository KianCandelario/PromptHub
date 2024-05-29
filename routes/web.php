<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'landing_page']);

Route::get('register', [UserController::class, 'signup']);

Route::post('/store', [UserController::class, 'store']);

Route::get('login', [UserController::class, 'signin']);
Route::post('/login', [UserController::class, 'authenticate']);
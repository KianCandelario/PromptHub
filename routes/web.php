<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckJustRegistered;


Route::get('/', [UserController::class, 'landing_page']);
Route::get('/home', [UserController::class, 'home_page'])->middleware('auth');


// Register
Route::get('/registered', [UserController::class, 'registered']);
Route::get('register', [UserController::class, 'signup']);
Route::post('/store', [UserController::class, 'store']);

// Log in
Route::get('login', [UserController::class, 'signin']);
Route::post('/login', [UserController::class, 'authenticate']);

// Log out
Route::post('/logout', [UserController::class, 'logout']);
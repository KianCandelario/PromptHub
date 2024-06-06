<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckJustRegistered;


Route::get('/', [UserController::class, 'landing_page']);
Route::get('/home', [UserController::class, 'home_page'])->middleware('auth')->name('home');
Route::get('/about-out', [UserController::class, 'about_out']);
Route::get('/about', [UserController::class, 'about'])->name('about');


// Register
Route::get('/registered', [UserController::class, 'registered'])->middleware('auth');
Route::get('register', [UserController::class, 'signup']);
Route::post('/store', [UserController::class, 'store']);

// Log in
Route::get('login', [UserController::class, 'signin']);
Route::post('/login', [UserController::class, 'authenticate']);

// Log out
Route::post('/logout', [UserController::class, 'logout']);

// Blog posts
Route::get('/create-post', [PostController::class, 'createPostPage'])->middleware('auth')->name('create-post');
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/posts', [PostController::class, 'viewPosts'])->middleware('auth')->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->middleware('auth')->name('posts.show');
Route::get('/edit-post/{post}', [PostController::class, 'editPage'])->middleware('auth')->name('posts.edit');
Route::put('/edit-post/{post}', [PostController::class, 'updatePost'])->middleware('auth');
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost'])->middleware('auth');
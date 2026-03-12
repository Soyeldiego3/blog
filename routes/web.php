<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);
Route::get('/', [PostController::class, 'index'])->name('home');
Route::redirect('/posts', '/');   // opcional: redirige /posts a / para no tener duplicado

Route::get('/login', fn() => view('login.login'))->name('login');
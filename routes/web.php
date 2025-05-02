<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

/* home route */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
/* single action countroller route call */
Route::get('/about', AboutController::class)->name('about');
/* resource route */
Route::resource('posts', PostController::class);

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
})->name('register');

Route::get('/cadastro', [UserController::class, 'create'])->name('get.register');
Route::post('/cadastro', [UserController::class, 'store'])->name('post.register');

Route::get('/login', [LoginController::class, 'index'])->name('get.login');

Route::get('/home', [HomeController ::class, 'create'])->name('get.home');

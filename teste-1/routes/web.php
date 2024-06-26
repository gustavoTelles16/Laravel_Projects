<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', [UserController::class, 'create'])->name('get.register');
Route::post('/cadastro', [UserController::class, 'store'])->name('post.register');

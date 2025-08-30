<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('auth/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('auth/postRegister', [AuthController::class, 'register'])->name('postRegister');

Route::get('auth/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('auth/postLogin', [AuthController::class, 'login'])->name('postLogin');

Route::get('/', function () {
    return view('welcome');
});

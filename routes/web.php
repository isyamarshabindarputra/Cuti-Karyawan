<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('auth/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('auth/postRegister', [AuthController::class, 'register'])->name('postRegister');

Route::get('/', function () {
    return view('welcome');
});

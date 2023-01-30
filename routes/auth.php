<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Registeration auth
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/register/admin', [RegisteredUserController::class, 'adminRegisterForm']);
    Route::post('/register/admin', [RegisteredUserController::class, 'createAdmin']);

    // Login auth
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/login/admin', [LoginController::class, 'adminLoginForm']);
    Route::post('/login/admin', [LoginController::class, 'adminLogin']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

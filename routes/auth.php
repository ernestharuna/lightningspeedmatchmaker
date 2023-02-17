<?php

use Illuminate\Http\Request;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::middleware('guest')->group(function () {
    // Registeration routes
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/register/admin', [RegisteredUserController::class, 'adminRegisterForm']);
    Route::post('/register/admin', [RegisteredUserController::class, 'createAdmin']);

    // Login routes
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/login/admin', [LoginController::class, 'adminLoginForm'])->name('admin.login');
    Route::post('/login/admin', [LoginController::class, 'adminLogin']);
});

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('user.auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

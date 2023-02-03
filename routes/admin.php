<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscriptionsController;

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/subscription', [AdminController::class, 'manageSubs'])->name('manage.subs');

    Route::get('admin/dashboard/subscription/edit', [AdminController::class, 'edit'])->name('sub.edit');
    Route::put('admin/dashboard/subscription/edit', [AdminController::class, 'update'])->name('sub.update');
});

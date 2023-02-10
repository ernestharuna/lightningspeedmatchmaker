<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\UserController;
use Database\Factories\SubscriptionsFactory;

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // subscriptions
    Route::get('/admin/dashboard/subscriptions/manage', [SubscriptionsController::class, 'manageSubs'])->name('manage.subs');
    Route::get('/admin/dashboard/subscriptions/create', [SubscriptionsController::class, 'create'])->name('sub.create');
    Route::post('/admin/dashboard/subscriptions/', [SubscriptionsController::class, 'store'])->name('sub.store');
    Route::get('/admin/dashboard/subscriptions/{sub}/edit', [SubscriptionsController::class, 'edit'])->name('sub.edit');
    Route::put('/admin/dashboard/subscriptions/{sub}', [SubscriptionsController::class, 'update'])->name('sub.update');
    Route::delete('/admin/dashboard/subscriptions/{sub}/delete', [SubscriptionsController::class, 'delete'])->name('sub.delete');
    
    // Users
    Route::get('/admin/dashboard/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/dashboard/subscribedUsers', [UserController::class, 'sub_users'])->name('sub.users');
    Route::get('/admin/dashboard/users/{user}', [UserController::class, 'show'])->name('users.show');
});

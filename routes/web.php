<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeeksController;
use App\Http\Controllers\SubscriptionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit/form/{id}', function ($id) {
        return view('user.profile.form' . $id);
    });
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.delete');

    Route::get('/subscriptions', [SubscriptionsController::class, 'index'])->name('subs');

    Route::resource('seeks', SeeksController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    Route::get('/referrals', function () {
        return view('user.referrals.index');
    })->name('referrals');

    Route::get('/matches', function () {
        return view('user.match.index');
    })->name('matches');

    Route::get('/about', function () {
        return view('user.about');
    })->name('about');
});

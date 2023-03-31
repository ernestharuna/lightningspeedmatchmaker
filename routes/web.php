<?php

use App\Http\Controllers\MatchesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralsController;
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
    // Redirection
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    // Profile & forms
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit/form/{id}', function ($id) {
        return view('user.profile.form' . $id);
    });
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.delete');

    // Subscriptions
    Route::get('/subscriptions', [SubscriptionsController::class, 'index'])->name('subs');

    // Seeks Resourse controller
    Route::resource('seeks', SeeksController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    //---------------- Other Dashboard links---------------------//
    // Referrals
    Route::get('/referrals', [ReferralsController::class, 'create'])->name('referrals');
    Route::post('/referrals/save', [ReferralsController::class, 'store'])->name('submit.ref');

    // matches
    Route::post('/match/save', [MatchesController::class, 'store'])->name('match.store');
    Route::get('/match/profile/{profile}', [MatchesController::class, 'showUser'])->name('match.profile');
    Route::get('/match/{match}/show', [MatchesController::class, 'show'])->name('match.show');
    Route::patch('/match/{match}', [MatchesController::class, 'update'])->name('match.update');
    Route::post('/match/{user}', [MatchesController::class, 'match'])->name('match');
    Route::get('/match', [MatchesController::class, 'index'])->name('match.index');
});


// Use this later shaa
// Route::get('/{searchProfile}/match/searchProfile/', [MatchesController::class, 'searchProfile'])->name('d.searchProfile');
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeeksController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use App\Models\Seeks;
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

// Display User dashboard
Route::redirect('/', '/dashboard');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/profile/form/{id}', function ($id) {
        return view('user.profile.form' . $id);
    });

    Route::delete('/profile/{user}', [ProfileController::class, 'delete'])->name('profile.delete');

    Route::resource('seeks', SeeksController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
});


require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');


// Register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('register');
// Register User
Route::post('/user', [UserController::class, 'store']);


// Login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
// Login User
Route::post('/user/authenticate', [UserController::class, 'authenticate']);
// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');


// Questionaire form
Route::get('/questioniare', [UserController::class, 'questionForm'])->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });
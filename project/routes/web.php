<?php

use App\Http\Controllers\CoreController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoreController::class, 'index'])->name('home');

// Accounts Routes
Route::get('/accounts/auth/login', 'login')->name('login');
Route::get('/accounts/auth/signup', 'signup')->name('signup');
Route::get('/accounts/profile/dashboard', 'dashboard')->name('dashboard');

//Route::post('accounts/auth/login-validate', [LoginController::class, 'login'])->name('login-validate');
//Route::post('/accounts/auth/signup-validate', [LoginController::class, 'signup'])->name('signup-validate');
//Route::get('/accounts/auth/logout', [LoginController::class, 'logout'])->name('logout');
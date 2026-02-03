<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showlogin']);
Route::get('/login', [AuthController::class, 'showlogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showregister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
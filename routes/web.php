<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\Authenficate;

Route::get('/', [AuthController::class, 'showlogin']);
Route::get('/login', [AuthController::class, 'showlogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showregister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware([Authenficate::class])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
    
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
    route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');


    Route::get('/links', [LinkController::class,'index'])->name('links.index');
    Route::get('/links/create', [LinkController::class,'create'])->name('links.create');
    Route::post('/links', [LinkController::class,'store'])->name('links.store');
    Route::get('/links/{id}/edit', [LinkController::class,'edit'])->name('links.edit');
    Route::put('/links/{id}', [LinkController::class,'update'])->name('links.update');
    Route::delete('/links/{id}', [LinkController::class,'delete'])->name('links.destroy');

    Route::get('/tags', [TagController::class,'index'])->name('tags.addtag');
    Route::post('/tags', [TagController::class,'store'])->name('tags.store');
    Route::delete('/tags/{id}', [TagController::class,'destroy'])->name('tags.destroy');

});

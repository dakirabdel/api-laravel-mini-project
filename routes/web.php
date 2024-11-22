<?php

use App\Http\Controllers\addProductController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'show'])->name('login.show');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'registerShow'])->name('register.show');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name("logout");

Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', [homeController::class, 'index'])->name('home');
    Route::get('/addProduct', [homeController::class, 'create']);
    Route::post('/addProduct/store', [homeController::class, 'store']);
    Route::get('/product/{id}',[homeController::class, 'show'])->where("id", '\d+')->name('product.show');
    Route::delete('/product/{product}', [homeController::class, 'destroy'])->name('product.delete');
    Route::PUT('/product/{product}', [homeController::class, 'update'])->name('product.update');
});
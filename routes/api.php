<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource("products",HomeController::class);
Route::apiResource("users", UsersController::class);

// Route::post('/api/login', [AuthController::class, 'login'])->name('login');



Route::group(['namespace'=>'App\Http\Controllers\API'],function(){
    Route::post('login','AuthController@login');
    Route::post('register','AuthController@register');
});
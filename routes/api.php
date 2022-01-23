<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::get('/foods', [FoodController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/editProfile/{id}', [AuthController::class, 'updateProfile']);
    Route::post('/profileImage', [AuthController::class, 'uploadProfileImage']);
});

Route::get('{path}', [App\Http\Controllers\HomeController::class, 'index'])->where('path', '([A-z\d=\/_.]+)?');

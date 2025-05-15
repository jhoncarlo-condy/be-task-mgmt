<?php

use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::prefix('user')->group(function(){
        Route::get('/profile', [UserController::class, 'profile']);
        Route::put('/{email}', [UserController::class, 'update']);
        Route::post('/change-password', [UserController::class, 'changePassword']);
    });

    Route::middleware('is_admin')->prefix('user')->group(function () {
        Route::get('/all', [UserController::class, 'index']);
        Route::get('/{email}', [UserController::class, 'show']);
    });

     Route::apiResource('/tasks', TaskController::class);
});

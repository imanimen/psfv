<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\V1\AuthController;
use App\Http\Middleware\JwtAuthMiddleware;


Route::group(['prefix' => 'v1/auth', 'middleware' => JwtAuthMiddleware::class], function () {
    Route::post('login', [AuthController::class, 'login'])->withoutMiddleware(JwtAuthMiddleware::class);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

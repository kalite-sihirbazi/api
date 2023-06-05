<?php

use App\Http\Controllers\api\v1\Auth\CurrentUserController;
use App\Http\Controllers\api\v1\Auth\LoginController;
use App\Http\Controllers\api\v1\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

/* Public Routes */
/* Login */

Route::post('login', LoginController::class)->name('auth.login');

/* Guarded Routes */
Route::middleware('auth:sanctum')->group(function () {

    /* User */
    Route::post('user', CurrentUserController::class)->name('auth.user');


    /* Logout */
    Route::post('logout', LogoutController::class)->name('auth.logout');
});

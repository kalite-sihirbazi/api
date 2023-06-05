<?php

use Illuminate\Support\Facades\Route;

/* Auth */
Route::prefix('auth')->group(app_path('Routes/modules/auth.php'));

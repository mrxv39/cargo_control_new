<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    // Si quieres, luego lo cambiamos a tu home real (viajes, dashboard, etc.)
    return redirect()->route('login');
});

// Breeze auth routes (login, register, password reset, logout, etc.)
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('landingPage');
});

//------------------------------ Auth ------------------------------------
//Regiter
Route::prefix('register')->group(function () {
    Route::get('/ketua', [RegisterController::class, 'indexKetua']);
    Route::get('/anggota', [RegisterController::class, 'indexAnggota']);
    Route::post('/ketua', [RegisterController::class, 'storeKetua']);
    Route::post('/anggota', [RegisterController::class, 'storeAnggota']);
})->middleware('guest');
//Login
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);

//logout
Route::post('/logout', [AuthController::class, 'logout']);

//----------------------------- Dashboard --------------------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketSoalController;
use App\Http\Controllers\UserController;

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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//----------------------------- Dashboard --------------------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//---------------------------------- User ------------------------------------------
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/add-user', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

//-------------------------------- Bank Soal ---------------------------------------
Route::get('/pakets', [PaketSoalController::class, 'index']);
Route::prefix('pakets')->group(function () {
    Route::get('/soal/{id}/{currentSoal}', [PaketSoalController::class, 'soal']);
    Route::post('/soal/{id}/save', [PaketSoalController::class, 'save']);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketSoalController;

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

//-------------------------------- Bank Soal ---------------------------------------
Route::get('/pakets', [PaketSoalController::class, 'index']);
Route::get('/pakets/create', [PaketSoalController::class, 'create']);
Route::prefix('pakets')->group(function () {
    Route::get('/{id}', [PaketSoalController::class, 'edit']);
    Route::post('/{id}/update', [PaketSoalController::class, 'update']);
    Route::post('/create/save', [PaketSoalController::class, 'store']);
    Route::get('/soal/{id}/{currentSoal}', [PaketSoalController::class, 'soal']);
    Route::post('/soal/{id}/save', [PaketSoalController::class, 'saveSoal']);
    Route::delete('/{id}', [PaketSoalController::class, 'destroy']);
});

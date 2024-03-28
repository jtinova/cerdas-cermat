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
Route::get('user/{id}/edit-password', [UserController::class, 'editPassword'])->name('user.editPassword');
Route::put('user/{id}/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');

//-------------------------------- Bank Soal ---------------------------------------
Route::get('/pakets', [PaketSoalController::class, 'index']);
Route::get('/pakets/create', [PaketSoalController::class, 'create']);
Route::prefix('pakets')->group(function () {
    //--------------------------paket-------------------------
    Route::get('/edit/{id}', [PaketSoalController::class, 'edit']);
    Route::post('/update/{id}', [PaketSoalController::class, 'update']);
    Route::post('/create/save', [PaketSoalController::class, 'store']);
    Route::delete('/{id}', [PaketSoalController::class, 'destroy']);
    //-------------------------soal------------------------------
    Route::get('/{id}', [PaketSoalController::class, 'soal']);
    Route::get('/soal/{id}/', [PaketSoalController::class, 'showSoal']);
    Route::post('/soal/update/{id}', [PaketSoalController::class, 'updateSoal']);
    Route::delete('/soal/{id}/', [PaketSoalController::class, 'destroySoal']);
});

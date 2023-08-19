<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * 1.Porses routing
 *
 */

// endpoint / route


// Halaaman daftar
Route::get('/', [HomeController::class, 'index']);
// Post Daftar
Route::post('/daftar', [DaftarController::class, 'daftar'])->name('daftar');
// Hasil
Route::get('/hasil', [HomeController::class, 'hasil'])->name('hasil');

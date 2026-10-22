<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;

Route::view('/', 'beranda');
Route::view('/about', 'about');
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'store']);
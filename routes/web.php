<?php

use App\Http\Controllers\tentang_kamiController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\programController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::resource('items', ItemController::class);
Route::get('/home', [homeController::class, 'home']);
Route::get('/program', [programController::class, 'program']);
Route::get('/berita', [beritaController::class, 'berita']);
Route::get('/laporan', [laporanController::class, 'laporan']);
Route::get('/tentang_kami', [tentang_kamiController::class, 'tentang_kami']);

Route::get('/', function () {
    return view('welcome');
});

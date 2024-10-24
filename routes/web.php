<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [homeController::class, 'home']);

Route::get('/', function () {
    return view('welcome');
});

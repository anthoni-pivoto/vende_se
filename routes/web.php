<?php

use App\Http\Controllers\AnuncioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('anuncio', AnuncioController::class);

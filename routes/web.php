<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BestController;
use App\Http\Controllers\AnuncioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('anuncio', AnuncioController::class);

Route::get('teste',[BestController::class, 'hello']);
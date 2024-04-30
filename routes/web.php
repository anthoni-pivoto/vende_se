<?php

use Illuminate\Pagination\Paginator;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnuncioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Anuncio;


Route::get('/', function () {
    $anuncios = Anuncio::paginate(2);
    if(Auth::check()){
        return view('home', compact('anuncios'));
    }
        return view('home_unset', compact('anuncios'));
});


// Route::get('form', function(){
//     return view('anuncio_form');
// });

Route::get('/editar/{id}', [AnuncioController::class, 'editar']);
Route::post('/atualizar/{id}', [AnuncioController::class, 'atualizar']);
Route::get('/apagar/{id}', [AnuncioController::class, 'apagar']);



Route::resource('anuncio', AnuncioController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

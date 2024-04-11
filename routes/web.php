<?php

<<<<<<< HEAD
use App\Http\Controllers\AnuncioController;
use Illuminate\Support\Facades\Route;

=======
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

>>>>>>> 225a56dfdc26eab88f556ab296ab68833ca2f258
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('anuncio', AnuncioController::class);
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> 225a56dfdc26eab88f556ab296ab68833ca2f258

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// middleware es para autenticar la entrada a las vistas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/doctores', function() {
    return view('doctores');
})->middleware(['auth', 'verified'])->name('doctores');

Route::get('/alta-doctores', function() {
    return view('alta-doctores');
})->middleware(['auth', 'verified'])->name('alta-doctores');

Route::get('/usuarios', function() {   
    return view('usuarios');
})->middleware(['auth', 'verified'])->name('usuarios');

Route::get('/alta-usuarios', function() {
    return view('alta-usuarios');
})->middleware(['auth', 'verified'])->name('alta-usuarios');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

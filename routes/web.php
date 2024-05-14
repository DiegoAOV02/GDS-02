<?php

use Illuminate\Support\Facades\Route;

//* Primera opción para invocar una vista.
Route::get('/', function () {
    return view('welcome');
});

//* Opción generar rutas a vistas 
Route::view('/alumnos', 'alumnos');

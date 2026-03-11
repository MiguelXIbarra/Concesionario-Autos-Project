<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación por defecto de Laravel
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Rutas del Proyecto Concesionario (Punto 3.g)
|--------------------------------------------------------------------------
*/

// Rutas para UserController (API Rest)
Route::post('/api/registro', 'App\Http\Controllers\UserController@register');
Route::post('/api/acceso', 'App\Http\Controllers\UserController@login');

// Rutas para CarController (Resource)
Route::resource('/api/carros', 'App\Http\Controllers\CarController');
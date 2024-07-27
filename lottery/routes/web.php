<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DrawController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;

// Ruta principal que muestra la vista de inicio
Route::get('/', [HomeController::class, 'index']);

// Rutas para gestionar usuarios
Route::resource('users', UserController::class);

// Rutas para gestionar sorteos
Route::resource('draws', DrawController::class);

// Rutas para gestionar cartones
Route::resource('tickets', TicketController::class);

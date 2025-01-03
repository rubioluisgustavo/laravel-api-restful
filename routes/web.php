<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/cars', [CarController::class, 'index']); // Rota web para listar os carros

Route::get('/', function () {
    return view('welcome');
});

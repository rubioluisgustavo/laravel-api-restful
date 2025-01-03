<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DogController;
use App\Http\Controllers\api\CarController;

Route::apiResource('/dogs', DogController::class);
Route::apiResource('/cars', CarController::class);
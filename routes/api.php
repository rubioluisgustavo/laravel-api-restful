<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DogController;

Route::apiResource('/dogs', DogController::class);
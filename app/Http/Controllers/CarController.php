<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all(); // Pega todos os carros
        return view('cars.index', compact('cars')); // Retorna a view com os dados
    }
}
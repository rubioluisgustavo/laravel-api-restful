<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function store(Request $request)
    {
        Car::create($request->all());
    }

    public function show(string $id)
    {
        return Car::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
    }

    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
    }
}

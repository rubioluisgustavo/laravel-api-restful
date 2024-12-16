<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dog;

class DogController extends Controller
{
    public function index()
    {
        return Dog::all();
    }

    public function store(Request $request)
    {
        Dog::create($request->all());
    }

    public function show(string $id)
    {
        return Dog::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->all());
    }

    public function destroy(string $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
    }
}

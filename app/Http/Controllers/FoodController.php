<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Food $food)
    {
        $foods = $food->all(); 

        return view('/crud/comida/index', compact('foods'));
    }

    public function create(Food $food)
    {
    return view('/crud/comida/create');
    }

    public function store(Request $request, Food $food)
    {
        $data = $request->all();

        $food->create($data);
        return redirect()->route('admin.comida'); 
    }
}

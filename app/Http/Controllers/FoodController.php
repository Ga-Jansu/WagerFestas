<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(food $food)
    {
        $foods = $food->all(); 
        dd($foods); 

        return view('/crud/comida/index', compact('foods'));
    }
}

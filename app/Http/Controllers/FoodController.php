<?php

namespace App\Http\Controllers;

use App\Models\food;
use FFI;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Food $food)
    {
        $foods = $food->all(); 

        return view('/crud/comida/index', compact('foods'));
    }

    public function show(string|int $id)
    {
        if(!$food = Food::find($id)){
            return back();
        }
        return view('/crud/comida/show', compact('food'));
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
    public function edit(Food $food, string|int $id)
    {

        if (!$food = $food::where('id', $id)->first()){
            return back();
        }
        return view('crud/comida/edit' , compact('food'));
    }
    public function update(Request $request,Food $food, string|int $id)
    {
        if(!$food = $food::find($id)){
            return back();
        }   
        $food->update($request->only([
            'name','body','drink','money'
        ]));
        return redirect()->route('admin.comida');
    }
    public function destroy(string|int $id)
    {
        if(!$food = Food::find($id)){
            return back();
        }
        $food->delete();
        return redirect()->route('admin.comida');
    }
}
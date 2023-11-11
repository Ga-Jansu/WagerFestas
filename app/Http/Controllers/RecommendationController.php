<?php

namespace App\Http\Controllers;

use App\Models\recommendation;
use FFI;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index(Recommendation $recommendation)
    {
        $recommendations = $recommendation->all(); 

        return view('/crud/recomendacao/index', compact('recommendations'));
    }

    public function show(string|int $id)
    {
        if(!$recommendation = Recommendation::find($id)){
            return back();
        }
        return view('/crud/recomendacao/show', compact('recommendation'));
    }

    public function create(Recommendation $recommendation)
    {
    return view('/crud/recomendacao/create');
    }

    public function store(Request $request,Recommendation $recommendation)
    {
        $data = $request->all();

        $recommendation->create($data);
        return redirect()->route('admin.recomendacao'); 
    }
    public function edit(Recommendation $recommendation, string|int $id)
    {

        if (!$recommendation = $recommendation::where('id', $id)->first()){
            return back();
        }
        return view('crud/recomendacao/edit' , compact('recommendation'));
    }
    public function update(Request $request,Recommendation $recommendation, string|int $id)
    {
        if(!$recommendation = $recommendation::find($id)){
            return back();
        }   
        $recommendation->update($request->only([
            'body'
        ]));
        return redirect()->route('admin.recomendacao');
    }
    public function destroy(string|int $id)
    {
        if(!$recommendation= Recommendation::find($id)){
            return back();
        }
        $recommendation->delete();
        return redirect()->route('admin.recomendacao');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\recommendation;
use Illuminate\Http\Request;

class ExirecomController extends Controller
{
    public function index(recommendation $recommendation)
    {
        $recommendations = $recommendation->all(); 

        return view('/exirecom', compact('recommendations'));
    }
}

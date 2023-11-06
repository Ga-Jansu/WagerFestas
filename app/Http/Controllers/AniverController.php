<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AniverController extends Controller
{
    public function index()
    {
        return view('login/aniver_menu');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComerController extends Controller
{
    public function index()
    {
        return view('login/comer_menu');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(Request $request){
        return view("agendar");
    }
}

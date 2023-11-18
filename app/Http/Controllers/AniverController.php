<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AniverController extends Controller
{
    public function index()
    {
        return view('login/aniver_menu');
    }

    public function create(Booking  $booking)
    {      
        $dados = Booking::with('open_schedules')->get();        
        return view('/AreaLogadaAniver/agendar');
    }

    public function store(Request $request , Booking $booking)
    {
        $data = $request->all();

        $booking->create($data);
        return redirect()->route('aniver.index'); 
    }
}
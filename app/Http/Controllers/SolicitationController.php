<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\food;

class SolicitationController extends Controller
{
    public function index(Booking $bookings)
    {
        $booking = $bookings->where('status','analise')->get();
        return view('crud/solicitacao/index',compact('booking'));
    }

    public function show(string|int $id)
    {
        if(!$bookings = Booking::find($id)){
            return back();
        }

        return view('/crud/solicitacao/show', compact('bookings'));
    }

    
    public function approve(string|int $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'aprovado']);  // Corrigido para 'aprovado'
        return redirect()->route('solicitacao.index');
    }

    public function destroy(string|int $id)
    {
        if(!$booking = Booking::find($id)){
            return back();
        }
        $booking->delete();
        return redirect()->route('solicitacao.index');
    }
}

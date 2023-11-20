<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Redirect;

class Areacontroller extends Controller
{
    public function index($id)
    {
        $bookings = Booking::find($id);
        $foodName = $bookings->food->name;
        $foodBody = $bookings->food->body;
        $foodDrink = $bookings->food->drink;
        $foodMoney = $bookings->food->money;
        return view('AreaLogadaAniver/areafesta',compact('bookings','foodName','foodBody','foodDrink','foodMoney'));
    }
    public function convidado($id){

        return Redirect::route('convidados.index', compact('id'));
    }
    public function create($id){
        return Redirect::route('convidados.create', compact('id'));
    }
    public function show($id){
        return Redirect::route('convidados.show', compact('id'));
    }
    public function destroy($id){
        $booking = Booking::find($id);

        $booking->delete();
        return redirect()->route('aniver.index');
    }
}

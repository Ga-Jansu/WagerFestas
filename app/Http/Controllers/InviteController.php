<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\invite;
use Illuminate\Http\Request;

class InviteController extends Controller
{

    public function index(Booking $booking)
    {
        $invites = $booking->invites; 

        return view('/convidados.index', compact('invites'));
    }

    public function create()
    {
    return view('/convidados.create');
    }

    public function store(Request $request, Booking $booking)
    {
        $data = $request->all();

        $invite = new Invite($data);
        $booking->invites()->save($invite);
        return view('/convidados.confirma');
    }
    public function show(string|int $id)
    {
        $invite = Invite::findOrFail($id);

        return view('/convidados.show', compact('invite'));
    }

    public function destroy(string|int $id)
    {
        $invite = Invite::findOrFail($id);

        $invite->delete();
        return redirect()->route('convidados.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\invite;
use Illuminate\Http\Request;

class InviteController extends Controller
{

    public function index(Invite $invite)
    {
        $invites = $invite->all(); 

        return view('/convidados/index', compact('invites'));
    }

    public function create(Invite $invite)
    {
    return view('/convidados/create');
    }

    public function store(Request $request, Invite $invite)
    {
        $data = $request->all();

        $invite->create($data);
        return view('/convidados/confirma');
}
    public function show(string|int $id)
    {
        if(!$invite = Invite::find($id)){
        return back();
    }
    return view('/convidados/show', compact('invite'));
    }

    public function destroy(string|int $id)
    {
        if(!$invite = Invite::find($id)){
            return back();
        }
        $invite->delete();
        return redirect()->route('convidados.index');
    }
}
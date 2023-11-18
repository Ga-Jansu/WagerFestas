<?php

namespace App\Http\Controllers;

use App\Enums\OpenSchedulesStatus;
use App\Models\Booking;
use App\Models\open_schedule;
use Illuminate\Http\Request;

class OpenScheduleController extends Controller
{
    public function index(open_schedule $open_schedule)
    {
        $open_schedules = $open_schedule->all(); 

        return view('/crud/agendamento/index', compact('open_schedules'));
    }

    public function show(string|int $id)
    {
        if(!$open_schedule = Open_schedule::find($id)){
            return back();
        }
        return view('/crud/agendamento/show', compact('open_schedule'));
    }

    public function create(Open_schedule $open_schedule)
    {
    return view('/crud/agendamento/create');
    }

    public function store(Request $request,Open_schedule $open_schedule)
    {
        $data = $request->all();

        $open_schedule->create($data);
        return redirect()->route('tempo.index'); 
    }
    public function edit(Open_schedule $open_schedule, string|int $id)
    {

        if (!$open_schedule = $open_schedule::where('id', $id)->first()){
            return back();
        }
        return view('crud/agendamento/edit' , compact('open_schedule'));
    }
    public function update(Request $request,Open_schedule $open_schedule, string|int $id)
    {
        if(!$open_schedule = $open_schedule::find($id)){
            return back();
        }   
        $open_schedule->update($request->only([
            'time','hours'
        ]));
        return redirect()->route('tempo.index');
    }
    public function destroy(string|int $id)
    {
        if(!$open_schedule = Open_schedule::find($id)){
            return back();
        }
        $open_schedule->delete();
        return redirect()->route('tempo.index');
    }
}

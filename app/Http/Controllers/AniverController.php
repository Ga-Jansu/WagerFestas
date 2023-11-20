<?php

namespace App\Http\Controllers;

use App\Models\Open_schedule;
use App\Models\food;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AniverController extends Controller
{
    public function index()
    {   
        $booking = Booking::all();
        return view('login/aniver_menu',compact('booking'));
    }

    public function create(Booking  $booking)
    {      
        $openSchedules = Open_Schedule::where('status', 'livre')->get();
        $foods =  food::all();   
    
        return view('/AreaLogadaAniver/agendar',compact('openSchedules','foods'));
    }

    public function store(Request $request , Open_Schedule $openSchedule, Booking $booking)
    {
        $userId = Auth::id();

        $selectedScheduleId = $request->input('open_schedule_id');
        $selectedSchedule = Open_schedule::find($selectedScheduleId);
        $date = $selectedSchedule->data;

        $selectedFoodId = $request->input('food_id');
        $food = food::find($selectedFoodId);
        
        $dado = $request->only(['name_birthdayperson','years_birthdayperson','qnt_invited']);
        $dado['user_id'] = $userId;
        $dado['date'] = $date;
        $openSchedule->where('data',$date)->update(['status'=>'ocupado']);
        
        $booking->openSchedule()->associate($selectedSchedule);
        $booking->food()->associate($food);
       
        
        
        $booking->fill($dado);
        $booking->save();

        return redirect()->route('aniver.index'); 
    }


}


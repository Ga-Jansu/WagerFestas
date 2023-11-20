<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Open_schedule;
use App\Models\food;
use App\Models\invite;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_birthdayperson',
        'years_birthdayperson',
        'qnt_invited',
        'date',
        'status',
        'open_shedule_id',
        'food_id',
        'user_id'
    ];

    public function openSchedule()
    {
        return $this->belongsTo(Open_schedule::class,'open_schedule_id');
    }

    public function food()
    {
        return $this->belongsTo(food::class,'food_id');
    }

    public function invites()
    {
        return $this->hasMany(Invite::class);
    }

}



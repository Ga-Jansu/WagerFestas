<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_birthdayperson',
        'years_birthdayperson',
        'qnt_invited',
        'party_date',
        'price',
        'status'
    ];

    public function open_schedules()
    {
        return $this->belongsTo(open_schedules::class, 'open_schedule_id');
    }
}

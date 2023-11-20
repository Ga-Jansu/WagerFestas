<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Open_schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'hours',
        'status'
    ];
    
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}

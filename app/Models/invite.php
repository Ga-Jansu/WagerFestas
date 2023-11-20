<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class invite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document',
        'age'
    ];
    
}

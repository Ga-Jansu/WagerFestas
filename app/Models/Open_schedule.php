<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Open_schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'hours'
    ];
}

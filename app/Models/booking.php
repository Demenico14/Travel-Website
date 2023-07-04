<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'Destination',
        'Check_In',
        'Check_Out',
        'Rooms',
        'Adults',
        'Children',
        'Payment Method'
    ];
}

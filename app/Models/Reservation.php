<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $able = 'reservations';

    protected $fillable = [
        'name',
        'phone_no',
        'date',
        'email',
        'message',
        'branch',
        'event',
    
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Shift extends Model
{
    use Notifiable;

    protected $fillable = [
        'start_time', 
        'end_time'
    ];

    protected $attributes = [
        'approved' => false,
        'time_spent' => 0
    ];

    /*protected $casts = [
        'start_time' => 'Y-m-d H:i:s',
        'end_time' => 'Y-m-d\TH:i'
    ];*/
}

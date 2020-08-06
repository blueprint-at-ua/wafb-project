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

    public function users() {
        return $this->hasMany(Shift::class);
    }

}

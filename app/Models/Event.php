<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
    public function futureworkshops()
    {
        return $this->hasMany(Workshop::class)->whereDate('start','>',date('Y-m-d'));
    }
}

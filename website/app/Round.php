<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tournament;
use App\Schedule;

class Round extends Model
{
    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}

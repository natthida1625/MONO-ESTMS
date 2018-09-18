<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;
use App\Tournament;
use App\Schedule;

class Team extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player');
    }

    public function tournaments()
    {
        return $this->belongsToMany('App\Tournament');
    }

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;
use App\Tournament;
use App\Schedule;

class Team extends Model
{
    protected $fillable = ['name', 'description', 'file'];

    public function players()
    {
        return $this->hasMany('App\Player');
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

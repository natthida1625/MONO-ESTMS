<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\Schedule;
use App\Round;

class Tournament extends Model
{
    protected $fillable = ['title', 'description', 'file'];

    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }

    public function rounds()
    {
        return $this->hasMany('App\Round');
    }
}

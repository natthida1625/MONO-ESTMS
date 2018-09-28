<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\Tournament;
use App\Round;

class Schedule extends Model
{
    protected $fillable = ['tournament_id', 'round_id', 'date', 'time'];

    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }

    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

    public function round()
    {
        return $this->belongsTo('App\Round');
    }
}

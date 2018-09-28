<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Player extends Model
{
    protected $fillable = ['team_id', 'firstname', 'lastname', 'birthday', 'charactername', 'description', 'file'];
 
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}

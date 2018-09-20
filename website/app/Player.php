<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Player extends Model
{
    protected $fillable = ['firstname', 'lastname', 'birthday', 'charactername', 'description', 'file'];
 
    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }
}

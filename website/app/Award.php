<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Award;

class Award extends Model
{
    protected $fillable = ['title', 'description'];
}

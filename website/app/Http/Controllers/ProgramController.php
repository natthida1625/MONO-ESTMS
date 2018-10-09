<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;

class ProgramController extends Controller
{
    public function index() {
        $tournament = Tournament::find(1);
        return view('program',compact('tournament'));  
     }
}

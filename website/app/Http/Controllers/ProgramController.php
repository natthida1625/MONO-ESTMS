<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;

class ProgramController extends Controller
{
    public function program() {
        $tournament = Tournament::find(1);
        //dd($tournament->rounds);        
        return view('program',compact('tournament'));  
    }

    public function program1() {
        $tournament = Tournament::find(2);
        //dd($tournament->rounds);        
        return view('program_1',compact('tournament'));  
    } 
}

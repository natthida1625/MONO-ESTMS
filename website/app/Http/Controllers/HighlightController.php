<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Player;

class HighlightController extends Controller
{
    public function index() {
        $tournament = Tournament::find(2);
        //dd($tournament->rounds);        
        return view('highlight',compact('tournament'));  
    }

    public function news5() {
        return view('news.news_5');
    }
}

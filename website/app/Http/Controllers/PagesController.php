<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function news() {
        return view('news.news');
    }

    public function news1() {
        return view('news.news_1');
    }

    public function news2() {
        return view('news.news_2');
    }

    public function news3() {
        return view('news.news_3');
    }

    public function news4() {
        return view('news.news_4');
    }
}

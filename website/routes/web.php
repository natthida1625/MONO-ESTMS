<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HighlightController@index');

Route::get('/welcome', 'PagesController@index');

Route::get('/highlight', 'HighlightController@index');

Route::get('/program', 'ProgramController@program');

Route::get('/program_1', 'ProgramController@program1');

Route::get('/news', 'PagesController@news');

Route::get('/news_1', 'PagesController@news1');

Route::get('/news_2', 'PagesController@news2');

Route::get('/news_3', 'PagesController@news3');

Route::get('/news_4', 'PagesController@news4');

Route::get('/news_5', 'HighlightController@news5');

Route::get('/search', 'PlayerController@search');

Route::resource('player/index', 'PlayerController');

Route::resource('team/index', 'TeamController');

Route::resource('tournament/index', 'TournamentController');

Route::resource('round/index', 'RoundController');

Route::resource('schedule/index', 'ScheduleController');

Route::resource('award/index', 'AwardController');
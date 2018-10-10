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

Route::get('/', 'PagesController@index');

Route::get('/welcome', 'PagesController@index');

Route::get('/program', 'ProgramController@index');

Route::get('/news', 'PagesController@news');

Route::get('/search', 'PlayerController@search');

Route::resource('player/index', 'PlayerController');

Route::resource('team/index', 'TeamController');

Route::resource('tournament/index', 'TournamentController');

Route::resource('round/index', 'RoundController');

Route::resource('schedule/index', 'ScheduleController');

Route::resource('award/index', 'AwardController');
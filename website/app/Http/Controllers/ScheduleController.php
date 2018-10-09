<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Schedule;
use App\Tournament;
use App\Round;
use App\Team;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = \App\Schedule::all();
        return view('schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        $tournaments = Tournament::all();
        $rounds = Round::all();
        return view('schedule.create', compact('teams', 'tournaments' ,'rounds'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [            
            'date' => 'required',
            'time' => 'required',            
            'round_id' => 'required',
            'tournament_id' => 'required'
        ],[
             // 'required' => 'กรุณากรอก :attribute',
            // 'numeric' => 'กรุณากรอก :attribute เป็นตัวเลข',

        ]);
        
        // dd($request->all());
        $team_ids = $request->input('team_id'); 
        $score = $request->input('score');

      
        $schedule =  new Schedule;
        $schedule->date = $request->input('date');       
        $schedule->time = $request->input('time');  
        $schedule->round_id = $request->input('round_id');       
        $schedule->tournament_id = $request->input('tournament_id');
        $schedule->save();
    
        // $upload_req = $request->file('file');
        // $extension = $upload_req->extension();
        // $basefilename = 'files/'.str_random(32);
        // $filename = $basefilename.'.'.$extension;
        // $request->file('file')->storeAs('public', $filename);    
        // $schedule->file = $filename;        
        // $schedule->save();
        // dd($player->team->name);
        $teams = [];
        foreach($team_ids as $key => $team_id)  {
            $teams[$team_id]['score'] = $score[$key];
            $teams[$team_id]['status'] = empty($status[$key]) ? null : $status[$key];
        }
        // dd($teams);
        $schedule->teams()->sync($teams);
        return redirect('schedule/index')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = \App\Schedule::find($id);
        $schedule_team = $schedule->teams->pluck('id')->toArray();      


        $teams = Team::all();
        $tournaments = Tournament::all();
        $rounds = Round::all();
       
        // dd($schedule); 

        return view('schedule.edit',compact('schedule', 'id', 'tournaments', 'rounds', 'teams', 'schedule_team'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        // dd($request->all());
        $team_ids = $request->input('team_id');  
        $score = $request->input('score');
        $status = $request->input('status'); 
        $schedule = Schedule::find($id);
        // $old_file = $schedule->file;
        $schedule->update($data);
        // $upload_req = $request->file('file');
        // $extension = $upload_req->extension();
        // $basefilename = 'files/'.str_random(32);
        // $filename = $basefilename.'.'.$extension;
        // $request->file('file')->storeAs('public', $filename);
        // Storage::disk('public')->delete($old_file); 
        // $schedule->file = $filename; 
        $schedule->save();

        $teams = [];
        foreach($team_ids as $key => $team_id)  {
            $teams[$team_id]['score'] = $score[$key];
            $teams[$team_id]['status'] = $status[$key];
        }
        $schedule->teams()->detach();
        $schedule->teams()->sync($teams);
        return redirect('schedule/index');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedules = \App\Schedule::find($id);
        $schedules->teams()->detach();
        $schedules->delete();
        return redirect('schedule/index')->with('success','Information has been  deleted');
    }
}

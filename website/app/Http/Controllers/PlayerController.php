<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Player;
use App\Team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = \App\Player::all();
        return view('player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('player.create', compact('teams'));    
    }    
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $players = Player::where('firstname', 'like', '%' .$search. '%')
             ->orwhere('charactername', 'like', '%' .$search. '%')->paginate(5);
        return view('player/index',compact('search','players'));
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
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'charactername' => 'required',
            'description' => 'required',
            'team_id' => 'required',
            'file' => 'required'
        ],[
             // 'required' => 'กรุณากรอก :attribute',
            // 'numeric' => 'กรุณากรอก :attribute เป็นตัวเลข',

        ]);
        // dd($request->all());
        $player =  new Player;
        $player->firstname = $request->input('firstname');
        $player->lastname = $request->input('lastname');
        $player->birthday = $request->input('birthday');
        $player->charactername = $request->input('charactername');
        $player->description = $request->input('description');    
        $player->team_id = $request->input('team_id');         
        $player->save();
    
        $upload_req = $request->file('file');
        $extension = $upload_req->extension();
        $basefilename = 'files/'.str_random(32);
        $filename = $basefilename.'.'.$extension;
        $request->file('file')->storeAs('public', $filename);    
        $player->file = $filename;        
        $player->save();
        // dd($player->team->name);

        return redirect('player/index')->with('success', 'Information has been added');

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
        $player = \App\Player::find($id);

        $teams = Team::all();
        return view('player.edit',compact('player', 'id', 'teams'));
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
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);

        $player = Player::find($id);
        $old_file = $player->file;
        $player->update($data);
        $upload_req = $request->file('file');
        $extension = $upload_req->extension();
        $basefilename = 'files/'.str_random(32);
        $filename = $basefilename.'.'.$extension;
        $request->file('file')->storeAs('public', $filename);
        Storage::disk('public')->delete($old_file); 
        $player->file = $filename; 
        $player->save();
        
        return redirect('player/index'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $players = \App\Player::find($id);
        $players->delete();
        return redirect('player/index')->with('success','Information has been  deleted');
    }
}

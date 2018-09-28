<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Round;
use App\Tournament;


class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rounds = \App\Round::all();
        return view('round.index', compact('rounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournaments = Tournament::all();
        return view('round.create', compact('tournaments'));
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
            'title' => 'required',
            'round_number' => 'required',
            'tournament_id' => 'required'
        ],[
             // 'required' => 'กรุณากรอก :attribute',
            // 'numeric' => 'กรุณากรอก :attribute เป็นตัวเลข',

        ]);

        $round =  new Round;
        $round->title = $request->input('title');
        $round->round_number = $request->input('round_number');          
        $round->tournament_id = $request->input('tournament_id');         
        $round->save();
    
        // $upload_req = $request->file('file');
        // $extension = $upload_req->extension();
        // $basefilename = 'files/'.str_random(32);
        // $filename = $basefilename.'.'.$extension;
        // $request->file('file')->storeAs('public', $filename);    
        // $round->file = $filename;        
        // $round->save();
        // dd($round->team->name);

        return redirect('round/index')->with('success', 'Information has been added');    }

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
        $round = \App\Round::find($id);

        $tournaments = Tournament::all();
        return view('round.edit',compact('round', 'id', 'tournaments'));
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

        $round = Round::find($id);
        // $old_file = $round->file;
        $round->update($data);
        // $upload_req = $request->file('file');
        // $extension = $upload_req->extension();
        // $basefilename = 'files/'.str_random(32);
        // $filename = $basefilename.'.'.$extension;
        // $request->file('file')->storeAs('public', $filename);
        // Storage::disk('public')->delete($old_file); 
        // $round->file = $filename; 
        
        $round->save();        
        return redirect('round/index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rounds = \App\Round::find($id);
        $rounds->delete();
        return redirect('round/index')->with('success','Information has been  deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Tournament;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = \App\Tournament::all();
        return view('tournament.index', compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournament.create');
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
            'description' => 'required',
            'file' => 'required'
        ],[
             // 'required' => 'กรุณากรอก :attribute',
            // 'numeric' => 'กรุณากรอก :attribute เป็นตัวเลข',

        ]);

        $tournament =  new Tournament;
        $tournament->title = $request->input('title');       
        $tournament->description = $request->input('description');
        $tournament->save();
    
        $upload_req = $request->file('file');
        $extension = $upload_req->extension();
        $basefilename = 'files/'.str_random(32);
        $filename = $basefilename.'.'.$extension;
        $request->file('file')->storeAs('public', $filename);    
        $tournament->file = $filename;
        $tournament->save();

        return redirect('tournament/index')->with('success', 'Information has been added');  
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
        $tournament = \App\Tournament::find($id);
        return view('tournament.edit',compact('tournament','id'));
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

        $tournament = Tournament::find($id);
        $old_file = $tournament->file;
        $tournament->update($data);
        $upload_req = $request->file('file');
        $extension = $upload_req->extension();
        $basefilename = 'files/'.str_random(32);
        $filename = $basefilename.'.'.$extension;
        $request->file('file')->storeAs('public', $filename);
        Storage::disk('public')->delete($old_file); 
        $tournament->file = $filename; 
        $tournament->save();    
        return redirect('tournament/index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournaments = \App\Tournament::find($id);
        $tournaments->delete();
        return redirect('tournament/index')->with('success','Information has been  deleted');    
    }
}

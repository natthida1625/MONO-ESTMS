@extends('layout.page')

@section('content')    
<div class="container"><br />
  <form method="post" action="{{ url('schedule/index') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create New Schedule</h4>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="date">Date:</label>
          <input type="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" name="date" value="{{ isset($data) ? old('date',$data->date) : old('date') }}">
          @if($errors->has('date'))
            <span class="invalid-feedback">กรุณาเลือกวันที่แข่งขัน.</span>           
          @endif         
        </div>
    </div>
                  
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="time">Time:</label>
          <input type="time" class="form-control {{ $errors->has('time') ? 'is-invalid' : '' }}" name="time" value="{{ isset($data) ? old('time',$data->time) : old('time') }}">
          @if($errors->has('time'))
            <span class="invalid-feedback">กรุณาเลือกเวลาแข่งขัน.</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="round">Round :</label>
            <select class="form-control {{ $errors->has('round') ? 'is-invalid' : '' }}" name="round_id" id="round">
            @foreach($rounds as $round)                
              <option value="{{ $round->id }}">{{ $round->title }}</option>            
            @endforeach               
            </select>           
            @if($errors->has('rounds'))
            <span class="invalid-feedback">กรุณาเลือกรอบการแข่งขัน</span>
            @endif
        </div>                
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="tournament">Tournament :</label>
            <select class="form-control {{ $errors->has('tournament') ? 'is-invalid' : '' }}" name="tournament_id" id="tournament">
            @foreach($tournaments as $tournament)                
              <option value="{{ $tournament->id }}">{{ $tournament->title }}</option>            
            @endforeach               
            </select>           
            @if($errors->has('tournaments'))
            <span class="invalid-feedback">กรุณาเลือกการแข่งขัน</span>
            @endif
        </div>                
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="team">Blue Team :</label>
            <select class="form-control {{ $errors->has('teams') ? 'is-invalid' : '' }}" name="team_id[]" id="blueteam">
            @foreach($teams as $team)                
              <option value="{{ $team->id }}">{{ $team->name }}</option>            
            @endforeach               
            </select>
            @if($errors->has('teams'))
            <span class="invalid-feedback">กรุณาเลือกทีมฝ่ายสีฟ้า</span>
            @endif
        </div>                
    </div>
  
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="status">Status Blue :</label>
          <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status[]" id="status_blue">                         
              <option value="">กรุณาเลือกผลการแข่งขัน</option>          
              <option value="win">Win</option>
              <option value="lose">Lose</option>       
          </select>           
            @if($errors->has('status'))
            <span class="invalid-feedback">กรุณาผลการแข่งขัน</span>
            @endif
        </div>                
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="score">Score Blue:</label>
          <input type="text" class="form-control {{ $errors->has('score') ? 'is-invalid' : '' }}" name="score[]" value="{{ isset($data) ? old('score',$data->score) : old('score') }}" id="score_blue">
          @if($errors->has('score'))
            <span class="invalid-feedback">กรุณากรอกคะแนน</span>
          @endif
        </div>                
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="team">Red Team :</label>
            <select class="form-control {{ $errors->has('team') ? 'is-invalid' : '' }}" name="team_id[]" id="redteam">
            @foreach($teams as $team)                
              <option value="{{ $team->id }}">{{ $team->name }}</option>            
            @endforeach               
            </select>           
            @if($errors->has('teams'))
            <span class="invalid-feedback">กรุณาเลือกทีมฝ่ายสีแดง</span>
            @endif
        </div>                
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="status">Status Red :</label>
          <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status[]" id="status_red">                         
              <option value="">กรุณาเลือกผลการแข่งขัน</option>          
              <option value="win">Win</option>
              <option value="lose">Lose</option>       
          </select>           
            @if($errors->has('status'))
            <span class="invalid-feedback">กรุณาผลการแข่งขัน</span>
            @endif
        </div>                
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="score">Score Red :</label>
          <input type="text" class="form-control {{ $errors->has('score') ? 'is-invalid' : '' }}" name="score[]" value="{{ isset($data) ? old('score',$data->score) : old('score') }}" id="score_red">
          @if($errors->has('score'))
            <span class="invalid-feedback">กรุณากรอกคะแนน.</span>
          @endif
        </div>                
    </div>
    
    <div class="row">   
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div> 
  </form>
</div>    
@endsection        
   
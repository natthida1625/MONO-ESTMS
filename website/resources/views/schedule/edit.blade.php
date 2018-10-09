@extends('layout.page')

@section('content') 
<div class="container"><br />
  <form method="post" action="{{action('ScheduleController@update' , $id)}}" enctype="multipart/form-data">
    @csrf
    <h4>Edit Schedule</h4>
    <input name="id" type="hidden" value="{{ $schedule->id }}">
    <input name="_method" type="hidden" value="PATCH">

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" value="{{ $schedule->date }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="time">Time:</label>
            <input type="time" class="form-control" name="time" value="{{ $schedule->time }}">
        </div>
    </div>    

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="round">Round :</label>
            <select class="form-control" name="round_id">
              @foreach($rounds as $round)                
              <option 
                value="{{ $round->id }}"
                @if ($round->id === $schedule->round_id)
                  selected
                @endif                
                >{{ $round->title }}
                </option>    
              @endforeach               
            </select>                
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="tournament">Tournament :</label>
            <select class="form-control" name="tournament_id">
              @foreach($tournaments as $tournament)                
              <option 
                value="{{ $tournament->id }}"
                @if ($tournament->id === $schedule->tournament_id)
                  selected
                @endif                
                >{{ $tournament->title }}
                </option>    
              @endforeach               
            </select>                
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="team">Blue Team :</label>
            <select class="form-control" name="team_id[]" id="blueteam">
              @foreach($teams as $team)                
              <option 
                value="{{ $team->id }}"
                @if ($team->id === $schedule->teams->first()->id)
                  selected
                @endif   
                >{{ $team->name }}
              </option>    
              @endforeach               
            </select>                
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="status">Status Blue :</label>
          <select class="form-control" name="status[]" id="status_blue">
              <option value="default">กรุณาเลือกผลการแข่งขัน</option>          
              <option value="win">Win</option>
              <option value="lose">Lose</option>  
          </select>        
        </div>
    </div> 
     
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="score">Score Blue :</label>
          <input type="text" class="form-control" name="score[]" value="{{ $schedule->teams->first()->pivot->score }}" id="score_blue">
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="score">Score Red :</label>
          <input type="text" class="form-control" name="score[]" value="{{ $schedule->teams->last()->pivot->score }}" id="score_red">          
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="status">Status Red :</label>
          <select class="form-control" name="status[]" id="status_red">
              <option value="default">กรุณาเลือกผลการแข่งขัน</option>          
              <option value="win">Win</option>
              <option value="lose">Lose</option>         
          </select>     
      </div>
    </div>

     <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="team">Red Team :</label>
            <select class="form-control" name="team_id[]" id="redteam">
              @foreach($teams as $team)                
              <option 
                value="{{ $team->id }}"
                @if ($team->id === $schedule->teams->last()->id)
                  selected
                @endif                
                >{{ $team->name }}
              </option>    
              @endforeach               
            </select>                
      </div>
    </div>


    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Save</button>
        </div>
    </div>
     
  </form>
</div>      
@endsection        
@extends('layout.page')

@section('content') 
<div class="container"><br />
  <form method="post" action="{{action('RoundController@update', $id)}}" enctype="multipart/form-data">
    @csrf
    <h4>Edit Round</h4>
    <input name="id" type="hidden" value="{{ $round->id }}">
    <input name="_method" type="hidden" value="PATCH">

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $round->title }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="round_number">Round number:</label>
            <input type="text" class="form-control" name="round_number" value="{{ $round->round_number }}">
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
                @if ($tournament->id === $round->tournament_id)
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
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>     
  </form>
</div>      
@endsection        
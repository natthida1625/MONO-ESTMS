@extends('layout.page')

@section('content') 
<div class="container"><br />
  <form method="post" action="{{action('TournamentController@update' , $id)}}" enctype="multipart/form-data">
    @csrf
    <h4>Edit Tournament</h4>
    <input name="id" type="hidden" value="{{ $tournament->id }}">
    <input name="_method" type="hidden" value="PATCH">

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $tournament->title }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="description">Description:</label>
              <textarea class="form-control" name="description" type="textarea" rows="7" cols="50">{{ $tournament->description }}</textarea>
        </div>
    </div>
       
    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="team">Team :</label>
                <div>
                @foreach($teams as $team)    
                  <input type="checkbox" name="teams[]" value="{{ $team->id }}" {{ in_array($team->id, $tournament_team) ? 'checked' : ''}}>{{ $team->name }}
                  <br />
                @endforeach
                </div>   
            </div>
        </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="images">Images :</label>
            <input type="file" class="form-control" name="file" value="{{ $tournament->file }}">
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
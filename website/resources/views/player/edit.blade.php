@extends('layout.page')

@section('content') 
<div class="container">
  <form method="post" action="{{action('PlayerController@update', $id)}}" enctype="multipart/form-data">
    @csrf
    <h4>Edit Player</h4>
    <input name="id" type="hidden" value="{{ $player->id }}">
    <input name="_method" type="hidden" value="PATCH">

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Firstname:</label>
            <input type="text" class="form-control" name="firstname" value="{{ $player->firstname }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Lastname:</label>
            <input type="text" class="form-control" name="lastname" value="{{ $player->lastname }}">
        </div>
    </div>
   
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Birthday:</label>
            <input type="date" class="form-control" name="birthday" value="{{ $player->birthday }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Character name:</label>
            <input type="text" class="form-control" name="charactername" value="{{ $player->charactername }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="description">Description:</label>
              <textarea class="form-control" name="description" type="textarea" maxlength="140" rows="7">{{ $player->description }}</textarea>
        </div>
    </div>    

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="images">Images :</label>
            <input type="file" class="form-control" name="file" value="{{ $player->file }}">
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
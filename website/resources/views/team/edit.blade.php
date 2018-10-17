@extends('layout.page')

@section('content') 
<div class="container"><br />
  <form method="post" action="{{action('TeamController@update' , $id)}}" enctype="multipart/form-data">
    @csrf
    <h4>Edit Team</h4>
    <input name="id" type="hidden" value="{{ $team->id }}">
    <input name="_method" type="hidden" value="PATCH">

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Team name:</label>
            <input type="text" class="form-control" name="name" value="{{ $team->name }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="description">Description:</label>
              <textarea class="form-control" name="description" type="textarea" maxlength="140" rows="7">{{ $team->description }}</textarea>
        </div>
    </div>   
   
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="images">Images :</label>
            <input type="file" class="form-control" name="file" value="{{ $team->file }}">
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
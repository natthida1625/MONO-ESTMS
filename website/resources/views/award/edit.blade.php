@extends('layout.page')

@section('content') 
<div class="container"><br />
  <form method="post" action="{{action('AwardController@update' , $id)}}" enctype="multipart/form-data">
    @csrf
    <h4>Edit Award</h4>
    <input name="id" type="hidden" value="{{ $award->id }}">
    <input name="_method" type="hidden" value="PATCH">

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $award->title }}">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="description">Description:</label>
              <textarea class="form-control" name="description" type="textarea" maxlength="140" rows="7">{{ $award->description }}</textarea>
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
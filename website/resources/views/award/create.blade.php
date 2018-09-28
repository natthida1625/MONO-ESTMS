@extends('layout.page')

@section('content')    
<div class="container"><br />
  <form method="post" action="{{ url('award/index') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create New Award</h4>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="title">Title:</label>
          <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ isset($data) ? old('title',$data->title) : old('title') }}">
          @if($errors->has('title'))
            <span class="invalid-feedback">กรุณากรอกชื่อการแข่งขัน</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="description">Description:</label>
          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" value="{{ isset($data) ? old('description',$data->description) : old('description') }}" type="textarea" maxlength="140" rows="7"></textarea>
          @if($errors->has('description'))
            <span class="invalid-feedback">กรุณากรอกชื่อการแข่งขัน</span>
          @endif
        </div>
    </div>

    <div class="row">   
      <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
          <button type="submit"  class="btn btn-success" style="margin-left:38px">Save</button>
        </div>
      </div> 
    </form>
  </div>    
@endsection        
   
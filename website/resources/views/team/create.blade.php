@extends('layout.page')

@section('content')    
<div class="container">
    <!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif -->

    <form method="post" action="{{ url('team/index') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create New Team</h4>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="name">Name:</label>
          <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ isset($data) ? old('name',$data->product_name) : old('name') }}">
          @if($errors->has('name'))
            <span class="invalid-feedback">กรุณากรอกชื่อของคุณ</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="description">Description:</label>
          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" value="{{ isset($data) ? old('description',$data->description) : old('description') }}" type="textarea" maxlength="140" rows="7"></textarea>
          @if($errors->has('description'))
            <span class="invalid-feedback">กรุณาใส่รายละเอียดเกี่ยวกับทีมของคุณ</span>
          @endif
        </div>
    </div> 

    <div class="row">      
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="images">Images :</label>
          <input type="file" id="file" class="form-control {{ $errors->has('file') ? 'is-invalid' : '' }}" name="file" value="{{ isset($data) ? old('file',$data->file) : old('file') }}"> 
          @if($errors->has('file'))
            <span class="invalid-feedback">กรุณาเลือกรูปโปรไฟล์ของคุณ</span>
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
   
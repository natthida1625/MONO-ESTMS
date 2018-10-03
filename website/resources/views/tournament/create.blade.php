@extends('layout.page')

@section('content')    
<div class="container"><br />
  <form method="post" action="{{ url('tournament/index') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create New Tournament</h4>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="title">Name:</label>
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
          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" value="{{ isset($data) ? old('description',$data->description) : old('description') }}" type="textarea" maxlength="500" rows="10"></textarea>
          @if($errors->has('description'))
          <span class="invalid-feedback">กรุณาใส่รายละเอียดเกี่ยวกับการแข่งขัน</span>
          @endif
        </div>
    </div> 

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('categories') ? 'has-error' : '' }}">
          <label class="control-label" for="team">team :</label>                    
          <div>
            @foreach($teams as $team)    
            <input type="checkbox" name="teams[]" value="{{ $team->id }}">{{ $team->name }}  
            @if(isset($data))
            <input type="hidden" id="id" name="id" value="{{ $team->id  }}"> 
            @endif
            <br />                           
            @endforeach
          </div>       
            @if($errors->has('teams'))
              <span class="invalid-feedback">{{ $errors->first('teams') }}</span>
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
   
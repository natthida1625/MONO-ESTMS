@extends('layout.page')

@section('content')    
<div class="container"><br />
  <form method="post" action="{{ url('player/index') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create New Player</h4>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="firstname">First name:</label>
          <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" name="firstname" value="{{ isset($data) ? old('firstname',$data->firstname) : old('firstname') }}">
          @if($errors->has('firstname'))
            <span class="invalid-feedback">กรุณากรอกชื่อของคุณ.</span>           
          @endif         
        </div>
    </div>
                  
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="lastname">Last name:</label>
          <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" name="lastname" value="{{ isset($data) ? old('lastname',$data->lastname) : old('lastname') }}">
          @if($errors->has('lastname'))
            <span class="invalid-feedback">กรุณากรอกนามสกุลของคุณ.</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="birthday">Birthday:</label>
          <input type="date" class="form-control {{ $errors->has('birthday') ? 'is-invalid' : '' }}" name="birthday" value="{{ isset($data) ? old('birthday',$data->birthday) : old('birthday') }}">
          @if($errors->has('birthday'))
            <span class="invalid-feedback">กรุณากรอกวันเกิดของคุณ.</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="charactername">Character name:</label>
          <input type="text" class="form-control {{ $errors->has('charactername') ? 'is-invalid' : '' }}" name="charactername" value="{{ isset($data) ? old('charactername',$data->charactername) : old('charactername') }}">
          @if($errors->has('charactername'))
            <span class="invalid-feedback">กรุณากรอกชื่อตัวละครของคุณ.</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="description">Description:</label>
          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" value="{{ isset($data) ? old('description',$data->description) : old('description') }}" type="textarea" maxlength="140" rows="7"></textarea>
          @if($errors->has('description'))
            <span class="invalid-feedback">กรุณาใส่รายละเอียดเกี่ยวกับคุณ</span>
          @endif
        </div>
    </div>

     <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="team">Team :</label>
            <select class="form-control {{ $errors->has('team') ? 'is-invalid' : '' }}" name="team_id" id="team">
            @foreach($teams as $team)                
              <option value="{{ $team->id }}">{{ $team->name }}</option>            
            @endforeach               
            </select>           
            @if($errors->has('teams'))
            <span class="invalid-feedback">กรุณาเลือกทีมของคุณ</span>
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
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div> 
  </form>
</div>    
@endsection        
   
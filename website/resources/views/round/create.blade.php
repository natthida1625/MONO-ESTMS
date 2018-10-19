@extends('layout.page')

@section('content')    
<div class="container"><br />
  <form method="post" action="{{ url('round/index') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create Round</h4>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="title">Title:</label>
          <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ isset($data) ? old('title',$data->title) : old('title') }}">
          @if($errors->has('title'))
            <span class="invalid-feedback">กรุณากรอกหัวข้อรอบการแข่งขัน.</span>       
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="round_number">Round number:</label>
          <input type="text" class="form-control {{ $errors->has('round_number') ? 'is-invalid' : '' }}" name="round_number" value="{{ isset($data) ? old('round_number',$data->round_number) : old('round_number') }}">
          @if($errors->has('round_number'))
            <span class="invalid-feedback">กรุณากรอกรอบการแข่งขัน.</span>         
          @endif
        </div>
    </div>

     <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label class="control-label" for="tournament">Tournaments :</label>
            <select class="form-control {{ $errors->has('tournament') ? 'is-invalid' : '' }}" name="tournament_id" id="tournament">
            @foreach($tournaments as $tournament)                
              <option value="{{ $tournament->id }}">{{ $tournament->title }}</option>            
            @endforeach               
            </select>           
            @if($errors->has('tournaments'))
            <span class="invalid-feedback">กรุณาเลือกการแข่งขัน</span>
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
   
@extends('layout.page')

@section('content')    
<div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="post" action="{{ url('product') }}" enctype="multipart/form-data">
    @csrf
    <h4>Create New Award</h4>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('product_name') ? 'has-error' : '' }}">
          <label class="control-label" for="name">Title:</label>
          <input type="text" class="form-control" name="product_name" value="{{ isset($data) ? old('product_name',$data->product_name) : old('product_name') }}">
          @if($errors->has('product_name'))
            <span class="help-block">{{ $errors->first('product_name') }}</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('product_description') ? 'has-error' : '' }}">
          <label class="control-label" for="description">Description:</label>
          <textarea class="form-control" name="product_description" value="{{ isset($data) ? old('product_description',$data->product_description) : old('product_description') }}" type="textarea" maxlength="140" rows="7"></textarea>
          @if($errors->has('product_description'))
            <span class="help-block">{{ $errors->first('product_description') }}</span>
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
   
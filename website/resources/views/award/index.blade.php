@extends('layout.page')

@section('content')
<div class="container"><br />
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
  @endif

  <div class="table-responsive">
    <table class="table table-striped">
    <h4>Awards List</h4>
    <a href="{{ action('AwardController@create')}}">Create Award </a><br /><br /> 
      <thead>
        <tr>
          <th>ID</th>      
          <th>Title</th>
          <th>Description</th>
          <th colspan="2"></th>
        </tr>
      </thead>
    <tbody>     
    @foreach($awards as $award)
    <tr>             
      <td>{{ $award->id}}</td>
      <td>{{ $award->title}}</td>  
      <td>{{ $award->description}}</td>
      <td><a href="{{ action('AwardController@edit', $award->id)}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('AwardController@destroy', $award['id'])}}">
        @csrf
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>    
    </table>
  </div>  
</div>
@endsection
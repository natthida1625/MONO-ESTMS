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
    <h4>Teams List</h4>
    <a href="{{ action('TeamController@create')}}">Create Team </a><br /><br /> 
      <thead>
        <tr>
          <th>Images</th>     
          <th>ID</th>      
          <th>Name</th>
          <th>Description</th>
          <th colspan="2"></th>
        </tr>
      </thead>
    <tbody>
    @foreach($teams as $team)
    <tr >
      <td><img src="{{ asset('storage/'.$team->file) }}" width="180px" height="190px"></td>          
      <td>{{ $team->id}}</td>
      <td>{{ $team->name}}</td>  
      <td>{{ $team->description}}</td>
      <td><a href="{{ action('TeamController@edit', $team['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('TeamController@destroy', $team['id'])}}">
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
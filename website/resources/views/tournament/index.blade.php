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
    <h4>Tournaments List</h4>
    <a href="{{ action('TournamentController@create')}}">Create Tournament </a><br /><br /> 
      <thead>
        <tr>
          <th>Images</th>     
          <th>ID</th>      
          <th>Title</th>
          <th>Description</th>
          <th colspan="2"></th>
        </tr>
      </thead>
    <tbody>     
    @foreach($tournaments as $tournament)
    <tr>
      <td><img src="{{ asset('storage/'.$tournament->file) }}" width="420px" height="250px"></td>          
      <td>{{ $tournament->id}}</td>
      <td>{{ $tournament->title}}</td>  
      <td>{{ $tournament->description}}</td>     
      <td><a href="{{ action('TournamentController@edit', $tournament['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('TournamentController@destroy', $tournament['id'])}}">
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
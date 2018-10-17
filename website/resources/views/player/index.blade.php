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
    <h4>Players List</h4>
    <a href="{{ action('PlayerController@create')}}">Create Player</a><br /><br /> 
    <div>
      <form action="/search" method="get">
      <div class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
         <span>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </span>
      </div>
      </form>
    </div><br />
      <thead>   
      <tr>            
        <th>Images</th>     
        <th>ID</th>
        <th>Team</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthday</th>
        <th>Character Name</th>
        <th>Description</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
    <tr>
      <td><img src="{{ asset('storage/'.$player->file) }}" width="150px" height="210px"></td>          
      <td>{{ $player->id }}</td>
      <td>{{ $player->team->name }}</td>
      <td>{{ $player->firstname }}</td>  
      <td>{{ $player->lastname }}</td>
      <td>{{ $player->birthday }}</td> 
      <td>{{ $player->charactername }}</td>
      <td>{{ $player->description }}</td>
      <td><a href="{{ action('PlayerController@edit', $player['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('PlayerController@destroy', $player['id'])}}">
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
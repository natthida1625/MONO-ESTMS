@extends('layout.page')

@section('content')
<div class="container"><br />
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
  @endif
     
  <table class="table table-striped">
  <h4>Tournaments List</h4>
  <a href="{{ action('TournamentController@create')}}">Create Tournament </a><br /><br /> 
    <thead>
      <tr>
        <th>Images</th>     
        <th>ID</th>      
        <th>Title</th>
        <th>Description</th>
        <th colspan="2">Action</th>
        <th>Team</th>

      </tr>
    </thead>
    <tbody>     
    <tr>
      <td></td>          
      <td></td>
      <td></td>  
      <td></td>
      <td><a href="{{ action('TournamentController@edit', ['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('TournamentController@destroy', ['id'])}}">
        @csrf
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ action('TeamController@index')}}" class="btn btn-dark">Add Team</a></td>
    </tr>
    </tbody>

</table>
</div>
@endsection
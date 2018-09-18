@extends('layout.page')

@section('content')
<div class="container"><br />
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
  @endif
     
  <table class="table table-striped">
  <h4>Teams List</h4>
  <a href="{{ action('TeamController@create')}}">Create Team </a><br /><br /> 
    <thead>
      <tr>
        <th>Images</th>     
        <th>ID</th>      
        <th>Name</th>
        <th>Description</th>
        <th colspan="2">Action</th>
        <th>Player</th> 
      </tr>
    </thead>
    <tbody>     
    <tr>
      <td></td>          
      <td></td>
      <td></td>  
      <td></td>
      <td><a href="{{ action('TeamController@edit', ['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('TeamController@destroy', ['id'])}}">
        @csrf
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ action('PlayerController@index')}}" class="btn btn-dark">Add Player</a></td>
    </tr>
    </tbody>

</table>
</div>
@endsection
@extends('layout.page')

@section('content')
<div class="container"><br />
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
  @endif
     
  <table class="table table-striped">
  <h4>Players List</h4>
  <a href="{{ action('PlayerController@create')}}">Create Player </a><br /><br /> 
    <thead>
      <tr>
        <th>Images</th>     
        <th>ID</th>      
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthday</th>
        <th>Character Name</th>
        <th>Description</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>     
    <tr>
      <td></td>          
      <td></td>
      <td></td>  
      <td></td>
      <td></td> 
      <td></td>
      <td></td>
      <td><a href="{{ action('PlayerController@edit', ['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('PlayerController@destroy', ['id'])}}">
        @csrf
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    </tbody>

</table>
</div>
@endsection
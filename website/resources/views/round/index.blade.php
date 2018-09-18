@extends('layout.page')

@section('content')
<div class="container"><br />
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
  @endif
     
  <table class="table table-striped">
  <h4>Rounds List</h4>
  <a href="{{ action('RoundController@create')}}">Create Round</a><br /><br /> 
    <thead>
      <tr>
        <th>Round_ID</th>      
        <th>Title</th>
        <th>Round_number</th>
        <th>Tournament_ID</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>     
    <tr>
      <td></td>          
      <td></td>
      <td></td>  
      <td></td>  
      <td><a href="{{ action('RoundController@edit', ['id'])}}" class="btn btn-primary">Edit</a></td>
      <td>
        <form method="post" action="{{action('RoundController@destroy', ['id'])}}">
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
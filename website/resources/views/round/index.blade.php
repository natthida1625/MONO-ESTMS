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
        <th>ID</th>  
        <th>Tournament</th>
        <th>Title</th>
        <th>Round number</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($rounds as $round)
    <tr>
      <td>{{ $round->id}}</td>
      <td>{{ $round->tournament->title}}</td>
      <td>{{ $round->title}}</td>  
      <td>{{ $round->round_number}}</td>
      <td><a href="{{ action('RoundController@edit', $round['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('RoundController@destroy', $round['id'])}}">
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
@endsection
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
    <h4>Schedule List</h4>
    <a href="{{ action('ScheduleController@create')}}">Create Schedule </a><br /><br /> 
    <thead>
      <tr width="100%">
        <th>ID</th>             
        <th>Date</th>
        <th>Time</th>
        <th>Round</th>
        <th>Tournament</th>
        <th>Blue Team</th>
        <th>Status</th>
        <th>Score</th>
        <th>Red Team</th> 
        <th>Status</th>
        <th>Score</th>
        <th>Win</th>        
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody> 
    @foreach($schedules as $schedule)
    <tr>
      <td>{{ $schedule->id }}</td> 
      <td>{{ $schedule->date }}</td>     
      <td>{{ $schedule->time }}</td>
      <td>{{ $schedule->round->title }}</td>
      <td>{{ $schedule->tournament->title }}</td>
      <td>{{ $schedule->teams->first()->name }}</td>
      <td>{{ $schedule->teams->first()->pivot->status }}</td>    
      <td>{{ $schedule->teams->first()->pivot->score }}</td>
      <td>{{ $schedule->teams->last()->name }}</td> 
      <td>{{ $schedule->teams->last()->pivot->status }}</td> 
      <td>{{ $schedule->teams->last()->pivot->score }}</td>    
      <td>{{ $schedule->teams()->wherePivot('status', 'win')->count()==0 ? '' : $schedule->teams()->wherePivot('status', 'win')->first()->name }}</td> 
      <td><a href="{{ action('ScheduleController@edit', $schedule['id'])}}" class="btn btn-primary">Edit</a><br /><br /></td>
      <td>
        <form method="post" action="{{action('ScheduleController@destroy', $schedule['id'])}}">
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
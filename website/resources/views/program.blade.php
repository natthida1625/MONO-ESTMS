<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang='en'>
<head>
<title>ROV ARENA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('asset/img/rov.png') }}" /> 
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<img class="navbar-logo" href="#" src="{{ asset('asset/img/logo_en.png') }}">
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
          <li class="nav-item active">
        		<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      		</li>
          <li class="nav-item">
        		<a class="nav-link" href="{{ url('/player/index') }}">Player</a>
	  		  </li>
					<li class="nav-item">
        		<a class="nav-link" href="{{ url('/team/index') }}">Team</a>
	  		  </li>
					<li class="nav-item">
        		<a class="nav-link" href="{{ url('/tournament/index') }}">Tournament</a>
	  		  </li>
	  		  <li class="nav-item">
        		<a class="nav-link" href="{{ url('/round/index') }}">Round</a>
	  		  </li>
      		<li class="nav-item">
        		<a class="nav-link" href="{{ url('/schedule/index') }}">Schedule</a>
	  		  </li>
      		<li class="nav-item">
        		<a class="nav-link" href="{{ url('/award/index') }}">Award</a>
      		</li>
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Program
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ url('/program') }}">ROV Tournament Pro Legue</a>
            </div>
          </li>
    	</ul>
    <form class="form-inline my-2 my-lg-0">
      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- /.navbar -->
<br/>

<div class="container">

  <h1>{{ $tournament->title }}</h1>
  <h2>{{ $tournament->description }}</h2>


  <div class="tournament-bracket tournament-bracket--rounded">   

  @foreach($tournament->rounds as $rounds)
    
    <div class="tournament-bracket__round">


      <h3 class="tournament-bracket__round-title">{{ $rounds->title }}</h3>


      <ul class="tournament-bracket__list">

        @foreach($rounds->schedules as $schedule)
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time>{{ $schedule->date }}</time><br/>
                <time>Time : {{ $schedule->time }} น.</time>
              </caption>
              
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team {{ $schedule->teams->first()->pivot->status=='win' ? 'tournament-bracket__team--winner' : '' }}">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code">{{ $schedule->teams->first()->name }}</abbr>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">{{ $schedule->teams->first()->pivot->score }}</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team {{ $schedule->teams->last()->pivot->status=='win' ? 'tournament-bracket__team--winner' : '' }}">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code">{{ $schedule->teams->last()->name }}</abbr>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">{{ $schedule->teams->last()->pivot->score }}</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        @endforeach

      </ul>

    </div>
  
  @endforeach
  </div>

</div>

</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang='en'>
<head>
<title>ROV ARENA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('asset/img/icon.png') }}" /> 
<style type="text/css">
.round {
  float: left;
}

.round.r-of-2 {
  margin-top: 25px;
}
.bracket-game {
  max-width: 125px;
  margin: 10px 0;
}
.player {
  min-width: 100px;
  border: 1px solid #AAA;
  padding-left: 10px;
}
.player.top {
  border-radius: 3px 3px 0 0;
}
.player.bot {
  border-radius: 0 0 3px 3px;
}
.player .score {
  display: inline;
  float: right;
  border-left: 1px solid #AAA;
  padding-left: 10px;
  padding-right: 10px;
  background: #EEE;
}
.player.win {
  background-color: #B8F2B8;
}
.player.loss {
  background-color: #F2B8B8;
}
.connectors {
  float: left;
  min-width: 35px;
}
.connectors.r-of-2 .top-line {
  position: relative;
  top: 30px;
  width: 17px;
  border: 1px solid #AAA;
}
.connectors.r-of-2 .bottom-line {
  position: relative;
  top: 81px;
  width: 17px;
  border: 1px solid #AAA;
}
.connectors.r-of-2 .vert-line {
  position: relative;
  top: 26px;
  left: -16px;
  height: 55px;
  border-right: 2px solid #AAA;
}
.connectors.r-of-2 .next-line {
  position: relative;
  top: -4px;
  left: 17px;
  width: 17px;
  border: 1px solid #AAA;
}
.clear {
  clear: both;
}
</style>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Header</h1>
    <p>Resize this responsive page to see the effect!</p> 
    <!-- <img class="navbar-logo" src="{{ asset('asset/img/') }}"> -->

</div>
    
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
    	</ul>
    <form class="form-inline my-2 my-lg-0">
      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- /.navbar -->

<!-- slide bar -->
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <!-- <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('asset/img/') }}" alt="First slide" height="700px" width="300px">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('asset/img/') }}" alt="Second slide" height="700px" width="300px">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('asset/img/') }}" alt="Third slide" height="700px" width="300px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
</div>
<!-- slide bar -->

@foreach($tournament->rounds as $round)
<div class="connectors r-of-2">
@foreach($round->schedules as $schedule)
  <div class="bracket-game">
    <div class="player top win">{{ $schedule->teams->first()->name }}
      <div class="score">0</div>
    </div>
    <div class="player bot loss">{{ $schedule->teams->last()->name }}
      <div class="score">0</div>
    </div>  
  </div>
  @endforeach 
</div>
@endforeach   

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</div>		

</body>
</html>
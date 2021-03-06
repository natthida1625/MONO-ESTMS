<!DOCTYPE html>
<html lang="en">
<head>
  <title>Garena ROV</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('asset/img/rov.png') }}" /> 
</head>
<body>

<!-- <div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Header</h1>
  	<p>Resize this responsive page to see the effect!</p> 
</div> -->

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
        		<a class="nav-link" href="{{ url('/welcome') }}">News</a>
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
							<a class="dropdown-item" href="{{ url('/program_1') }}">ROV Tournament Road Glory</a>
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

<!-- content -->
@yield('content')
<!--/.content -->

  </div>
</div>
<!--/.main-content -->

<!--footer -->
<footer>
<div class="jumbotron text-center" style="margin-bottom:0">
<img class="navbar-logo" href="#" src="{{ asset('asset/img/Garena_logo.png') }}">
</div>
</footer>
 <!--/.footer-->

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>My First Bootstrap 4 Page</h1>
  	<p>Resize this responsive page to see the effect!</p> 
</div>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Games</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="{{ url('/player/indexplayer') }}">Player</a>
	  		</li>
	  		<li class="nav-item">
        		<a class="nav-link" href="{{ url('/') }}">Team</a>
	  		</li>
	  		<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   		Tournament
     			</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          		<a class="dropdown-item" href="#">Action</a>
          		<a class="dropdown-item" href="#">Another action</a>
          	<div class="dropdown-divider"></div>
          		<a class="dropdown-item" href="#">Something else here</a>
        	</div>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#">Competition</a>
	  		</li>
      		<li class="nav-item">
        		<a class="nav-link disabled" href="#">Disabled</a>
      		</li>
    	</ul>
    <form class="form-inline my-2 my-lg-0">
      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- /.navbar -->

<!-- main-content -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Title 1</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>

	  <h3>Title 2</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <!-- content -->
	<div class="col-sm-8">
	@yield('content')
	</div>
	<!--/.content -->

  </div>
</div>
<!--/.main-content -->


<!--footer -->
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
 <!--/.footer-->

</body>
</html>

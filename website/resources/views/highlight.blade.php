<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang='en'>
<head>
<title>ROV ARENA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('asset/img/rov.png') }}" /> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

<!-- slide bar -->
<div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('asset/img/slide.jpg') }}" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('asset/img/slide1.jpg') }}" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('asset/img/slide2.jpg') }}" alt="Third slide">
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
</div>
</div>
<!-- slide bar -->

<div class="container"><br/>
  <h1>Tournament Latest</h1><br/>
  <div>
    <div class="container-fluid">
        <div class="row main align-items-center">
            <div class="col-md-6 image-element align-center">   
              <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/ROV Tournament Road Glory.jpg') }}" media-simple="true"></div>                
            </div>
            <div class="col-md-6 text-element">
                <div class="text-content">                   
                    <div class="mbr-section-text">
                        <b>ROV Tournament Road Glory</b>
                        <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-center display-5">
                        พบกับรายการการแข่งขันสุดยิ่งใหญ่ของเกม RoV สุดยอดเกม MOBA บนมือถือ ที่กระแสแรงที่สุดในขณะนี้ กับการแข่งขัน Road to Glory 
                        ซึ่งมียอดเงินรางวัลรวมสูงถึง 3,000,000 บาท  เพื่อการันตีความเป็น 1 ในด้านของการแข่งขัน Mobile eSports ที่ใหญ่ที่สุดในประเทศไทย 
                        </p>
                    </div>
                    <div class="mbr-section-btn pt-3 align-center">
                        <a class="btn btn-md btn-primary display-4" href="{{ url('/news_5') }}">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>
<br/><hr>
  <h1>แผนผังโปรแกรมการแข่งขันล่าสุด</h1>
  <h2>ROV Tournament Road Glory</h2>
  
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
<br/>
</div>
<br/>

<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h2>ทีมที่เข้าร่วมการแข่งขัน</h2>
			</div><br/>

			<div class="row">
				<div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">						
            <div align="center"><img src="{{ asset('asset/img/alpha.png') }}" width="160px" height="170px" alt="ALPHA Red"></div>			
						<div class="block-txt p-t-14 text-center"><br/>
							<p>ALPHA Red</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">					
            <div align="center"><img src="{{ asset('asset/img/arctic wolf.png') }}" width="160px" height="170px" alt="Arctic Wolf"></div>				
						<div class="block-txt p-t-14 text-center"><br/>
              <p>Arctic Wolf</p>						
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/Pupapaya.jpg') }}" width="160px" height="170px" alt="Pupapaya"></div>
						<div class="block3-txt p-t-14 text-center"><br/>
							<p>Pupapaya</p>
						</div>
					</div>
        </div>

        <div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/Bearmaster.jpg') }}" width="160px" height="170px" alt="Bearmaster"></div>
						<div class="block-txt p-t-14 text-center"><br/>
							<p>Bearmaster</p>
						</div>
					</div>
        </div>

        <div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/Black forest.jpg') }}" width="160px" height="170px" alt="Black Forest"></div>
						<div class="block-txt p-t-14 text-center"><br/>
							<p>Black Forest</p>
						</div>
					</div>
        </div>

        <div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/hexen.jpg') }}" width="160px" height="170px" alt="Hexen"></div>
						<div class="block-txt p-t-14 text-center"><br/>
							<p>Hexen</p>
						</div>
					</div>
        </div>

        <div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/Bazaar.png') }}" width="160px" height="170px" alt="Bazaar Gaming"></div>
						<div class="block-txt p-t-14 text-center"><br/>
							<p>Bazaar Gaming</p>
						</div>
					</div>
        </div>

        <div class="col-sm-10 col-md-3 p-b-30 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/Evos.png') }}" width="160px" height="170px" alt="Evos Debut"></div>
						<div class="block-txt p-t-14 text-center"><br/>
							<p>Evos Debut</p>
						</div>
					</div>
        </div>        
			</div>
		</div>
  </section>
  
  <section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h2>ทีมชนะเลิศการแข่งขัน</h2>
      </div><br/>
      <div class="col-sm-12 m-l-r-auto">
					<div class="block">
						<div align="center"><img src="{{ asset('asset/img/Pupapaya.jpg') }}" width="160px" height="170px" alt="Evos Debut"></div>
						<div class="block-txt p-t-14 text-center"><br/>
							<p>Evos Debut</p>
						</div>
					</div>
        </div>        
			</div>
		</div>
  </section>


<!-- <div class="w3-container">
  <h2>ทีมชนะเลิศการแข่งขัน</h2>
  <table align="center">
    <tr>
    <div class="w3-card-4" style="width:160px">
      <td>
        <img class="rounded mx-auto d-block" src="{{ asset('asset/img/Pupapaya.jpg') }}" width="160px" height="160px">
        <div class="w3-container w3-center">
          <p align="center">Pupapaya</p>
        </div>
      </td>
    </div>
    </tr>
  </table>  
</div> -->

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
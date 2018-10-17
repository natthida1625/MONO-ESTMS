<!DOCTYPE html>
<html lang="en">
<head>
  <title>Garena ROV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    	</ul>
    <form class="form-inline my-2 my-lg-0">
      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- /.navbar -->

<!-- header -->
<!-- <div>
	<img class="navbar-logo" src="{{ asset('asset/img/header.jpg') }}"> 
</div> -->
<!-- /.header -->

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
      <img class="d-block w-100" src="{{ asset('asset/img/') }}" alt="First slide">
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


<!-- main-content -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4 border">               
      <br>
      <h3>Menu</h3>      
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/program') }}">โปรแกรมการแข่งขัน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ผลการแข่งขัน</a>
          </li>             
        </ul>
        <br/>

      <h3>News</h3>
      <h6>ข่าวที่น่าสนใจ</h6><br/>
      <b><p>ROV Pro League Season 2 ชิงรางวัลมูลค่ากว่า 6 ล้านบาท</p></b>
      <div><img class="rounded-mx-auto" src="{{ asset('asset/img/title3.jpg') }}"></div><br/>
      <p>หลังจากที่ประสบความสำเร็จกับรายการแข่งขันเกม ROV Pro League ในครั้งที่แล้ว ล่าสุด Garena 
        ได้ประกาศ ROV Pro League Season 2 โดยความร่วมมือจากผู้สนับสนุนอีกมากมาย อาทิ TRUE, Yamaha และ Oppo 
        มาร่วมเป็นส่วนหนึ่งของการแข่งขันครั้งนี้ เพื่อดึ่งอีสปอร์ตไทย ไปสู่ระดับโลก <a href="{{ action('PagesController@news3')}}">อ่านเพิ่มเติม...</a></p>	 

      <br>   
      <b><p>เปิดตัว ฮีโร่ตัวใหม่สายแครี่ พร้อมแนวทางการเล่น</p></b>
      <div><img class="rounded-mx-auto" src="{{ asset('asset/img/title4.jpg') }}"></div><br/>
      <p>" บางครั้งความตายก็อาจจะไม่ได้น่ากลัวสักเท่าไหร่ เพราะบางคนก็อาจจะตายโดยไม่ทันได้กลัว "<br/>
      Elsu ฮีโร่สายแครี่ ผู้ที่ได้ขึ้นชื่อว่าเป็นสไนเปอร์ประจำเกม สามารถซุ่มยิงฮีโร่จากนอกวงไฟต์ได้สบายๆ นอกจากนี้ Passive 
      ของเขายังเอื้อต่อหน้าที่ในการทำหน้าที่สไนเปอร์ได้ดีเยี่ยมอีกด้วย <a href="{{ action('PagesController@news4')}}">อ่านเพิ่มเติม...</a></p>      
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
<footer>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
 <!--/.footer-->
</footer>

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</div>		

</body>
</html>
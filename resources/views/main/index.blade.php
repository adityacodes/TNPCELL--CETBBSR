@extends('layouts.app')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="main/css/carousel.css">
<style type="text/css">
	.carousel-inner > .item > img{
		width: 100%;
	}
</style>

@endsection

@section('content')
<div class="row clearfix" style="background-color:#ececec;">
	<div class="col-lg-8" style="margin-top: 5px;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <!-- Indicators -->
			      <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
			        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
			        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			      </ol>
			      <div class="carousel-inner" role="listbox">
				        <div class="item active">
				          <img class="first-slide" style="height: 100%; width: 100%; object-fit: contain;" src="/images/carousel/carousel_1.jpg" alt="First slide">
				          
				        </div>
				        <div class="item">
				          <img class="second-slide" src="/images/carousel/carousel_2.jpg" alt="Second slide">
				          
				        </div>
				        <div class="item">
				          <img class="third-slide" src="/images/carousel/carousel_3.jpg" alt="Third slide">
				        </div>  
			      </div>
			      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			      </a>
			      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			      </a>
			</div>
	</div>
	<div class="col-lg-4 hidden-xs">
		<!-- Sidebar -->
		<div class="list-group" style="margin-top: 5px;">
			    <a href="#" class="list-group-item active">
			        <span class="glyphicon glyphicon-" style="font-size: 14px;"></span> USEFUL LINKS
			    </a>
			    <a href="/user/dashboard" class="list-group-item">
			        <span class="glyphicon glyphicon-user" style="font-size: 12px;"></span> STUDENTS PORTAL
			    </a>
			    <a href="http://cet.edu.in/facilities.php" class="list-group-item">
			        <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;"></span> FACILITIES
			    </a>
			    <a href="http://cet.edu.in/academics.php" class="list-group-item">
			        <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;"></span> ACADEMICS
			    </a>
			    <a href="http://cet.edu.in/addmission.php" class="list-group-item">
			        <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;"></span> ADDMISSION
			    </a>
			    <a href="http://cet.edu.in/notice.php" class="list-group-item">
			        <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;"></span> NOTICE BOARD
			    </a>
			    <a href="http://cet.edu.in/upcoming_event.php" class="list-group-item">
			        <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;"></span> UPCOMING EVENTS
			    </a>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading white-bg">
				NOTICES <img src="/users/img/new-star.gif" width="40" height="40">
			</div>
			<div class="panel-body">
				<marquee direction="up" scrollamount="1" scrolldelay="60">HELLO </marquee>
			</div>
		</div>
	</div>
</div>

<div class="row" style="background-color:#ececec;">
	<div class="wells panel panel-default">
			<h3 class="text-center tnpmoto">"To Emerge as a Global Leader in Technical Education"</h3>
	</div>
</div>

<div class="row text-center" style="background-color:#ececec;">
        <div class="col-lg-6">
          <img class="img-circle" style="margin: 0px; border: 7px solid #fff" src="{{$settings['principal_image']}}" alt="Generic placeholder image" width="200" height="200">
          <h2>Principal</h2>
          <p>{{ substr($settings['principal_message'], 0,120) }}...</p>
          <p><a class="btn btn-secondary" href="/message/principal" role="button">See more »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <img class="img-circle" src="{{$settings['pic_message']}}" style="margin: 0px; border: 7px solid #fff" alt="Generic placeholder image" width="200" height="200">
          <h2>Prof. In Charge, T&amp;P Cell</h2>
          <p>{{ substr($settings['pic_message'],0,120)}}</p>
          <p><a class="btn btn-secondary" href="/message/pic" role="button">See more »</a></p>
        </div><!-- /.col-lg-4 -->
      </div>




@endsection

@section('scripts')
        <script type="text/javascript">
            $("marquee").hover(function () { 
                    this.stop();
                }, function () {
                    this.start();
                });
        </script>



@endsection






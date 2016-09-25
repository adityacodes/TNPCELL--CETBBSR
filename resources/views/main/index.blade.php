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
	</div>
</div>

<div class="row" style="background-color:#ececec;">
	<div class="wells panel panel-default">
			<h2 class="text-center">INVITATION</h2>
  			<div class="panel-body">A Basic Panel</div>
	</div>
</div>




@endsection






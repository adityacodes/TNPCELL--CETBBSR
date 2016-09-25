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
				          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
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

		</div>
	</div>
</div>

<div class="row marketing" style="background-color:#ececec;">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
</div>





@endsection






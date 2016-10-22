@extends('layouts.app')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="/main/css/carousel.css">

@endsection

@section('content')
<div class="row">

			<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		      <!-- Indicators -->
			      <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
			        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
			        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			      </ol>
			      <div class="carousel-inner" role="listbox">
				        <div class="item">
				          <img class="first-slide" src="/images/carousel/carousel_1.jpg" alt="First slide">
				          
				        </div>
				        <div class="item active">
				          <img class="second-slide" src="/images/carousel/carousel_2.jpg" alt="Second slide">
				          
				        </div>
				        <div class="item">
				          <img class="third-slide" src="/images/carousel/carousel_3.jpg" alt="Third slide">
				        </div>  
			      </div>
			      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-triangle-left " aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			      </a>
			      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			      </a>
			</div>
	

</div>

<div class="container white-bg">

<div class="row">
        <!--News Section Start-->
        

        <div class="col-lg-6 col-md-6 news_header">
    <h3>News</h3>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="demo1" style="overflow-y: hidden; height: 274px;">
                        <li class="news-item"> <a href="faculty-members-in-news#5">#</a>
                            <!--<span></span>-->
                        </li>
                        <li class="news-item"> <a href="faculty-members-in-news#4">#</a>
                            <!--<span></span>-->
                        </li>
                        <li class="news-item"> <a href="news#3">#</a>
                            <!--<span></span>-->
                        </li>
                        <li class="news-item"> <a href="student-news#2">#</a>
                            <!--<span></span>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-footer"><a href="/news" class="btn btn-primary">All News</a>
            <ul class="pagination pull-right" style="margin: 0px;">
                <li><a href="#" class="prev"><span class="glyphicon glyphicon-chevron-down"></span></a>
                </li>
                <li><a href="#" class="next"><span class="glyphicon glyphicon-chevron-up"></span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--News Section End-->
<!--Events Section Start-->
<div class="col-lg-6 col-md-6 events_header">
    <h3>Events</h3>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="demo1" style="overflow-y: hidden; height: 274px;">
                        <li class="news-item" style="display: list-item;"> <a target="_blank" href="/downloads/caas.pdf"> ####</a> <span> Dec 5 - 13 , 2016 </span> </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-footer"><a href="/events" class="btn btn-primary">All Events</a>
            <ul class="pagination pull-right" style="margin: 0px;">
                <li><a href="#" class="prev"><span class="glyphicon glyphicon-chevron-down"></span></a>
                </li>
                <li><a href="#" class="next"><span class="glyphicon glyphicon-chevron-up"></span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--Events Section End-->
</div>


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
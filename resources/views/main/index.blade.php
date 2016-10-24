@extends('layouts.app')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="/main/css/carousel.css">
<link href="{{URL::to('template/css/main.css')}}" rel="stylesheet" />

<style type="text/css">
    #nt-example1 li {
    color: black;
    background: white;
    overflow: hidden;
    padding:0;
    line-height: 30px;
    list-style: none;
    font-size: 16px;
    text-align: left;
    border-bottom: 1px dotted #2c8162;
}
</style>

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
				        <div class="item active">
				          <img class="first-slide" src="/main/images/carousel/carousel_1.jpg" alt="First slide">
				          
				        </div>
				        <div class="item">
				          <img class="second-slide" src="/main/images/carousel/carousel_2.jpg" alt="Second slide">
				          
				        </div>
				        <div class="item">
				          <img class="third-slide" src="/main/images/carousel/carousel_3.jpg" alt="Third slide">
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

<div class="container white-bg">

<div class="row">
        <!--News Section Start-->
        

    <div class="col-lg-6 col-md-6 news_header">
        <h3>News</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                    <div id="nt-example1-container">
                            <ul id="nt-example1" style="height: 240px; overflow: hidden;">
                               <li style="margin-top: 0px;">

                                    Etiam imperdiet volutpat libero eu tristique. Aenean, rutrum felis in. 

                                    <a href="#">Read more...</a>
                                    <div class="clearfix"></div>
                                </li>
                               <li style="margin-top: 0px;">Curabitur porttitor ante eget hendrerit adipiscing. Maecenas at magna. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Praesent ornare nisl lorem, ut condimentum lectus gravida ut. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Nunc ultrices tortor eu massa placerat posuere. Vivamus viverra sagittis. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Morbi sodales tellus sit amet leo congue bibendum. Ut non mauris eu neque. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">In pharetra suscipit orci sed viverra. Praesent at sollicitudin tortor, id. <a href="#">Read more...</a> </li>
                               <li style="margin-top: 0px;">Maecenas nec ligula sed est suscipit aliquet sed eget ipsum, suspendisse. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Onec bibendum consectetur diam, nec euismod urna venenatis eget.. <a href="#">Read more...</a> </li>
                            </ul>
                            
                    </div>

                </div>
                <div class="panel-footer"><a href="/news" class="btn btn-primary">All News</a>
                    <ul class="pagination pull-right" style="margin: 0px;">
                    <li id="nt-example1-prev"><a id="nt-example1-prev"><i class="fa fa-arrow-up" id="nt-example1-prev"></i></a></li>
                        <li id="nt-example1-next"><a ><i class="fa fa-arrow-down" id="nt-example1-next"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
<!--News Section End-->
<!--Events Section Start-->
<div class="col-lg-6 col-md-6 news_header">
        <h3>Events</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                    <div id="nt-example2-container">
                            <ul id="nt-example2" style="height: 240px; overflow: hidden;">
                               <li style="margin-top: 0px;">

                                    Etiam imperdiet volutpat libero eu tristique. Aenean, rutrum felis in. 

                                    <a href="#">Read more...</a>
                                    <div class="clearfix"></div>
                                </li>
                               <li style="margin-top: 0px;">Curabitur porttitor ante eget hendrerit adipiscing. Maecenas at magna. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Praesent ornare nisl lorem, ut condimentum lectus gravida ut. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Nunc ultrices tortor eu massa placerat posuere. Vivamus viverra sagittis. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Morbi sodales tellus sit amet leo congue bibendum. Ut non mauris eu neque. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">In pharetra suscipit orci sed viverra. Praesent at sollicitudin tortor, id. <a href="#">Read more...</a> </li>
                               <li style="margin-top: 0px;">Maecenas nec ligula sed est suscipit aliquet sed eget ipsum, suspendisse. <a href="#">Read more...</a></li>
                               <li style="margin-top: 0px;">Onec bibendum consectetur diam, nec euismod urna venenatis eget.. <a href="#">Read more...</a> </li>
                            </ul>
                            
                    </div>

                </div>
                <div class="panel-footer"><a href="/events" class="btn btn-primary">All Events</a>
                    <ul class="pagination pull-right" style="margin: 0px;">
                    <li id="nt-example1-prev"><a id="nt-example1-prev"><i class="fa fa-arrow-up" id="nt-example2-prev"></i></a></li>
                        <li id="nt-example2-next"><a ><i class="fa fa-arrow-down" id="nt-example1-next"></i></a></li>
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
<script src="{{URL::to('template/js/jquery.newsTicker.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $("marquee").hover(function () { 
                    this.stop();
                }, function () {
                    this.start();
                });


            var nt_title = $('#nt-title').newsTicker({
                row_height: 40,
                max_rows: 1,
                duration: 3000,
                pauseOnHover: 0
            });
            var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 3000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });
            var nt_example2 = $('#nt-example2').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 3000,
                prevButton: $('#nt-example2-prev'),
                nextButton: $('#nt-example2-next')
            });


        </script>


@endsection
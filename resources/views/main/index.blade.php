@extends('layouts.app')

@section('stylesheets')


<link rel="stylesheet" type="text/css" href="/main/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/main/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="/main/css/owl.transitions.css">
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

#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
    max-height: 600px;
}
</style>

@endsection

@section('content')
<div class="row">

        <div id="owl-demo" class="owl-carousel owl-theme">
 
          <div class="item"><img src="/main/images/carousel/carousel_1.jpg" alt="The Last of us"></div>
          
          <div class="item"><img src="/main/images/carousel/carousel_2.jpg" alt="Mirror Edge"></div>
            
        </div>

	

</div>

<div class="container">

<div class="row">
        <!--News Section Start-->
        

    <div class="col-lg-6 col-md-6 news_header">
        <h3>News</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                    <div id="nt-example1-container">
                            <ul id="nt-example1" style="height: 240px; overflow: hidden;">

                              @foreach($notices as $notice)
                               <li style="margin-top: 0px;">

                                    {{$notice->notice_message}}

                                    <a href="#">Read more...</a>
                                    <div class="clearfix"></div>
                                </li>
                              @endforeach
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
                               @foreach($events as $event)
                               <li style="margin-top: 0px;">

                                    {{$event->event_message}}

                                    <a href="#">Read more...</a>
                                    <div class="clearfix"></div>
                                </li>
                              @endforeach
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

            $(document).ready(function() {
             
              $("#owl-demo").owlCarousel({
                  transitionStyle : "fade",
                  autoPlay: 3000,
                  slideSpeed : 300,
                  pagination: false,
                  singleItem:true,
                  dots: false,
              });
            var owl = $("#owl-demo");

               // Custom Navigation Events
              $(".next").click(function(){
                owl.trigger('owl.next');
              })
              $(".prev").click(function(){
                owl.trigger('owl.prev');
              })
             
            });

        </script>

    <script type="text/javascript" src="/main/js/owl.carousel.min.js"></script>

@endsection
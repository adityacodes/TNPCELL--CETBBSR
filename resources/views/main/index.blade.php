@extends('layouts.app')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="/main/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/main/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="/main/css/owl.transitions.css">
<link href="{{URL::to('template/css/main.css')}}" rel="stylesheet" /> 
@endsection

@section('content')
    <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($sliders as $slider)
                <div class="item"><img src="{{public_path('uploads/slider/'.$slider->slider_image)}}"></div>
            @endforeach
        </div>
    </div>

    <div class="container">

        <div class="row">
            <!--News Section Start-->
            <div class="col-lg-6 col-md-6 news_header">
                <h3 class="text-center">NEWS</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="nt-example1-container">
                                <ul id="nt-example1" style="">

                                      @foreach($notices as $notice)
                                      <li class="m-t-0">

                                        {{$notice->notice_message}}

                                        <a href="{{ url('/news#').$notice->id }}">Read more...</a>
                                        <div class="clearfix"></div>
                                    </li>
                                    @endforeach
                                </ul>

                        </div>

                    </div>
                    <div class="panel-footer"><a href="/news" class="btn btn-primary">All News</a>
                        <ul class="pagination pull-right m-0">
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
                <h3 class="text-center">EVENTS</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="nt-example2-container">
                            <ul id="nt-example2">
                                 @foreach($events as $event)
                                 <li class="m-t-0">

                                        {{$event->event_message}}

                                        <a href="{{ url('/events#').$event->id }}">Read more...</a>
                                        <div class="clearfix"></div>
                                    </li>
                                    @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="panel-footer"><a href="/events" class="btn btn-primary">All Events</a>
                        <ul class="pagination pull-right m-0">
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
<script type="text/javascript" src="{{URL::to('main/js/main.js')}}"></script>
<script type="text/javascript" src="/main/js/owl.carousel.min.js"></script>

@endsection
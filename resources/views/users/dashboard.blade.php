
@extends('user')

@section('title', 'Notices')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-server"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Server Load</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-reload"></i> Updated now
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-wallet"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Notices</p>
                                {{$posts->total()}}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-calendar"></i> Last day
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 hidden-xs">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-pulse"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Errors</p>
                                23
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-timer"></i> In the last hour
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 hidden-xs">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="ti-twitter-alt"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Followers</p>
                                +45
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-reload"></i> Updated now
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @foreach ($posts as $post)
                <div class="card">

                    <div class="header">
                        <div class="icon-big icon-success col-md-2 col-xs-3">
                                <i class="ti-wallet"></i>
                                   
                        </div>
                        <h4 class="title" style="font-weight: bold;">{{strtoupper($post->title)}}</h4>
                        <p class="category">Notice created at {{$post->created_at}}</p>
                    </div>
                    
                    <div class="content">
                        
                        <h4><i style="font-weight: 400;" class="ti-pencil"></i>
                            
                                {{ substr($post->body,0,250) }}{{ strlen($post->body) > 50 ? "..." : ""}}
                            </h4>                        

                        <div class="footer">
                          <!--  <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                            </div>
                        -->
                            <div class="pull-right">
                                <a class="action" href="/notice/{{$post->slug}}"><button type="button" class="btn btn-sm btn-primary clearfix" >See More »</button></a>
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-timer"></i> Notice updated at {{$post->updated_at}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <div class="card">

                    <div class="header">
                        <h4 class="title text-center">GUIDELINES AND NOTICES</h4>
                        <hr>
                    </div>
                    
                    <div class="content" >

                        <div id="nt-example1-container">
                            <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
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
                                <i class="fa fa-arrow-down" id="nt-example1-next"></i>
                        </div>

                        
             <!--           <marquee  direction="up" behavior="scroll" style="height: 200px;">
                            <ul> 
                                <li>
                                        <a href="/">Hello</a>
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
                                </li>
                                <li>
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
                                </li>
                            </ul>
                        </marquee>                       
                -->
                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <i class="ti-timer"></i> Campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
            </div>
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

        <script>

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
        </script>

@endsection


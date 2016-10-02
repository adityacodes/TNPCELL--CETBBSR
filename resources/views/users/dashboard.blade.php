
@extends('user')

@section('title', 'Notices')

@section('content')

<div class="col-md-10">
    <div class="row">
        

        <div class="col-md-7">
            <div class="content-box-large"><h3>TOP 4 NOTICES</h3></div>
            @foreach ($posts as $post)
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-header">
                        <div class="panel-title">{{strtoupper($post->title)}}</div>
                        
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header panel-body">
                        <div class="col-md-12">
                            <div class="col-md-3 clearfix"><img src="http://placehold.it/100x100"></div>
                            <div class="col-md-9">{{ substr($post->body,0,250) }}{{ strlen($post->body) > 50 ? "..." : ""}}</div>
                            

                            <div class="clearfix"><br>
                                <a class="action" href="/notice/{{$post->slug}}"><button type="button" class="btn btn-sm btn-primary pull-right" >See More »</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

        <div class="col-md-5 hidden-xs">
                <div class="content-box-large">
            
                    <div class="panel-heading">
                        <div class="panel-title">GUIDELINES AND NOTICES</div>
                        
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                    <marquee direction="up" scrollamount="3">
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
                </div>
                </div>
            <div class="content-box-large">
            
                <div class="panel-heading">
                    <div class="panel-title">PLACEMENT COORDINATORS</div>
                    
                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body text-center">
                        <div class="col-md-12">
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p > BISWA BHAI</p>
                                        <strong> EE</strong>
                                 </div>
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p > DEBA BHAI</p>
                                        <strong> CE</strong>
                                 </div>
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p > AMRI BHAI</p>
                                        <strong> IT</strong>
                                 </div>
                        </div>
                        <div class="col-md-12 spacer3">
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p> PRATEEK BHAI</p>
                                        <strong> EE</strong>
                                 </div>
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p> ANKUSH BHAI</p>
                                        <strong> IE</strong>
                                 </div>
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p> DIBYA BHAI </p><br>
                                        <strong> BT</strong>
                                 </div>
                        </div>

                        <div class="col-md-12 spacer3">
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p> RISHI BHAI</p>
                                        <strong>CSE</strong>
                                 </div>
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                        <p> SAI BHAI</p>
                                        <strong>ME</strong>
                                 </div>
                                <div class="col-md-4">  
                                        <img src="" width="100" height="100">
                                 </div>
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

@endsection


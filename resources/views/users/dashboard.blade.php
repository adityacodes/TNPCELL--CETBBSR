
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
                    <div class="content-box-large box-with-header">
                        
                        {{ substr($post->body,0,250) }}{{ strlen($post->body) > 50 ? "..." : ""}}

                        <div class="clearfix">
                            <a class="action" href="/notice/{{$post->slug}}"><button type="button" class="btn btn-sm btn-primary pull-right" >See More »</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="col-md-5 hidden-xs">
            <div class="content-box-large">
            
                <div class="panel-heading">
                    <div class="panel-title">PLACEMENT COORDINATORS</div>
                    
                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                <h5>
                    Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
                    <br /><br />
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
                    <br /><br />
                </h5>
                </div>
            </div>
            <div class="content-box-large">
            
                <div class="panel-heading">
                    <div class="panel-title">New vs Returning Visitors</div>
                    
                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                <h5>
                    <br /><br />
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
                    <br /><br />
                </h5>
                </div>
            </div>
            
        </div>






    </div>

</div>
@endsection


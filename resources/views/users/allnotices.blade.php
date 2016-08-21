
@extends('user')

@section('title', 'Notices')

@section('content')

<div class="col-md-8">
    <div class="row">
        

        <div class="col-md-12">
            <div class="content-box-large"><h3>ALL NOTICES</h3></div>
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

                        
                        <a class="action" href="/notice/{{$post->slug}}"><button type="button" class="btn btn-sm btn-primary pull-right" >See More »</button></a>
                    </div>
                </div>
            </div>
            @endforeach
                 <div class="text-center">
                {!! $posts->render() !!}
            </div>

            
        </div>

    </div>

</div>
@endsection


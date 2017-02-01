
@extends('user')

@section('title', 'Notices')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <!-- Title here -->
                    <h4 class="title">ALL NOTICES</h4>
                    <hr>
                </div>          
                <div class="content" >              
                    <!-- Content goes here -->
                        @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <!-- Title here -->
                                        <h4 class="title">{{strtoupper($post->title)}}</h4>
                                        <hr>
                                    </div>          
                                    <div class="content" >              
                                        <!-- Content goes here -->

                                        {{ substr($post->body,0,250) }}{{ strlen($post->body) > 50 ? "..." : ""}}
                                        <div class="clearfix"></div>

                                        <a class="action" href="{{url('/notice')}}/{{$post->slug}}"><button type="button" class="btn btn-sm btn-primary pull-right" >See More »</button></a>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                     <div class="text-center">
                        {!! $posts->render() !!}
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

@endsection


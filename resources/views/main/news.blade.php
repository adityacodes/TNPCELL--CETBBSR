@extends('layouts.app')

@section('content')
	
<div class="container">
    <div class="col-lg-12 m-t-15">

            @foreach($notices as $notice)
                <div class="card">
                    <div class="content">
                        <a href="#{{$notice->id}}" id="{{$notice->id}}"><h4 class="title">{{$notice->notice_subject}}</h4></a>
                        <p class="description">
                            {{$notice->notice_message}}
                        </p>
                    </div>
                </div>
                <br/>
            @endforeach

	</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
</script>
@endsection
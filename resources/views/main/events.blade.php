@extends('layouts.app')

@section('content')
	
<div class="container">
    <div class="col-lg-12 m-t-15">

            @foreach($events as $event)
                <div class="card">
                    <div class="content">
                        <a href="#{{$event->id}}" id="{{$event->id}}"><h4 class="title">{{$event->event_subject}}</h4></a>
                        <p class="description">
                            {{$event->event_message}}
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
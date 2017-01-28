@extends('layouts.app')

@section('content')
	
<div class="container">
	<div class="row clearfix">
		<div class="text-center"><strong style="font-size: 40px;">FESTS</strong></div>
        @foreach($fests as $fest)
            <div class="col-lg-3 col-sm-6 text-center spacing">  
                <div class="card adityacard">
                    <div class="content">
                        <a href="{{ $fest->fest_website }}" target="_blank">
                            <img class="img-circle img-responsive img-center" src="uploads/fest/{{$fest->fest_image}}" alt="">
                            <hr>
                            <h3>{{$fest->fest_name}}</h3>
                        </a>
                    </div>
                </div> 
            </div>
        @endforeach
		
	</div>
</div>







@endsection
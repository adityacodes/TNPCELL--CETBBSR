@extends('layouts.app')

@section('stylesheets')

<style type="text/css">
	.img-center {
		margin: 0 auto;
		width: 200px;
		height: 200px;
	}
	p{
		font-weight: bold;
	}
</style>

@endsection

@section('content')

<!-- Team Members Row -->
        <div class="row">
            <div class="text-center"><strong style="font-size: 40px;">PLACEMENT OFFICE</strong></div>

            <div class="container">

                

                @foreach($officers as $officer)
                    <div class="col-lg-3 col-sm-6 text-center spacing">  
                        <div class="card adityacard">
                            <div class="content">
                                <a href="{{$officer->officer_website}}" target="_blank">
                                    <img class="img-circle img-responsive img-center" src="uploads/officer/{{$officer->officer_image}}" alt="">
                                    <h3>{{$officer->officer_name}}</h3>
                                    <strong>{{$officer->officer_desig}}</strong>
                                    
                                </a>
                            </div>
                        </div> 
                    </div>
                @endforeach

            </div>
		</div>



@endsection
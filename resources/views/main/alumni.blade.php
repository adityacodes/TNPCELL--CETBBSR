@extends('layouts.app')


@section('stylesheets')

<style type="text/css">
	
</style>

@endsection

@section('content')


<!-- Team Members Row -->
        <div class="row mainbody">
            <div class="text-center"><strong style="font-size: 40px;">OUR DISTINGUISHED ALUMNI</strong></div>
            
            <div class="container">

                

                @foreach($alumnis as $alumni)
                    <div class="col-lg-3 col-sm-6 text-center spacing">  
                        <div class="card adityacard">
                            <div class="content">
                                <a href="{{$alumni->alumni_website}}" target="_blank">
                                    <img class="img-circle img-responsive img-center" src="uploads/alumni/{{$alumni->alumni_image}}" alt="">
                                    <h3>{{$alumni->alumni_name}}</h3>
                                    <strong>{{$alumni->alumni_desig}}</strong>
                                    
                                    <p>{{$alumni->alumni_company}}</p>
                                </a>
                            </div>
                        </div> 
                    </div>
                @endforeach
            </div>
            
        </div>





@endsection


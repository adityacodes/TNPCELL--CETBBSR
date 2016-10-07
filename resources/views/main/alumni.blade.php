@extends('layouts.app')


@section('stylesheets')

<style type="text/css">
	
</style>

@endsection

@section('content')


<!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12 text-center" style="font-family: font1;padding: 10px;"t><h1><u>{{strtoupper(Request::path() )}}</u></h1></div>
            <div class="border" style=""></div>
            

        @foreach($alumnis as $alumni)
            <div class="col-lg-3 col-sm-6 text-center spacing">  
                <div class="bg_box">
                    <a href="{{$alumni->alumni_website}}" target="_blank">
                        <img class="img-circle img-responsive img-center" src="{{$alumni->alumni_image}}" alt="">
                        <h3>{{$alumni->alumni_name}}</h3>
                        <strong>{{$alumni->alumni_desig}}</strong>
                        
                        <p>{{$alumni->alumni_company}}</p>
                    </a>
                </div> 
            </div>
        @endforeach
            
            
        </div>





@endsection


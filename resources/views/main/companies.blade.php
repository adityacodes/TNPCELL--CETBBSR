@extends('layouts.app')

@section('content')


<!-- Team Members Row -->
        <div class="row mainbody">
            <div class="col-lg-12 col-xs-12 text-center" style="font-family: font1;padding: 10px; ">
            	<h1><strong style="font-size: 50px;">COMPANIES</strong></h1>
           	</div>
            <div class="border" style=""></div>

            <div class="text-center"><strong style="font-size: 40px;">MASS RECRUITERS</strong></div>
        <div class="col-lg-12"> 
            @foreach($companies as $company)
            	@if($company->company_massrecruiter == 1)
	            <div class="col-lg-6 col-sm-6 text-center spacing">
	                
	                <div class="bg_box">
	                    <a href="{{ $company->company_website }}" target="_blank">
	                        <img class="img-responsive img-center" src="{{ $company->company_image }}" alt="">
	                    </a>
	                </div>
	            </div>
	            @endif

            @endforeach
        </div>


            <div class="text-center"><strong style="font-size: 40px;">RECRUITERS</strong></div>

           <div id="{{ shuffle($companies)}}"></div> 
            	@foreach($companies as $company)
		            <div class="col-lg-2 col-sm-6 text-center spacing">  
		                <div class="bg_box">
		                    <a href="{{ $company->company_website }}" target="_blank">
		                        <img class="img-responsive img-center" src="{{ $company->company_image }}" alt="">
		                    </a>
		                </div>
		            </div>
		        @endforeach

        </div>


@endsection
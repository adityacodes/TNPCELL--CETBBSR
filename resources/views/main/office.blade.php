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
            <div class="col-lg-12 text-center" style="font-family: font1;padding: 10px;"t><h1><u>OFFICE</u></h1></div>
            <div class="border" style=""></div>
            <div class="col-lg-12 col-sm-12 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Dr. R.K. Das</h3>
                <p>Coordinator</p>
            </div>
            <div class="col-lg-6 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Dr. S.K. Pradhan</h3>
                <p>Prof. In Charge</p>
            </div>
            <div class="col-lg-6 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Dr. B.P. Das</h3>
                <p>Member</p>
            </div>
		</div>



@endsection
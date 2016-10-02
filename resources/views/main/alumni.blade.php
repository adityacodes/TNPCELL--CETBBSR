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
            


            <div class="col-lg-3 col-sm-6 text-center spacing">  
                <div class="bg_box">
                    <a href="abc.jpg" target="_blank">
                        <img class="img-circle img-responsive img-center" src="/main/images/alumni/allumini7.jpg" alt="">
                        <h3>Sidharth Nanda</h3>
                        <strong>Digital Media Manager</strong>
                        
                        <p>Google</p>
                    </a>
                </div> 
            </div>
            
            <div class="col-lg-3 col-sm-6 text-center spacing">
                <div class="bg_box">
                    <img class="img-circle img-responsive img-center" src="/main/images/alumni/allumini7.jpg" alt="">
                    <h3>Sidharth Nanda</h3>
                    <strong>Digital Media Manager</strong>
                    
                    <p>Google</p>

                </div>
                
            </div>
            
            
        </div>





@endsection


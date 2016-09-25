@extends('layouts.app')

@section('content')

<div class="row" style="background-color:#ececec;">
          <br>
          <div class="col-lg-12">
              <h2 style="color:#08387f; word-wrap:wrap-text;">From The {{strtoupper($slug)}}'s Desk</h2>
              <hr class="col-lg-5" style="height:2px;border-color:#08387f;background-color:#0fa5d9;">
          </div>
          <div class="col-lg-12">
              <div class="col-lg-6">
                  <a href="#" class="thumbnail">
                    <img src="{{ $settings[$slug.'_image'] }}" style="width:400px;height:400px;" alt="The {{ucfirst($slug)}}">
                  </a>
                  <p class="text-capitalize" style="margin-top: 80px;font-weight: bold;font-size: 16px;color:#08387f;font-weight:bold;">
                  {{ $settings[$slug.'_name'] }} 
                  <br>{{strtoupper($slug)}}
                  <br>College Of Engineering &amp; Technology

                  </p>
              </div>
              <div class="well well-lg col-lg-6" style="-webkit-box-shadow: 1px 1px 5px 0px rgba(50, 50, 50, 1);font-family:font1;font-size:16px;padding:10px 10px 10px 10px;color:#000; letter-spacing: 1px; word-spacing: 3px;">
                      {{ $settings[$slug.'_message'] }} 
              </div>
          </div>
    </div>


@endsection
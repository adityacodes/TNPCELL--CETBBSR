@extends('layouts.app')

@section('stylesheets')

<style type="text/css">
.video-container {
position: relative;
padding-bottom: 56.25%;
padding-top: 30px; height: 0; overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
</style>


@endsection


@section('content')

<div class="container">
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-6">
			<div class="card card-user">
                <div class="content">
                    <div class="author">
                    	<div class="clearfix"></div>
                      <img src="{{asset('/main/images/140cet.jpg')}}" alt="...">
                      <h4 class="title">College Of Engineering And Technology, Bhubaneswar<br>
                         <a target="_blank" href="https://www.google.co.in/search?q=%40cetbbsr"><small>@cetbbsr</small></a>
                      </h4>

                    </div>
                    <!-- <p class="description text-center">
                        "I like the way you work it <br>
                        No diggity <br>
                        I wanna bag it up"
                    </p> -->

                </div>
                <hr>
            </div>
            <div class="card">
            	<div class="content">
            		<h4 class="title">An Institute Of Excellence</h4>
            		<p class="description">
            			The constant endevour to surpass the orthodox paradigmsin engineering since 1981 distinguishes CET-B from the rest.CET-B has set many benchmarks in academics, research, internships, placements and now the pursuit of quality has become a never ending journey.
            		</p>
            	</div>
            </div>

            <div class="card adityacard">
            	<div class="content">
            		<h4 class="title">Culture Of Alma Mater</h4>
            		<p class="description">
            			The constant endevour to surpass the orthodox paradigmsin engineering since 1981 distinguishes CET-B from the rest.CET-B has set many benchmarks in academics, research, internships, placements and now the pursuit of quality has become a never ending journey.
            		</p>
            	</div>
            </div>
			


		</div>
		<div class="col-md-6">
			
			<div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/SclBnR8jjIs" frameborder="0" allowfullscreen></iframe></div>

			<div class="card adityacard">
            	<div class="content">
            		<h4 class="title">An Institute Of Excellence</h4>
            		<p class="description">
            			The constant endevour to surpass the orthodox paradigmsin engineering since 1981 distinguishes CET-B from the rest.CET-B has set many benchmarks in academics, research, internships, placements and now the pursuit of quality has become a never ending journey.
            		</p>
            	</div>
            </div>
            <div class="card adityacard">
            	<div class="content">
            		<h4 class="title">Culture Of Alma Mater</h4>
            		<p class="description">
            			The constant endevour to surpass the orthodox paradigmsin engineering since 1981 distinguishes CET-B from the rest.CET-B has set many benchmarks in academics, research, internships, placements and now the pursuit of quality has become a never ending journey.
            		</p>
            	</div>
            </div>
		</div>
		
	</div>

</div>
@endsection
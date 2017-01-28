 @extends('user')

@section('title','Show Slider')

@section('content')

	<div class="row">
        <div class="card">
                @include('partials._settingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <div class="header">
		                        <h3 class="title"><strong>SLIDER DETAILS</strong></h3>
		                        <hr>
		                    </div>
		                    
		                    <div class="content" >
		                        <h4 >
		                        	<table class="table table-hover table-bordered" >
		                                <tbody>
		                                	<tr>
		                                		<th>Sl. No.</th>
		                                		<th>Table Attributes</th>
		                                		<th colspan="2">Table Values</th>	
		                                	</tr>
		                                    <tr>
		                                        <td>1</td>
		                                        <td>Slider ID: </td>
		                                        <td colspan="2">{{ $slider->id }}</td>
		                                    </tr>
		                                    <tr>
		                                        <td>2</td>
		                                        <td>Slider Image: </td>
		                                        <td colspan="2"><img width="300" height="150" src="/uploads/slider/{{ $slider->slider_image }}"></td>
		                                    </tr>
						                </tbody>
						            </table>
								</h4>                     

		                        <div class="footer">
		                            <hr>
		                            <div class="stats">
		                                <i class="ti-timer"></i> Slider will be shown in main page after this.
		                            </div>
		                        </div>
		                    </div>
		            </div>
	            </div>

	            <div class="col-md-4" >
	            	<div class="card">

	                    <div class="header">
	                        <h4>SLIDER CHANGES:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($slider->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($slider->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.slider.edit', $slider->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> EDIT</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.slider.destroy', $slider->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> DELETE</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.slider.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> SEE ALL SLIDERS</button>
			            		</a>
			            	</div>                  

	                        <div class="footer">
	                            <hr>
	                            <div class="stats">
	                                <i class="ti-timer"></i> Campaign sent 2 days ago
	                            </div>
	                        </div>
	                    </div>
	            	</div>
	            </div>
			</div>
		</div>
	</div>
@endsection
 @extends('user')

@section('title',' Create New Slider')

@section('content')
    <div class="row">
        <div class="card">
                @include('partials._settingsnav')

                <div class="col-lg-12">
               		 <div class="card tab-content">  
			    		<div class="header">
			                <div class="icon-big icon-success col-md-1 col-xs-3">
			                        <i class="ti-pencil"></i>
			                           
			                </div>
			                <h4 class="title" style="font-weight: bold;">CREATE NEW SLIDER
								<button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.slider.index") }}'">Cancel</button>
			                </h4>
			                <p class="category">----</p>
			            </div>
                 
		                <div class="content">
		                	<h4>
					    	{!! Form::open(array('route' => 'admin.slider.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'autocomplete' => 'off')) !!}

						            	<div class="form-group">
								    		<label class="col-md-2 control-label" for="notice_message">Slider Image :</label>
								    		<div class="col-lg-10">
								    			{!! Form::file('slider_image', null, array('class' => 'form-control border-input', 'id' => 'slider_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
					                    <div class="form-group">
						                    {!! Form::submit('Create Slider', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
				    	</div>
				    </div>
				</div>                     
        </div>
	</div>


@endsection

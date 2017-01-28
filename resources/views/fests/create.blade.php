 @extends('user')

@section('title',' Create New fest')

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
			                <h4 class="title" style="font-weight: bold;">CREATE NEW fest
								<button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.fest.index") }}'">CANCEL</button>
			                </h4>
			                <p class="category">Items marked <sup class="required">*</sup> are required.</p>
			            </div>
                 
		                <div class="content">
		                	<h4>
					    	{!! Form::open(array('route' => 'admin.fest.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off')) !!}
						            	<div class="form-group">
								    		<label class="col-md-3 control-label" for="fest_message">Fest Name :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('fest_name', null, array('class' => 'form-control border-input', 'id' => 'fest_name', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
						            	<div class="form-group">
								    		<label class="col-md-3 control-label" for="fest_message">Fest Website :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('fest_website', null, array('class' => 'form-control border-input', 'id' => 'fest_website', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_image">Fest Image:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::file('fest_image', null, array('class' => 'form-control border-input', 'id' => 'fest_file', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
					                    <div class="form-group">
						                    {!! Form::submit('Create fest', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
				    	</div>
				    </div>
				</div>                     
        </div>
	</div>


@endsection

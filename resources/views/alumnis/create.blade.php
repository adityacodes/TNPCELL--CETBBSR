@extends('user')

@section('title',' Create New Alumni')

@section('stylesheets')
<style>
	label{
		font-weight: bold;
	}
</style>
@endsection


@section('content')
    <div class="row">
    	<div class="card">
    		<div class="header">
                <div class="icon-big icon-success col-md-1 col-xs-3">
                        <i class="ti-pencil"></i>
                           
                </div>
                <h4 class="title" style="font-weight: bold;">CREATE NEW ALUMNI</h4>
                <p class="category">----</p>
            </div>
                 
                <div class="content">
                <h4>
			    	{!! Form::open(array('route' => 'admin.alumni.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
			                    <div class="form-group">
			                    	<div class="col-md-2">
						    			<label class="control-label pull-right" for="title">Name:</label>
						    		</div>
						    		<div class="col-md-6">
						    			{!! Form::text('alumni_name', null, array('class' => 'form-control border-input', 'id' => 'alumni_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="alumni_image">Alumni Image:</label>
						    		<div class="col-lg-4">
						    			{!! Form::file('alumni_image', null, array('class' => 'form-control border-input', 'id' => 'alumni_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="alumni_desig">Alumni Designation</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('alumni_desig', null, array('class' => 'form-control border-input', 'id' => 'alumni_desig', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="alumni_company">Alumni Company</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('alumni_company', null, array('class' => 'form-control border-input', 'id' => 'alumni_company', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="alumni_website">Alumni Website:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('alumni_website', null, array('class' => 'form-control border-input', 'id' => 'alumni_website', 'placeholder' => 'Enter value here' )) !!}
						    		</div>
						    	</div>
						    	
			                    <div class="form-group">
				                    {!! Form::submit('Create Alumni', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
				                </div>
					{!! Form::close() !!}
					</h4>
		    	</div>                     
		    
		    <div class="footer"></div>
        </div>
	</div>


@endsection

@section('scripts')

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>
@endsection

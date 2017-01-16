@extends('user')

@section('title',' Create New tnpuser')

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
                @include('partials._tnpsettingsnav')

                <div class="col-lg-12">
               		 <div class="card tab-content">  
			    		<div class="header">
			                <div class="icon-big icon-success col-md-1 col-xs-3">
			                        <i class="ti-pencil"></i>
			                           
			                </div>
			                <h4 class="title" style="font-weight: bold;">CREATE NEW Tnp User</h4>

			                <button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.tnpuser.index") }}'">Cancel</button>
			                <p class="category">----</p>
			            </div>
		                 
		                <div class="content">
		                <h4>
					    	{!! Form::open(array('route' => 'admin.tnpuser.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
					                    <div class="form-group">
					                    	<div class="col-md-2">
								    			<label class="control-label pull-right" for="title">Name:</label>
								    		</div>
								    		<div class="col-md-6">
								    			{!! Form::text('name', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="regdno">tnpuser Image:</label>
								    		<div class="col-lg-4">
								    			{!! Form::file('regdno', null, array('class' => 'form-control border-input', 'id' => 'regdno', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="branch">tnpuser Designation</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('branch', null, array('class' => 'form-control border-input', 'id' => 'branch', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="cgpa">tnpuser Company</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('cgpa', null, array('class' => 'form-control border-input', 'id' => 'cgpa', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div><!-- 
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tnpuser_website">tnpuser Website:</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tnpuser_website', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_website', 'placeholder' => 'Enter value here' )) !!}
								    		</div>
								    	</div> -->
								    	
					                    <div class="form-group">
						                    {!! Form::submit('Create TNP User', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
			    		</div> 
			    	  </div>
		    	</div>                    
		    
		    <div class="footer"></div>
        </div>
	</div>


@endsection

@section('scripts')

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>
@endsection

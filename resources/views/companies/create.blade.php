@extends('user')

@section('title',' Create New Company')

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
			                <h4 class="title" style="font-weight: bold;">CREATE NEW COMPANY</h4>

			                <button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.company.index") }}'">Cancel</button>
			                <p class="category">Items marked <sup class="required">*</sup> are required.</p>
			            </div>
		                 
		                <div class="content">
		                <h4>
					    	{!! Form::open(array('route' => 'admin.company.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
					                    <div class="form-group">
					                    	<div class="col-md-3">
								    			<label class="control-label pull-right" for="title">Company Name:<sup class="required">*</sup></label>
								    		</div>
								    		<div class="col-md-4">
								    			{!! Form::text('company_name', null, array('class' => 'form-control border-input', 'id' => 'company_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_image">Company Image:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::file('company_image', null, array('class' => 'form-control border-input', 'id' => 'company_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_website">Company Website URL:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('company_website', null, array('class' => 'form-control border-input', 'id' => 'company_website', 'placeholder' => 'Enter value here' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_description">Company Description:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('company_description', null, array('class' => 'form-control border-input', 'id' => 'company_description', 'placeholder' => 'Enter Company Description', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_description">Is the Company Massrecruiter?<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::select('company_massrecruiter',['0' => 'NO', '1' => 'YES'] ,'0', array('class' => 'form-control border-input', 'id' => 'company_description', 'placeholder' => 'Fill 1 for yes.', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
					                    <div class="form-group">
						                    {!! Form::submit('Create Company', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
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

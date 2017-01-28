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
			                <p class="category">Items marked <sup class="required">*</sup> are required.</p>
			            </div>
		                 
		                <div class="content">
		                <h4>
					    	{!! Form::open(array('route' => 'admin.tnpuser.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
					                    <div class="form-group">
					                    	<div class="col-lg-3">
								    			<label class="control-label pull-right" for="title">Student Name:</label>
								    		</div>
								    		<div class="col-lg-4">
								    			{!! Form::text('name', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="email">Email :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('email', null, array('class' => 'form-control border-input', 'id' => 'email', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="regdno">Registration No.:</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('regdno', null, array('class' => 'form-control border-input', 'id' => 'regdno', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="branch">Branch</label>
								    		<div class="col-lg-4">
								    			{!! Form::select('branch', $branches, null, array('class' => 'form-control border-input', 'id' => 'branch', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="dob">Date Of Birth :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('dob', null, array('class' => 'form-control border-input', 'id' => 'dob', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="gender">Gender :</label>
								    		<div class="col-lg-4">
								    			{!! Form::select('gender', ['M' => 'Male', 'F' => 'Female', 'O' => 'Other'], null, array('class' => 'form-control border-input', 'id' => 'dob', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tenthyear">Tenth Year :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tenthyear', null, array('class' => 'form-control border-input', 'id' => 'tenthyear', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tenthpercentage">Tenth Percentage :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tenthpercentage', null, array('class' => 'form-control border-input', 'id' => 'tenthpercentage', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tenthboard">Tenth Board :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tenthboard', null, array('class' => 'form-control border-input', 'id' => 'tenthboard', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="twelthyear">Twelth Year :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('twelthyear', null, array('class' => 'form-control border-input', 'id' => 'twelthyear', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="twelthpercentage">Twelth Percentage :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('twelthpercentage', null, array('class' => 'form-control border-input', 'id' => 'twelthpercentage', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="twelthboard">Twelth Board :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('twelthboard', null, array('class' => 'form-control border-input', 'id' => 'twelthboard', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="diplomayear">Diploma Year :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('diplomayear', null, array('class' => 'form-control border-input', 'id' => 'diplomayear', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="diplomapercentage">Diploma Percentage :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('diplomapercentage', null, array('class' => 'form-control border-input', 'id' => 'diplomapercentage', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="diplomaboard">Diploma Board :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('diplomaboard', null, array('class' => 'form-control border-input', 'id' => 'diplomaboard', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="cgpa">CGPA :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('cgpa', null, array('class' => 'form-control border-input', 'id' => 'cgpa', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="backlog">Active Backlog :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('backlog', null, array('class' => 'form-control border-input', 'id' => 'backlog', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="paddress">Present Address :</label>
								    		<div class="col-lg-4">
								    			{!! Form::textarea('paddress', null, array('class' => 'form-control border-input', 'id' => 'paddress', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="praddress">Permanent Address :</label>
								    		<div class="col-lg-4">
								    			{!! Form::textarea('praddress', null, array('class' => 'form-control border-input', 'id' => 'praddress', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="fname">Fathers Name :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('fname', null, array('class' => 'form-control border-input', 'id' => 'fname', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="foccupation">Fathers Occupation :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('foccupation', null, array('class' => 'form-control border-input', 'id' => 'foccupation', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="mname">Mothers Name :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('mname', null, array('class' => 'form-control border-input', 'id' => 'mname', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="moccupation">Mothers Occupation :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('moccupation', null, array('class' => 'form-control border-input', 'id' => 'moccupation', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="rname">Relatives Name :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('rname', null, array('class' => 'form-control border-input', 'id' => 'rname', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="roccupation">Relatives Occupation :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('roccupation', null, array('class' => 'form-control border-input', 'id' => 'roccupation', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="internships">Internships :</label>
								    		<div class="col-lg-4">
								    			{!! Form::textarea('internships', null, array('class' => 'form-control border-input', 'id' => 'internships', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

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

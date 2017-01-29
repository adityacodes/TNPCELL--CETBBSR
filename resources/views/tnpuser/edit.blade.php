@extends('user')

@section('title','Edit TNP U<sup class="required">*</sup>ser')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._tnpsettingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">       
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($tnpuser, ['route' => ['admin.tnpuser.update', $tnpuser->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '' , 'files' => 'true', 'autocomplete' => 'off']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="header">
								        <div class="panel-title">
								        	<h3 class="pull-left"><b>Edit TNP User</b></h3>
								        </div>
								        <div class="clearfix"></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
					                    	<div class="col-lg-3">
								    			<label class="control-label pull-right" for="title">Student Name:<sup class="required">*</sup></label>
								    		</div>
								    		<div class="col-lg-4">
								    			{!! Form::text('name', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>


								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="email">Email :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('email', null, array('class' => 'form-control border-input', 'id' => 'email', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="regdno">Registration No.:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('regdno', null, array('class' => 'form-control border-input', 'id' => 'regdno', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="branch">Branch<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::select('branch', $branches, null, array('class' => 'form-control border-input', 'id' => 'branch', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="dob">Date Of Birth :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('dob', null, array('class' => 'form-control border-input', 'id' => 'dob', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="gender">Gender :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::select('gender', ['M' => 'Male', 'F' => 'Female', 'O' => 'Other'], null, array('class' => 'form-control border-input', 'id' => 'dob', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tenthyear">Tenth Year :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tenthyear', null, array('class' => 'form-control border-input', 'id' => 'tenthyear', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tenthpercent">Tenth Percentage :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tenthpercent', null, array('class' => 'form-control border-input', 'id' => 'tenthpercent', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tenthboard">Tenth Board :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tenthboard', null, array('class' => 'form-control border-input', 'id' => 'tenthboard', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="twelthyear">Twelth Year :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('twelthyear', null, array('class' => 'form-control border-input', 'id' => 'twelthyear', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="twelthpercent">Twelth Percentage :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('twelthpercent', null, array('class' => 'form-control border-input', 'id' => 'twelthpercent', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="twelthboard">Twelth Board :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('twelthboard', null, array('class' => 'form-control border-input', 'id' => 'twelthboard', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="diplomayear">Diploma Year :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('diplomayear', null, array('class' => 'form-control border-input', 'id' => 'diplomayear', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="diplomapercent">Diploma Percentage :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('diplomapercent', null, array('class' => 'form-control border-input', 'id' => 'diplomapercent', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="diplomaboard">Diploma Board :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('diplomaboard', null, array('class' => 'form-control border-input', 'id' => 'diplomaboard', 'placeholder' => 'Enter value here ' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="cgpa">CGPA :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('cgpa', null, array('class' => 'form-control border-input', 'id' => 'cgpa', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="backlog">Active Backlog :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('backlog', null, array('class' => 'form-control border-input', 'id' => 'backlog', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="paddress">Present Address :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::textarea('paddress', null, array('class' => 'form-control border-input', 'id' => 'paddress', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="praddress">Permanent Address :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::textarea('praddress', null, array('class' => 'form-control border-input', 'id' => 'praddress', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="fname">Fathers Name :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('fname', null, array('class' => 'form-control border-input', 'id' => 'fname', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="foccupation">Fathers Occupation :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('foccupation', null, array('class' => 'form-control border-input', 'id' => 'foccupation', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="mname">Mothers Name :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('mname', null, array('class' => 'form-control border-input', 'id' => 'mname', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="moccupation">Mothers Occupation :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('moccupation', null, array('class' => 'form-control border-input', 'id' => 'moccupation', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="rname">Relatives Name :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('rname', null, array('class' => 'form-control border-input', 'id' => 'rname', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="roccupation">Relatives Occupation :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('roccupation', null, array('class' => 'form-control border-input', 'id' => 'roccupation', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="internships">Internships :<sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::textarea('internships', null, array('class' => 'form-control border-input', 'id' => 'internships', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
						            </div>
						    </div>

						    <div class="col-md-4">
						        
						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>STATUS</b></h3></div>
								    </div>
						            <div class="content-box-large box-with-header">

						            	<div class="well">
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($tnpuser->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($tnpuser->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.tnpuser.index', 'Cancel', array($tnpuser->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
							            	{!! Form::submit('Update', array('class' => 'btn btn-success btn-block', 'id' => 'submit'  ))  !!}
						            	</div>

						            </div>    
						    </div>
						    {!! Form::close() !!}
			   			</fieldset>
						<div class="clearfix"></div>
				    </div>
				</div>
		    </div>
	    </div>
</div>



@endsection


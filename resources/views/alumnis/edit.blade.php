@extends('user')

@section('title','Edit Alumni')

@section('content')
<div class="row">
    <div class="col-lg-12">

    	<div class="card">
		    <div class="header">
		    	<!-- Title here -->
		        <h4 class="title">Choose Alumni :</h4>
		        <hr>
		    </div>          
		    <div class="content" >              
		    	<!-- Content goes here -->
		    	<fieldset>
    	{!! Form::model($alumni, ['route' => ['admin.alumni.update', $alumni->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '' , 'files' => 'true']) !!}
    	
	    <div class="col-md-8">
	        

	            <div class="content-box-header">
			        <div class="panel-title"><h3><b>ALUMNI RELATIONS</b></h3></div>
			    </div>

	            <div class="content-box-large box-with-header">
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
	            </div>
	    </div>

	    <div class="col-md-4">
	        
	            <div class="content-box-header">
			        <div class="panel-title"><h3><b>STATUS</b></h3></div>
			    </div>
	            <div class="content-box-large box-with-header">

	            	<div class="well">
	            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($alumni->created_at)) }}</p><br/>
	            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($alumni->updated_at)) }}</p><br/>

	            	</div>

	            	<div>
	            		{!! Html::linkRoute('admin.alumni.index', 'Cancel', array($alumni->id), array('class' =>'btn btn-primary btn-block')) !!}
	            		
		            	{!! Form::submit('Update', array('class' => 'btn btn-success btn-block', 'id' => 'submit'  ))  !!}
	            	</div>

	            </div>
	        
	    </div>
	    </fieldset>
	    {!! Form::close() !!}

				<div class="clearfix"></div>
		    </div>
		</div>
    

    </div>
</div>



@endsection


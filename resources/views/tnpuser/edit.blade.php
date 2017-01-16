@extends('user')

@section('title','Edit tnpuser')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._tnpsettingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">       
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($tnpuser, ['route' => ['admin.tnpuser.update', $tnpuser->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '' , 'files' => 'true']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="header">
								        <div class="panel-title">
								        	<h3 class="pull-left"><b>Edit tnpuser</b></h3>
								        </div>
								        <div class="clearfix"></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
					                    	<div class="col-md-2">
								    			<label class="control-label pull-right" for="title">Name:</label>
								    		</div>
								    		<div class="col-md-6">
								    			{!! Form::text('name', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="regdno">tnpuser Regd No:</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('regdno', null, array('class' => 'form-control border-input', 'id' => 'regdno', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="branch">tnpuser Designation</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('branch', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_desig', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="cgpa">tnpuser Company</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('cgpa', null, array('class' => 'form-control border-input', 'id' => 'cgpa', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="tnpuser_website">tnpuser Website:</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('tnpuser_website', null, array('class' => 'form-control border-input', 'id' => 'tnpuser_website', 'placeholder' => 'Enter value here' )) !!}
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


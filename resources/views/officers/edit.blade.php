@extends('user')

@section('title','Edit officer')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">       
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($officer, ['route' => ['admin.officer.update', $officer->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '' , 'files' => 'true', 'autocomplete' => 'off']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="header">
								        <div class="panel-title">
								        	<h3 class="pull-left"><b>Edit Officer</b></h3>
								        </div>
								        <div class="clearfix"></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
					                    	<div class="col-md-2">
								    			<label class="control-label pull-right" for="title">Officer Name:<sup class="required">*</sup></label>
								    		</div>
								    		<div class="col-md-6">
								    			{!! Form::text('officer_name', null, array('class' => 'form-control border-input', 'id' => 'officer_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="officer_image">Officer Image: <sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::file('officer_image', null, array('class' => 'form-control border-input', 'id' => 'officer_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="officer_desig">Officer Designation: <sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('officer_desig', null, array('class' => 'form-control border-input', 'id' => 'officer_desig', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="officer_website">Officer Website: <sup class="required">*</sup></label>
								    		<div class="col-lg-4">
								    			{!! Form::text('officer_website', null, array('class' => 'form-control border-input', 'id' => 'officer_website', 'placeholder' => 'Enter value here' )) !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($officer->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($officer->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.officer.index', 'Cancel', array($officer->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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


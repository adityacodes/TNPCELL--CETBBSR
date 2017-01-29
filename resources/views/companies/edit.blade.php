@extends('user')

@section('title','Edit Company')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">       
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($company, ['route' => ['admin.company.update', $company->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '' , 'files' => 'true', 'autocomplete' => 'off']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="header">
								        <div class="panel-title">
								        	<h3 class="pull-left"><b>Edit company</b></h3>
								        </div>
								        <div class="clearfix"></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
					                    	<div class="col-md-2">
								    			<label class="control-label pull-right" for="title">Name:</label>
								    		</div>
								    		<div class="col-md-6">
								    			{!! Form::text('company_name', null, array('class' => 'form-control border-input', 'id' => 'company_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_image">Company Image:</label>
								    		<div class="col-lg-4">
								    			{!! Form::file('company_image', null, array('class' => 'form-control border-input', 'id' => 'company_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_website">Company Website:</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('company_website', null, array('class' => 'form-control border-input', 'id' => 'company_website', 'placeholder' => 'Enter value here.' )) !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_description">company Designation</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('company_description', null, array('class' => 'form-control border-input', 'id' => 'company_description', 'placeholder' => 'Enter value here.', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="company_massrecruiter">company Massrecruiter ?</label>
								    		<div class="col-lg-4">
								    			{!! Form::select('company_massrecruiter', ['0' => 'NO', '1' => 'YES'] , null, array('class' => 'form-control border-input', 'id' => 'company_company', 'placeholder' => 'Fill 1 if yes! ', 'required' => '' )) !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($company->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($company->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.company.index', 'Cancel', array($company->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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


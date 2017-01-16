@extends('user')

@section('title','MAIN PAGEbranch BOARD | EDIT')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">            
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($branch, ['route' => ['admin.branches.update', $branch->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>EDIT branch</b></h3></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="branch_subject">Branch ID :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('id', null, array('class' => 'form-control border-input', 'id' => 'branch_id', 'placeholder' => 'Enter branch ID here', 'required' => '','maxlength' => '255' )) !!}
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-md-2 control-label" for="branch_message">Branch Name :</label>
								    		<div class="col-lg-10">
								    			{!! Form::text('name', null, array('class' => 'form-control border-input', 'id' => 'title', 'placeholder' => 'Enter branch name here', 'required' => '')) !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($branch->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($branch->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.branches.index', 'Cancel', array($branch->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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
</div>



@endsection
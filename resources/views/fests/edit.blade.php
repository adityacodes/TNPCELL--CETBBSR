@extends('user')

@section('title','EDIT fest')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">            
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($fest, ['route' => ['admin.fest.update', $fest->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>EDIT fest</b></h3></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
								    		<label class="col-md-4 control-label" for="fest_message">Fest Image :<sup class="required">*</sup></label>
								    		<div class="col-lg-6">
								    			{!! Form::text('fest_name', null, array('class' => 'form-control border-input', 'id' => 'fest_name', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>
						            	<div class="form-group">
								    		<label class="col-md-4 control-label" for="fest_website">Fest website :<sup class="required">*</sup></label>
								    		<div class="col-lg-6">
								    			{!! Form::text('fest_website', null, array('class' => 'form-control border-input', 'id' => 'fest_website', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-md-4 control-label" for="fest_message">Fest Image :<sup class="required">*</sup></label>
								    		<div class="col-lg-6">
								    			{!! Form::file('fest_image', null, array('class' => 'form-control border-input', 'id' => 'fest_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($fest->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($fest->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.fest.index', 'Cancel', array($fest->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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
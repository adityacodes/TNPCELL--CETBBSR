@extends('user')

@section('title','MAIN PAGEguideline BOARD | EDIT')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._tnpsettingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">            
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($guideline, ['route' => ['admin.guideline.update', $guideline->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '', 'autocomplete' => 'off']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>EDIT guideline</b></h3></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="guideline_subject">Guideline Subject :</label>
								    		<div class="col-lg-5">

								    			<div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('guideline_subject', null, array('class' => 'form-control border-input', 'id' => 'guideline_subject', 'placeholder' => 'Enter guideline subject here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
								    			</div>
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="guideline_message">Guideline Message :</label>

								    		<div class="col-lg-5">
								    			<div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::textarea('guideline_message', null, array('class' => 'form-control border-input', 'rows' => '5' ,'id' => 'title', 'placeholder' => 'Enter guideline message here here', 'required' => '')) !!}
								    			</div>
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($guideline->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($guideline->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.guideline.index', 'Cancel', array($guideline->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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
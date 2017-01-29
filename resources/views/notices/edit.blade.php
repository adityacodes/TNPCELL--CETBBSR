@extends('user')

@section('title','MAIN PAGENOTICE BOARD | EDIT')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">            
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($notice, ['route' => ['admin.mainnotices.update', $notice->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '', 'autocomplete' => 'off']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>EDIT NOTICE</b></h3></div>
								    </div>

						            <div class="content-box-large box-with-header">
						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="notice_subject">Notice Subject :</label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('notice_subject', null, array('class' => 'form-control border-input', 'id' => 'notice_subject', 'placeholder' => 'Enter notice subject here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
								    			</div>
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="notice_message">Notice Message :</label>
								    		<div class="col-lg-6">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::textarea('notice_message', null, array('class' => 'form-control border-input', 'id' => 'title', 'placeholder' => 'Enter notice message here here', 'required' => '')) !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($notice->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($notice->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.mainnotices.index', 'Cancel', array($notice->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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
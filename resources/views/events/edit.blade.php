@extends('user')

@section('title','Edit event')

@section('content')
<div class="row">
    <div class="col-lg-12">
    	<div class="card">
		    <div class="header">
		    	<!-- Title here -->
		        <h4 class="title">Choose event :</h4>
		        <hr>
		    </div>          
		    <div class="content" >              
		    	<!-- Content goes here -->
		    	<fieldset>
    	{!! Form::model($event, ['route' => ['admin.mainevents.update', $event->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
    	
	    <div class="col-md-8">
	        

	            <div class="content-box-header">
			        <div class="panel-title"><h3><b>MAIN PAGEevent BOARD | EDIT</b></h3></div>
			    </div>

	            <div class="content-box-large box-with-header">
	            	<div class="form-group">
			    		<label class="col-lg-4 control-label" for="event_subject">event Subject :</label>
			    		<div class="col-lg-4">
			    			{!! Form::text('event_subject', null, array('class' => 'form-control border-input', 'id' => 'event_subject', 'placeholder' => 'Enter event subject here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
			    		</div>
			    	</div>

	            	<div class="form-group">
			    		<label class="col-md-2 control-label" for="event_message">event Message :</label>
			    		<div class="col-lg-10">
			    			{!! Form::text('event_message', null, array('class' => 'form-control border-input', 'id' => 'title', 'placeholder' => 'Enter event message here here', 'required' => '')) !!}
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
	            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($event->created_at)) }}</p><br/>
	            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($event->updated_at)) }}</p><br/>

	            	</div>

	            	<div>
	            		{!! Html::linkRoute('admin.mainevents.index', 'Cancel', array($event->id), array('class' =>'btn btn-primary btn-block')) !!}
	            		
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
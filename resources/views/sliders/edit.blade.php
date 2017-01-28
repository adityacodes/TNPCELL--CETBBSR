@extends('user')

@section('title','EDIT SLIDER')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">            
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($slider, ['route' => ['admin.slider.update', $slider->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>EDIT SLIDER</b></h3></div>
								    </div>

						            <div class="content-box-large box-with-header">

						            	<div class="form-group">
								    		<label class="col-md-2 control-label" for="slider_message">Slider Image :<sup class="required">*</sup></label>
								    		<div class="col-lg-10">
								    			{!! Form::file('slider_image', null, array('class' => 'form-control border-input', 'id' => 'slider_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($slider->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($slider->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.slider.index', 'Cancel', array($slider->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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
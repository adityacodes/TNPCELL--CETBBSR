@extends('user')

@section('title','EDIT LINK')

@section('content')
 <div class="row">
        <div class="card">
        	@include('partials._settingsnav')

		    <div class="col-lg-12">

		    	<div class="card tab-content">            
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<fieldset>
		    				{!! Form::model($link, ['route' => ['admin.link.update', $link->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'data-parsley-validate' => '', 'autocomplete' => 'off']) !!}
		    	
						    <div class="col-md-8">
						        

						            <div class="content-box-header">
								        <div class="panel-title"><h3><b>EDIT link</b></h3></div>
								    </div>

						            <div class="content-box-large box-with-header">

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK NAME :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('link_name', null, array('class' => 'form-control border-input', 'id' => 'link_subject', 'placeholder' => 'Enter link name here', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	
						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK HREF :</label>
								    		<div class="col-lg-4">
								    			{!! Form::text('link_href', null, array('class' => 'form-control border-input', 'id' => 'link_subject', 'placeholder' => 'Enter link href here', 'required' => '' )) !!}
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK TARGET :</label>
								    		<div class="col-lg-4">
								    			{!! Form::select('link_target', ['_blank' => 'Blank', '_self' => 'Self', '_parent' => 'Parent', '_top' => 'Top'], null, array('class' => 'form-control border-input', 'id' => 'link_target', 'required' => ''))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN FOOTER? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isfooter', ['0' => 'No', '1' => 'Yes'], null, array('class' => 'form-control border-input', 'id' => 'link_isfooter'))  !!}
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN HEADER ? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isheader', ['0' => 'No', '1' => 'Yes'], null, array('class' => 'form-control border-input', 'id' => 'link_isheader'))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN FIRST QUICK LINK ? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isfirstquicklink', ['0' => 'No', '1' => 'Yes'], null, array('class' => 'form-control border-input', 'id' => 'link_isfirstquicklink'))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN SECOND QUICK LINK? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_issecondquicklink', ['0' => 'No', '1' => 'Yes'], null, array('class' => 'form-control border-input', 'id' => 'link_issecondquicklink'))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN ADDRESS SECTION? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isaddresslink', ['0' => 'No', '1' => 'Yes'], null, array('class' => 'form-control border-input', 'id' => 'link_isaddresslink'))  !!}
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
						            		<p><b>Created at :</b>{{ date('M j, Y H:ia', strtotime($link->created_at)) }}</p><br/>
						            		<p><b>Updated at :</b>{{ date('M j, Y H:ia', strtotime($link->updated_at)) }}</p><br/>

						            	</div>

						            	<div>
						            		{!! Html::linkRoute('admin.link.index', 'Cancel', array($link->id), array('class' =>'btn btn-primary btn-block')) !!}
						            		
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
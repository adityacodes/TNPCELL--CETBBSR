@extends('user')

@section('title',' Create New Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection


@section('content')
<div class="col-md-9">
    <div class="row">
    	<div class="content-box-large">
            <div class="panel panel-default">
			    <div class="panel-heading"><strong>CREATE NEW POST</strong></div>
			</div>
		    <div class="panel-body">
		    	<div class="form-group">
			    	{!! Form::open(array('route' => 'admin.post.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '')) !!}
			                    <div class="form-group">
						    		<label class="col-lg-2 control-label" for="title">Notice Title:</label>
						    		<div class="col-lg-8">
						    			{!! Form::text('title', null, array('class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter title here', 'required' => '', 'maxlength' => '255' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="slugbacklog">http://cetbtnp.com/notice/</label>
						    		<div class="col-lg-3">
						    			{!! Form::text('slug', null, array('class' => 'form-control', 'id' => 'slugbacklog', 'placeholder' => 'Enter slug here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="tyear">Tenth Year Must be > than:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('tenthyear', null, array('class' => 'form-control', 'id' => 'tyear', 'placeholder' => 'Enter value here', 'required' => '','minlength'=>'4')) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="tpercent">Tenth Percentage Must be > than:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('tenthpercent', null, array('class' => 'form-control', 'id' => 'tpercent', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="tboard">Tenth Board:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('tenthboard', null, array('class' => 'form-control', 'id' => 'tboard', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="twyeardpyear">Twelth Year Must be > than:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('twelthyear', null, array('class' => 'form-control', 'id' => 'twyeardpyear', 'placeholder' => 'Enter Min Requirement of Twelth Pass Year ', 'required' => '','minlength'=>'4' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="twpercentage">Twelth Percentage Must be > than:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('twelthpercent', null, array('class' => 'form-control', 'id' => 'twpercentage', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="twboard">Twelth Board:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('twelthboard', null, array('class' => 'form-control', 'id' => 'twboard' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="dpyear">Diploma Passing Year Must be > than:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('diplomayear', null, array('class' => 'form-control', 'id' => 'dpyear', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="dpercentage">Diploma Percentage Must be > than:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('diplomapercent', null, array('class' => 'form-control', 'id' => 'dpercentage', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="dboard">Diploma Board:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('diplomaboard', null, array('class' => 'form-control', 'id' => 'dboard' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="cgpa">CGPA:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('cgpa', null, array('class' => 'form-control', 'id' => 'cgpa', 'placeholder' => 'Enter Min CGPA Requirement', 'required' => '' )) !!}
						    		</div>
						    	</div>
						    	<div class="form-group">
						    		<label class="col-lg-3 control-label" for="backlog">Active BackLog:</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('backlog', null, array('class' => 'form-control', 'id' => 'backlog', 'placeholder' => 'Enter value here', 'required' => '' )) !!}
						    		</div>
						    	</div>

						    	<div class="form-group">
			                        <label class="col-lg-2 control-label" for="textarea-wysihtml5">Notice Text:</label>
			                        <div class="col-lg-8 col-xs-8">
			                        	{!! Form::textarea('body', null, array('class' => 'form-control textarea-wysihtml5', 'id' => 'body', 'style' => 'width: 100%; height: 200px' , 'placeholder' => 'Enter notice here', 'required' => '' )) !!}
			                        </div>
			                    </div>
			                    <div class="form-group">
				                    {!! Form::submit('Create Post', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
				                </div>
					{!! Form::close() !!}
		    	</div>
		    </div>
		</div>
	</div>
</div>


@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection

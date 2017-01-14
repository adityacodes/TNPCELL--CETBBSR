 @extends('user')

@section('title',' Create New notice')

@section('content')
    <div class="row">
    	<div class="card">
    		<div class="header">
                <div class="icon-big icon-success col-md-1 col-xs-3">
                        <i class="ti-pencil"></i>
                           
                </div>
                <h4 class="title" style="font-weight: bold;">CREATE NEW notice</h4>
                <p class="category">----</p>
            </div>
                 
                <div class="content">
                <h4>
			    	{!! Form::open(array('route' => 'admin.mainnotices.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '')) !!}
			                    <div class="form-group">
						    		<label class="col-lg-4 control-label" for="notice_subject">Notice Subject :</label>
						    		<div class="col-lg-4">
						    			{!! Form::text('notice_subject', null, array('class' => 'form-control border-input', 'id' => 'notice_subject', 'placeholder' => 'Enter notice subject here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
						    		</div>
						    	</div>

				            	<div class="form-group">
						    		<label class="col-md-2 control-label" for="notice_message">Notice Message :</label>
						    		<div class="col-lg-10">
						    			{!! Form::text('notice_message', null, array('class' => 'form-control border-input', 'id' => 'title', 'placeholder' => 'Enter notice message here here', 'required' => '')) !!}
						    		</div>
						    	</div>
			                    <div class="form-group">
				                    {!! Form::submit('Create notice', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
				                </div>
					{!! Form::close() !!}
					</h4>
		    	</div>                     
		    
		    <div class="footer"></div>
        </div>
	</div>


@endsection

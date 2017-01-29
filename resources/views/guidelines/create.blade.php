 @extends('user')

@section('title',' Create New guideline')

@section('content')
    <div class="row">
        <div class="card">
                @include('partials._tnpsettingsnav')

                <div class="col-lg-12">
               		 <div class="card tab-content">  
			    		<div class="header">
			                <div class="icon-big icon-success col-md-1 col-xs-3">
			                        <i class="ti-pencil"></i>
			                           
			                </div>
			                <h4 class="title" style="font-weight: bold;">CREATE NEW guideline
								<button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.guideline.index") }}'">Cancel</button>
			                </h4>
			                <p class="category">Items marked <sup class="required">*</sup> are required.</p>
			            </div>
                 
		                <div class="content">
		                	<h4>
					    	{!! Form::open(array('route' => 'admin.guideline.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'autocomplete' => 'off')) !!}
					                    <div class="form-group">
								    		<label class="col-lg-4 control-label" for="guideline_subject">Guideline Subject : <sup class="required">*</sup></label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('guideline_subject', null, array('class' => 'form-control border-input', 'id' => 'guideline_subject', 'placeholder' => 'Enter guideline subject here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
								    			</div>
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="guideline_message">Guideline Message : <sup class="required">*</sup></label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::textarea('guideline_message', null, array('class' => 'form-control border-input','rows' => '5' ,'id' => 'title', 'placeholder' => 'Enter guideline message here here', 'required' => '')) !!}
								    			</div>
								    		</div>
								    	</div>
					                    <div class="form-group">
						                    {!! Form::submit('Create guideline', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
				    	</div>
				    </div>
				</div>                     
        </div>
	</div>


@endsection

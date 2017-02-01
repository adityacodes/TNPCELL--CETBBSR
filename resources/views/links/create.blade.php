 @extends('user')

@section('title',' Create New LINK')

@section('content')
    <div class="row">
        <div class="card">
                @include('partials._settingsnav')

                <div class="col-lg-12">
               		 <div class="card tab-content">  
			    		<div class="header">
			                <div class="icon-big icon-success col-md-1 col-xs-3">
			                        <i class="ti-pencil"></i>
			                           
			                </div>
			                <h4 class="title" style="font-weight: bold;">CREATE NEW LINK
								<button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.link.index") }}'">Cancel</button>
			                </h4>
			                <p class="category">----</p>
			            </div>
                 
		                <div class="content">
		                	<h4>
					    	{!! Form::open(array('route' => 'admin.link.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'autocomplete' => 'off')) !!}

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
								    			{!! Form::select('link_target', ['_blank' => 'Blank', '_self' => 'Self', '_parent' => 'Parent', '_top' => 'Top'], '_self', array('class' => 'form-control border-input', 'id' => 'link_target', 'required' => ''))  !!}
								    		</div>
								    	</div>
										<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN FOOTER? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isfooter', ['0' => 'No', '1' => 'Yes'], '0', array('class' => 'form-control border-input', 'id' => 'link_isfooter', 'required' => ''))  !!}
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN HEADER ? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isheader', ['0' => 'No', '1' => 'Yes'], '0', array('class' => 'form-control border-input', 'id' => 'link_isheader', 'required' => ''))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN FIRST QUICK LINK ? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isfirstquicklink', ['0' => 'No', '1' => 'Yes'], '0', array('class' => 'form-control border-input', 'id' => 'link_isfirstquicklink', 'required' => ''))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN SECOND QUICK LINK? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_issecondquicklink', ['0' => 'No', '1' => 'Yes'], '0', array('class' => 'form-control border-input', 'id' => 'link_issecondquicklink', 'required' => ''))  !!}
								    		</div>
								    	</div>

								    	<div class="form-group">
								    		<label class="col-lg-4 control-label" for="link_subject">LINK IN ADDRESS SECTION? :</label>
								    		<div class="col-lg-4">

								    		{!! Form::select('link_isaddresslink', ['0' => 'No', '1' => 'Yes'], '0', array('class' => 'form-control border-input', 'id' => 'link_isaddresslink', 'required' => ''))  !!}
								    		</div>
								    	</div>

					                    <div class="form-group">
						                    {!! Form::submit('Create Link', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
				    	</div>
				    </div>
				</div>                     
        </div>
	</div>


@endsection

@extends('user')

@section('title', 'Send Mail')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
			    <div class="header">
			    	<!-- Title here -->
			        <h4 class="title">Send Bulk Mail :</h4>
			        <hr>
			    </div>          
			    <div class="content" >
			    	@if(Session::has('success'))
			            <div class="alert alert-success alert-dismissible spacer2" role="alert">
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			              <strong>Success:</strong> {{Session::get('success')}}
			            </div>
			        @endif
			        @if(Session::has('warning'))
			    
			            <div class="alert alert-danger alert-dismissible spacer2" role="alert">
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			              <strong>Warning:</strong> {{Session::get('warning')}}
			            </div>
			        @endif
			    	{!!Form::open(array('method' => 'POST','url' => 'admin/sendgroupemail', 'files' => true, 'class' => 'form-horizontal', 'autocomplete' => 'off' ))!!}              
			    	<!-- Content goes here -->
			    	<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Branch :<sup class="required">*</sup></label>
							<div class="col-md-10">
								<select class="form-control border-input" name="branch" id="postid">
									@foreach($branches as $branch)
										<option value="{{$branch->name}}">{{$branch->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
				    		<label class="col-lg-2 control-label" for="subject">Email Subject : <sup class="required">*</sup></label>
				    		<div class="col-lg-10">
				    			{!! Form::text('subject', null, array('class' => 'form-control border-input', 'id' => 'subject', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
				    		</div>
				    	</div>

						<div class="form-group">
	                        <label class="col-lg-2 control-label" for="textarea-wysihtml5">Email Body : <sup class="required">*</sup></label>
	                        <div class="col-lg-10">
	                            <textarea id="textarea-wysihtml5" name="body" class="form-control textarea-wysihtml5 border-input" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
	                        </div>
	                    </div>

	                    <div class="form-group text-center">
	                    	
	                        <button type="submit" class="btn btn-success">Send Message</button>
	                        <button type="reset" class="btn btn-default">Cancel</button>
	                    </div>
	                 </div>
	                 {!! Form::close() !!}
					<div class="clearfix"></div>
			    </div>
			</div>
		</div>
	</div>


@endsection
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
			    	<!-- Content goes here -->
			    	<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Branch :</label>
							<div class="col-md-10">
								<select class="form-control border-input" id="postid">
									@foreach($branches as $branch)
										<option value="{{$branch->name}}">{{$branch->name}}</option>
									@endforeach
								</select>
						
								{{Form::token()}}
							</div>
						</div>

						<div class="form-group">
	                        <label class="col-lg-2 control-label" for="textarea-wysihtml5">Message :</label>
	                        <div class="col-lg-10">
	                            <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5 border-input" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
	                        </div>
	                    </div>

	                    <div class="form-group text-center">
	                    	
	                        <button type="submit" class="btn btn-success">Send Message</button>
	                        <button type="reset" class="btn btn-default">Cancel</button>
	                    </div>
	                 </div>

					<div class="clearfix"></div>
			    </div>
			</div>
		</div>
	</div>


@endsection
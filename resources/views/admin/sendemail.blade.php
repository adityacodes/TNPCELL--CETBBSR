@extends('user')

@section('title', 'Send Mail')

@section('content')

<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">Choose Notice</div>

					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i>ADD BRANCH</a>
					</div>
				</div>
				<div class="panel-body">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Branch :</label>
						<div class="col-md-10">
							<select class="form-control" id="postid">
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
                            <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
                        </div>
                    </div>

                    <div class="form-group text-center">
                    	
                        <button type="submit" class="btn btn-success">Send Message</button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                    </div>
                 </div>


				</div>
			</div>
		</div>
	</div>
</div>


@endsection
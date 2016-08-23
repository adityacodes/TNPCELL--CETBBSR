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
					<div class="form-group">
						<label class="col-sm-2 control-label">Notice Title :</label>
						<div class="col-md-10">
							<select class="form-control" id="postid">
								@foreach($branches as $branch)
									<option value="{{$branch->name}}">{{$branch->name}}</option>
								@endforeach
							</select>
					
							{{Form::token()}}
						    <br/>
							<button id="chosen" class="btn btn-success btn-lg">SEND</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
@extends('user')

@section('title', 'Notices')

@section('content')
	
<div class="col-md-10">


	<div class="row">
		<div class="col-md-6">
			<div class="content-box-header">
				<div class="panel-title">{{strtoupper($post->title)}}</div>
			
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
			</div>
			</div>
			<div class="content-box-large box-with-header">
				<h5>
					{{$post->body}}
				</h5>
			<br><br>
			</div>
		</div>
	
	    <div class="col-md-6">
		        <div class="content-box-header">
					<div class="panel-title">REQUIREMENTS</div>
				
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					</div>
				</div>
	            <div class="content-box-large box-with-header">
	            <h4>
	            	<table class="table table-hover">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Attribute</th>
				                  <th>Value</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>Created At:</td>
				                  <td>{{ date('M j, Y H:iA', strtotime($post->created_at)) }}</td>
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>Tenth Year :</td>
				                  <td>{{$post->tenthyear}}</td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>Tenth Percentage :</td>
				                  <td>{{$post->tenthpercent}}</td>
				                </tr>
				                <tr>
				                  <td>4</td>
				                  <td>Twelth Year :</td>
				                  <td>{{$post->twelthyear}}</td>
				                </tr>
				                <tr>
				                  <td>5</td>
				                  <td>Twelth Percentage :</td>
				                  <td>{{$post->twelthpercent}}</td>
				                </tr>
				                <tr>
				                  <td>6</td>
				                  <td>Diploma Year :</td>
				                  <td>{{$post->diplomayear}}</td>
				                </tr>
				                <tr>
				                  <td>7</td>
				                  <td>Diploma Percentage :</td>
				                  <td>{{$post->diplomapercent}}</td>
				                </tr>
				                <tr>
				                  <td>8</td>
				                  <td>CGPA :</td>
				                  <td>{{$post->cgpa}}</td>
				                </tr>
				                <tr>
				                  <td>9</td>
				                  <td>Active Backlog :</td>
				                  <td>{{$post->backlog}}</td>
				                </tr>
				              </tbody>
				            </table>
	            	
	            	

	            	</h4>
		            	@if(!$applied || $applied->applied==0)
		            	{!! Form::open(array('action' => array('UserController@checkeligibility', $post->slug), 'method' =>'POST')) !!}
		            			{!! Form::text('slug', null, array('hidden' => '', 'value' => $post->slug )) !!}
	            				<button type="submit" class="btn btn-lg btn-block btn-success"><i class="glyphicon glyphicon-thumbs-up glyphicon-white"></i> APPLY</button></a>
	            		{!! Form::close() !!}
	            		@else
	            				<button type="button" disabled class="btn btn-lg btn-block btn-success"><i class="glyphicon glyphicon-thumbs-up glyphicon-white"></i> APPLIED</button>
	            		@endif
	            	

	            </div>
	       </div>
	    </div>
	</div>
</div>

@endsection
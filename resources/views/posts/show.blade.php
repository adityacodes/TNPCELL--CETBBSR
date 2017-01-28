@extends('user')

@section('title','Post')

@section('content')

	<div class="row">
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($post->title)}}</h4>
		                        <h4>NOTICE DETAILS :</h4>
		                        <hr>
		                    </div>
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>ELIGIBILTY CRITERIA :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Tenth Passing Year MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->tenthyear}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>2</td>
				                                        <td>Tenth Percentage MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->tenthpercent}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>3</td>
				                                        <td>Twelth Passing Year MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->twelthyear}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>4</td>
				                                        <td>Twelth Percentage MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->twelthpercent}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>Diploma Passing Year MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->diplomayear}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>6</td>
				                                        <td>Diploma Percentage MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->diplomapercent}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>7</td>
				                                        <td>CGPA MUST BE</td>
				                                        <td>></td>
				                                        <td>{{ $post->cgpa}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>8</td>
				                                        <td>NUMBER OF ACTIVE BACKLOGS MUSt BE</td>
				                                        <td><</td>
				                                        <td>{{ $post->backlog}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>9</td>
				                                        <td>Notice Image</td>
				                                        <td><</td>
				                                        <td>
				                                        	<img width="150" height="100" src="/uploads/post/{{$post->image}}">
				                                        </td>
				                                    </tr>
				                                </tbody>
				                             </table>
									    </h4>

									    	<p>{{ $post->body}}</p>                     

		                        <div class="footer">
		                            <hr>
		                            <div class="stats">
		                                <i class="ti-timer"></i> Campaign sent 2 days ago
		                            </div>
		                        </div>
		                    </div>
		            </div>
	            </div>

	            <div class="col-md-4" >
	            	<div class="card">

	                    <div class="header">
	                        <h4 class="title">TITLE :  {{strtoupper($post->title)}}</h4>
	                        <h4>NOTICE TEXT :</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>URL:</b><a target="_blank" style="word-wrap: break-word;" href="/notice/{{ $post->slug }}">{{ url('/notice/'.$post->slug) }}</a></p><br/>
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($post->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($post->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.post.edit', $post->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.post.destroy', $post->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.post.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> See all Notices</button>
			            		</a>
			            	</div>                  

	                        <div class="footer">
	                            <hr>
	                            <div class="stats">
	                                <i class="ti-timer"></i> Campaign sent 2 days ago
	                            </div>
	                        </div>
	                    </div>
	            	</div>
	            </div>
			</div>
	</div>
@endsection
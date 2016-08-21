@extends('user')

@section('title','Post')

@section('content')

<div class="col-md-9">
	<div class="row">
	    <div class="col-lg-12">

		    <div class="col-md-8">
		            
		            			<div class="content-box-header">
							        <div class="panel-title"><h3><b>TITLE :{{strtoupper($post->title)}}</b></h3></div>
							    </div>

							    <div style="word-wrap: break-word;" class="content-box-large box-with-header">
							    	<h4><b>NOTICE TEXT :</b></h4>
							    	<p>{{ $post->body}}</p>
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
		                                </tbody>
		                             </table>
							    </div>
		            
		        
		    </div>

		    <div class="col-md-4 content-box-large">
		        
		            <div class="page-header">
		                <div class="text-muted bootstrap-admin-box-title">STATUS</div>
		            </div>
		            <div class="bootstrap-admin-panel-content">

		            	<div class="well">
		            		<p><b>URL:</b><a target="_blank" style="word-wrap: break-word;" href="/notice/{{ $post->slug }}">{{ url('/notice/'.$post->slug) }}</a></p><br/>
		            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($post->created_at)) }}</p><br/>
		            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($post->updated_at)) }}</p><br/>

		            	</div>

		            	<div>
		            	
		            		<a class="action" href="{{ route('admin.post.edit', $post->id) }}">
		            			<button class="btn btn-primary btn-block"><i class="glyphicon glyphicon-pencil glyphicon-white"></i> Edit</button>
		            		</a><br/>
		            		{!! Form::open(['route' => ['admin.post.destroy', $post->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
			            			<button class="btn btn-danger btn-block"><i class="glyphicon glyphicon-remove glyphicon-white"></i> Delete</button>
		            		{!! Form::close() !!}<br/>
		            		<a class="action" href="{{ route('admin.post.index') }}">
		            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="glyphicon glyphicon-backward glyphicon-white"></i> See all Notices</button>
		            		</a>
		            	</div>

		            </div>
		        
		    </div>

	    </div>
	</div>
</div>
@endsection
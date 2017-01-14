 @extends('user')

@section('title','Notice')

@section('content')

	<div class="row">
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <div class="header">
		                        <h4 class="title">{{ ucwords(strtolower('Notice Subject : -')) }} <strong>{{ucwords(strtolower($notice->notice_subject)) }}</strong></h4>
		                        <h4>{{ ucwords(strtolower('NOTICE Message :')) }}</h4>
		                        <hr>
		                    </div>
		                    
		                    <div class="content" >
		                        <h4 >
									    	<p>{{ $notice->notice_message}}</p>
									    	
								</h4>                     

		                        <div class="footer">
		                            <hr>
		                            <div class="stats">
		                                <i class="ti-timer"></i> Notice will be shown in main page after this.
		                            </div>
		                        </div>
		                    </div>
		            </div>
	            </div>

	            <div class="col-md-4" >
	            	<div class="card">

	                    <div class="header">
	                        <h4 class="title">{{ucwords(strtolower('TITLE :'))}} {{strtoupper($notice->notice_subject)}}</h4>
	                        <h4>{{ucwords(strtolower('NOTICE CHANGES :'))}}</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>URL:</b><a target="_blank" style="word-wrap: break-word;" href="/notice/{{ $notice->slug }}">{{ url('/main/notices/') }}</a></p><br/>
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($notice->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($notice->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.mainnotices.edit', $notice->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.mainnotices.destroy', $notice->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.mainnotices.index') }}">
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
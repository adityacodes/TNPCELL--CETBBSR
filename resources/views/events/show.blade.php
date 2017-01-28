 @extends('user')

@section('title','Show Event')

@section('content')

	<div class="row">
        <div class="card">
                @include('partials._settingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">
		                    <div class="header">
		                        <h3 class="title"><strong>EVENT DETAILS</strong></h3>
		                        <hr>
		                    </div>

		                    <div class="content" >
		                        <h4>
			                    	<table class="table table-hover table-bordered" >
		                                <tbody>
		                                	<tr>
		                                		<th>Sl. No.</th>
		                                		<th>Table Attributes</th>
		                                		<th colspan="2">Table Values</th>	
		                                	</tr>
		                                	<tr>
		                                        <td>1</td>
		                                        <td>Event ID: </td>
		                                        <td colspan="2">{{ $event->id }}</td>
		                                    </tr>
		                                    <tr>
		                                        <td>2</td>
		                                        <td>Event Subject: </td>
		                                        <td colspan="2">{{ $event->event_subject }}</td>
		                                    </tr>
		                                    <tr>
		                                        <td>3</td>
		                                        <td>Event Message: </td>
		                                        <td colspan="2">{{ $event->event_message }}</td>
		                                    </tr>
						                </tbody>
						            </table>	
								</h4>                      

		                        <div class="footer">
		                            <hr>
		                            <div class="stats">
		                                <i class="ti-timer"></i> Event will be shown in main page after this.
		                            </div>
		                        </div>
		                    </div>
		            </div>
	            </div>

	            <div class="col-md-4" >
	            	<div class="card">

	                    <div class="header">
	                        <h4 class="title">{{ ucwords(strtolower('TITLE :')) }}  {{strtoupper($event->event_subject)}}</h4>
	                        <h4>{{ ucwords(strtolower('Event Changes :')) }}</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>URL:</b><a target="_blank" style="word-wrap: break-word;" href="{{ url('/events#').$event->id }}">{{ url('/events#').$event->id }}</a></p><br/>
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($event->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($event->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.mainevents.edit', $event->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> EDIT</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.mainevents.destroy', $event->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> DELETE</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.mainevents.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> SEE ALL EVENTS</button>
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
	</div>
@endsection
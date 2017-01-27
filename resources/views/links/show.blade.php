 @extends('user')

@section('title','LINK DETAILS')

@section('content')

	<div class="row">
        <div class="card">
                @include('partials._settingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <div class="header">
		                        <h4 class="title">LINK DETAILS</h4>
		                        <hr>
		                    </div>
		                    
		                    <div class="content" >
		                        <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        	<th>ID</th>
				                            <th>NAME</th>
				                            <th>HREF</th>
				                            <th>TARGET</th>
				                            <th>POSITION</th>
				                            <th>CREATED AT</th>
                                    	</tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>{{ $link->id }}</td>
                                        	<td>{{ $link->link_name }}</td>
                                        	<td>{{ $link->link_href }}</td>
                                        	<td>{{ $link->link_target }}</td>
                                        	<td>

					                            	@if($link->link_isfooter)
					                            		FOOTER
					                            	@elseif($link->link_isheader)
					                            		HEADER
					                            	@elseif($link->link_isfirstquicklink)
					                            		FIRST QUICK
					                            	@elseif($link->link_issecondquicklink)
				                       					SECOND QUICK
					                            	@elseif($link->link_isaddresslink)
					                            		NEAR ADDRESS 
					                            	@endif

                                        	</td>
                                        	<td>{{ $link->created_at }}</td>
                                        </tr>
                      
                                    </tbody>
                                </table>                    

		                        <div class="footer">
		                            <hr>
		                            <div class="stats">
		                                <i class="ti-timer"></i> link will be shown in main page after this.
		                            </div>
		                        </div>
		                    </div>
		            </div>
	            </div>

	            <div class="col-md-4" >
	            	<div class="card">

	                    <div class="header">
	                        <h4 class="title">{{ucwords(strtolower('TITLE :'))}} {{strtoupper($link->link_subject)}}</h4>
	                        <h4>{{ucwords(strtolower('link CHANGES :'))}}</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>URL:</b><a target="_blank" style="word-wrap: break-word;" href="/{{ $link->link_href }}">{{ url($link->link_href) }}</a></p><br/>
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($link->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($link->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.link.edit', $link->id) }}">
			            			<button class="btn btn-primary btn-block">
			            				<i class="ti-pencil"></i> EDIT
			            			</button>
			            		</a>
			            		<br/>
			            		{!! Form::open(['route' => ['admin.link.destroy', $link->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block">
				            				<i class="ti-close"></i> DELETE
				            			</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.link.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block">
			            				<i class="ti-book"></i> SEE ALL LINKS
			            			</button>
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
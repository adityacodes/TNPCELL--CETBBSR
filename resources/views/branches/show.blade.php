 @extends('user')

@section('title','branch')

@section('content')

	<div class="row">
        <div class="card">
                @include('partials._settingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <div class="header">
		                        <h4 class="title">BRANCH ID: <strong>{{strtoupper($branch->id) }}</strong></h4>
		                        <h4>BRANCH NAME: {{ $branch->name}} </h4>
		                        <hr>
		                    </div>
		                    
		                    <div class="content" >
		                        <h4 >
									    	<p></p>
									    	
								</h4>                     

		                        <div class="footer">
		                            <hr>
		                            <div class="stats">
		                                <i class="ti-timer"></i> branch will be shown  after this.
		                            </div>
		                        </div>
		                    </div>
		            </div>
	            </div>

	            <div class="col-md-4" >
	            	<div class="card">

	                    <div class="header">
	                        <h4 class="title">ID: {{strtoupper($branch->id)}}</h4>
	                        <h4>BRANCH CHANGES:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($branch->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($branch->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.branches.edit', $branch->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.branches.destroy', $branch->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.branches.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> See all branches</button>
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
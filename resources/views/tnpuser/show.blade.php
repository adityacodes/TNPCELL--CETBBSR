@extends('user')

@section('title','Show TNPUSER')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._tnpsettingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <!-- <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($tnpuser->name)}}</h4>
		                        <h4>Details :</h4>
		                        <hr>
		                    </div> -->
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>TNPUSER INFO :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                	<tr>
				                                		<th>Sl. No.</th>
				                                		<th>TNPUSER Attributes</th>
				                                		<th colspan="2">TNPUSER Values</th>	
				                                	</tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>TNPUSER Name: </td>
				                                        
				                                        <td colspan="2">{{ $tnpuser->name}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>2</td>
				                                        <td>Branch: </td>
				                                        
				                                        <td colspan="2">{{ $tnpuser->branch}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>3</td>
				                                        <td>Registration No.: </td>
				                                        
				                                        <td colspan="2">{{ $tnpuser->regdno}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>4</td>
				                                        <td>Backlog: </td>
				                                        <td colspan="2">{{ $tnpuser->backlog}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>Image</td>
				                                        <td colspan="2">{{ $tnpuser->gender}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>6</td>
				                                        <td>Tenth Year</td>
				                                        <td colspan="2">{{ $tnpuser->tenth_year }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>7</td>
				                                        <td>Tenth Percentage</td>
				                                        <td colspan="2">{{ $tnpuser->tenth_percent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>8</td>
				                                        <td>10th Board</td>
				                                        <td colspan="2">{{ $tnpuser->tenth_board }}</td>
				                                    </tr>


              		                                    
				                                </tbody>
				                             </table>
									    </h4>                     

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
	                        <h4 class="title">TITLE :  {{strtoupper($tnpuser->TNPUSER_name)}}</h4>
	                        <h4>DETAILS:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($tnpuser->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($tnpuser->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.tnpuser.edit', $tnpuser->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.tnpuser.destroy', $tnpuser->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.tnpuser.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> See all TNP Users</button>
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
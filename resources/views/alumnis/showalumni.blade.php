@extends('user')

@section('title','Show Alumni')

@section('content')

	<div class="row">
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($alumni->alumni_name)}}</h4>
		                        <h4>Details :</h4>
		                        <hr>
		                    </div>
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>ELIGIBILTY CRITERIA :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                	<tr>
				                                		<th></th>
				                                		<th></th>
				                                		<th colspan="2"></th>	
				                                	</tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Alumni Name: </td>
				                                        
				                                        <td colspan="2">{{ $alumni->alumni_name}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>2</td>
				                                        <td>Designation: </td>
				                                        
				                                        <td colspan="2">{{ $alumni->alumni_desig}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>3</td>
				                                        <td>Alumni Company: </td>
				                                        
				                                        <td colspan="2">{{ $alumni->alumni_company}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>4</td>
				                                        <td>Alumni Creator: </td>
				                                        <td colspan="2">{{ $alumni->creator}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>Alumni Image</td>
				                                        <td colspan="2">BUTTON HERE</td>
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
	                        <h4 class="title">TITLE :  {{strtoupper($alumni->alumni_name)}}</h4>
	                        <h4>DETAILS:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($alumni->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($alumni->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.alumni.edit', $alumni->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.alumni.destroy', $alumni->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.alumni.index') }}">
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
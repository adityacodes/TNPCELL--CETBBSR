@extends('user')

@section('title','Show Alumni')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._settingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <!-- <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($alumni->alumni_name)}}</h4>
		                        <h4>Details :</h4>
		                        <hr>
		                    </div> -->
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>ALUMNI INFO :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                	<tr>
				                                		<th>Sl. No.</th>
				                                		<th>Alumni Attributes</th>
				                                		<th colspan="2">Alumni Values</th>	
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
				                                        <td colspan="2"><img width="150" height="150" src="/uploads/alumni/{{ $alumni->alumni_image}}"></td>
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
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> EDIT</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.alumni.destroy', $alumni->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> DELETE</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.alumni.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> SEE ALL ALUMS</button>
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
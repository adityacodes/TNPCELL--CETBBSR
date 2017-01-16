@extends('user')

@section('title','Show officer')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._settingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <!-- <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($officer->officer_name)}}</h4>
		                        <h4>Details :</h4>
		                        <hr>
		                    </div> -->
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>officer INFO :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                	<tr>
				                                		<th>Sl. No.</th>
				                                		<th>officer Attributes</th>
				                                		<th colspan="2">officer Values</th>	
				                                	</tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>officer Name: </td>
				                                        
				                                        <td colspan="2">{{ $officer->officer_name}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>2</td>
				                                        <td>Designation: </td>
				                                        
				                                        <td colspan="2">{{ $officer->officer_desig}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>4</td>
				                                        <td>officer Creator: </td>
				                                        <td colspan="2">{{ $officer->creator}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>officer Image</td>
				                                        <td colspan="2"><a href="/uploads/officer/{{ $officer->officer_image}}">{{ $officer->officer_image}}</a></td>
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
	                        <h4 class="title">TITLE :  {{strtoupper($officer->officer_name)}}</h4>
	                        <h4>DETAILS:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($officer->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($officer->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.officer.edit', $officer->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.officer.destroy', $officer->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.officer.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> See all Alums</button>
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
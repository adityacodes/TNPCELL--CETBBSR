@extends('user')

@section('title','Show company')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._tnpsettingsnav')
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <!-- <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($company->company_name)}}</h4>
		                        <h4>Details :</h4>
		                        <hr>
		                    </div> -->
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>Company INFO :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                	<tr>
				                                		<th>Sl. No.</th>
				                                		<th>Company Attributes</th>
				                                		<th colspan="2">Company Values</th>	
				                                	</tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Company Name: </td>
				                                        
				                                        <td colspan="2">{{ $company->company_name}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>3</td>
				                                        <td>company Website: </td>
				                                        
				                                        <td colspan="2">{{ $company->company_website}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>4</td>
				                                        <td>company Description: </td>
				                                        <td colspan="2">{{ $company->company_description }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>company Image</td>
				                                        <td colspan="2">{{ $company->company_image}}</td>
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
	                        <h4 class="title">TITLE :  {{strtoupper($company->company_name)}}</h4>
	                        <h4>DETAILS:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($company->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($company->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.company.edit', $company->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.company.destroy', $company->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.company.index') }}">
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
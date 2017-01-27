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
				                                        <td>DOB.: </td>
				                                        
				                                        <td colspan="2">{{ $tnpuser->dob}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>Backlog: </td>
				                                        <td colspan="2">{{ $tnpuser->backlog}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>6</td>
				                                        <td>Image</td>
				                                        <td colspan="2">{{ $tnpuser->gender}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>7</td>
				                                        <td>Tenth Year</td>
				                                        <td colspan="2">{{ $tnpuser->tenthyear }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>8</td>
				                                        <td>Tenth Percentage</td>
				                                        <td colspan="2">{{ $tnpuser->tenthpercent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>9</td>
				                                        <td>10th Board</td>
				                                        <td colspan="2">{{ $tnpuser->tenthboard }}</td>
				                                    </tr>

				                                    @if(!empty($tnpuser->twelthyear))
				                                    <tr>
				                                        <td>10</td>
				                                        <td>12th Year</td>
				                                        <td colspan="2">{{ $tnpuser->twelthyear }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>11</td>
				                                        <td>12th Percentage</td>
				                                        <td colspan="2">{{ $tnpuser->twelthpercent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>12</td>
				                                        <td>12th Board</td>
				                                        <td colspan="2">{{ $tnpuser->twelthboard }}</td>
				                                    </tr>
				                                    @else

				                                    <tr>
				                                        <td>10</td>
				                                        <td>Diploma Year</td>
				                                        <td colspan="2">{{ $tnpuser->diplomayear }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>11</td>
				                                        <td>Diploma Percentage</td>
				                                        <td colspan="2">{{ $tnpuser->diplomapercent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>12</td>
				                                        <td>Diploma Board</td>
				                                        <td colspan="2">{{ $tnpuser->diplomaboard }}</td>
				                                    </tr>


				                                    @endif

				                                    <tr>
				                                        <td>13</td>
				                                        <td>Present Address</td>
				                                        <td colspan="2">{{ $tnpuser->paddress }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>14</td>
				                                        <td>Permanent Address</td>
				                                        <td colspan="2">{{ $tnpuser->praddress }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>15</td>
				                                        <td>Fathers Name :</td>
				                                        <td colspan="2">{{ $tnpuser->fname }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>16</td>
				                                        <td>Fathers Occupation:</td>
				                                        <td colspan="2">{{ $tnpuser->foccupation }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>17</td>
				                                        <td>Mothers Name :</td>
				                                        <td colspan="2">{{ $tnpuser->mname }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>18</td>
				                                        <td>Mothers Occupation:</td>
				                                        <td colspan="2">{{ $tnpuser->moccupation }}</td>
				                                    </tr>
				                                   @if(!empty($tnpuser->rname))
				                                    <tr>
				                                        <td>19</td>
				                                        <td>Relatives Name :</td>
				                                        <td colspan="2">{{ $tnpuser->rname }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>20</td>
				                                        <td>Relatives Occupation:</td>
				                                        <td colspan="2">{{ $tnpuser->roccupation }}</td>
				                                    </tr>

				                                    @endif
              		                                    
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
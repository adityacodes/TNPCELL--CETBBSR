@extends('user')

@section('title','Show Test TNP user')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
		    <div class="col-lg-12">
		    	<div class="col-md-8">
			    	<div class="card">

		                    <!-- <div class="header">
		                        <h4 class="title">TITLE :  {{strtoupper($test->name)}}</h4>
		                        <h4>Details :</h4>
		                        <hr>
		                    </div> -->
		                    
		                    <div class="content" >
		                        <h4 >
									    	<h4><b>Test TNP INFO :</b></h4>
									    	<table class="table table-hover table-bordered" >
				                                <tbody>
				                                	<tr>
				                                		<th>Sl. No.</th>
				                                		<th>Test TNP Attributes</th>
				                                		<th colspan="2">Test TNP Values</th>	
				                                	</tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Test Name: </td>
				                                        
				                                        <td colspan="2">{{ $test->name}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>2</td>
				                                        <td>Branch: </td>
				                                        
				                                        <td colspan="2">{{ $test->branch}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>3</td>
				                                        <td>Registration No.: </td>
				                                        
				                                        <td colspan="2">{{ $test->regdno}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>4</td>
				                                        <td>DOB.: </td>
				                                        
				                                        <td colspan="2">{{ $test->dob}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>5</td>
				                                        <td>Backlog: </td>
				                                        <td colspan="2">{{ $test->backlog}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>6</td>
				                                        <td>Image</td>
				                                        <td colspan="2">{{ $test->gender}}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>7</td>
				                                        <td>Tenth Year</td>
				                                        <td colspan="2">{{ $test->tenthyear }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>8</td>
				                                        <td>Tenth Percentage</td>
				                                        <td colspan="2">{{ $test->tenthpercent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>9</td>
				                                        <td>10th Board</td>
				                                        <td colspan="2">{{ $test->tenthboard }}</td>
				                                    </tr>

				                                    @if(!empty($test->twelthyear))
				                                    <tr>
				                                        <td>10</td>
				                                        <td>12th Year</td>
				                                        <td colspan="2">{{ $test->twelthyear }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>11</td>
				                                        <td>12th Percentage</td>
				                                        <td colspan="2">{{ $test->twelthpercent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>12</td>
				                                        <td>12th Board</td>
				                                        <td colspan="2">{{ $test->twelthboard }}</td>
				                                    </tr>
				                                    @else

				                                    <tr>
				                                        <td>10</td>
				                                        <td>Diploma Year</td>
				                                        <td colspan="2">{{ $test->diplomayear }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>11</td>
				                                        <td>Diploma Percentage</td>
				                                        <td colspan="2">{{ $test->diplomapercent }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>12</td>
				                                        <td>Diploma Board</td>
				                                        <td colspan="2">{{ $test->diplomaboard }}</td>
				                                    </tr>


				                                    @endif

				                                    <tr>
				                                        <td>13</td>
				                                        <td>Present Address</td>
				                                        <td colspan="2">{{ $test->paddress }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>14</td>
				                                        <td>Permanent Address</td>
				                                        <td colspan="2">{{ $test->praddress }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>15</td>
				                                        <td>Fathers Name :</td>
				                                        <td colspan="2">{{ $test->fname }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>16</td>
				                                        <td>Fathers Occupation:</td>
				                                        <td colspan="2">{{ $test->foccupation }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>17</td>
				                                        <td>Mothers Name :</td>
				                                        <td colspan="2">{{ $test->mname }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>18</td>
				                                        <td>Mothers Occupation:</td>
				                                        <td colspan="2">{{ $test->moccupation }}</td>
				                                    </tr>
				                                   @if(!empty($test->rname))
				                                    <tr>
				                                        <td>19</td>
				                                        <td>Relatives Name :</td>
				                                        <td colspan="2">{{ $test->rname }}</td>
				                                    </tr>
				                                    <tr>
				                                        <td>20</td>
				                                        <td>Relatives Occupation:</td>
				                                        <td colspan="2">{{ $test->roccupation }}</td>
				                                    </tr>

				                                    @endif

				                                    <tr>
				                                        <td>21</td>
				                                        <td>Internshps:</td>
				                                        <td colspan="2">{{ $test->internships }}</td>
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
	                        <h4 class="title">TITLE :  {{strtoupper($test->test_name)}}</h4>
	                        <h4>DETAILS:</h4>
	                        <hr>
	                    </div>
	                    
	                    <div class="content" >
	                        <div class="well">
			            		<p><b>Created at:</b>{{ date('M j, Y H:iA', strtotime($test->created_at)) }}</p><br/>
			            		<p><b>Updated at:</b>{{ date('M j, Y H:iA', strtotime($test->updated_at)) }}</p><br/>

			            	</div>

			            	<div>
			            	
			            		<a class="action" href="{{ route('admin.test.edit', $test->id) }}">
			            			<button class="btn btn-primary btn-block"><i class="ti-pencil"></i> Edit</button>
			            		</a><br/>
			            		{!! Form::open(['route' => ['admin.test.destroy', $test->id], 'method' =>'DELETE', 'style' => 'margin-top: -15px;']) !!}
				            			<button class="btn btn-danger btn-block"><i class="ti-close"></i> Delete</button>
			            		{!! Form::close() !!}<br/>
			            		<a class="action" href="{{ route('admin.test.index') }}">
			            			<button style="margin-top:-15px;" class="btn btn-default btn-block"><i class="ti-book"></i> SEE ALL TEST TNP Users</button>
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
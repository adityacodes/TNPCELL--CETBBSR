@extends('user')

@section('title', 'Admins')

@section('content')

<div class="row">
	<div class="col-md-12">
	        <div class="card">
	        @include('partials._tnpsettingsnav')
	        	<div class="col-lg-12">
			        <div class="card" id="my-tab-content" class="tab-content text-center">
			            <div class="tab-pane active" id="addtnpuser">
			            	<div class="header">
						    	<!-- Title here -->
						        <h4 class="title"><i class="ti-crown"></i> ADD ADMIN :</h4>
						        <hr>
						    </div>         
						    <div class="content" >
						    	<!-- Content goes here -->
						    	<div class="form-group">
									<label class="col-sm-2 control-label">Add Admin:</label>
									<div class="col-sm-10">
										{!!Form::open(array('route' => 'administrators.make', 'method' => 'POST'))!!}
											<input class="form-control border-input" name="regdno" placeholder="Enter the registration Number to continue"><br/>
											<button type="submit" id="submit" class=" btn btn-md btn-success text-center">
							                       <i class="ti-thumb-up"></i>
							                                        Make Admin
							                </button>
										{!! Form::close()!!}<br/>

									</div>
								</div>

									<label class="col-sm-2 control-label">Administrators :</label>
									<div class="col-md-10">
										<table class="table table-hover table-bordered">
											<thead>
												<tr>
													<th>Reg. No.</th>
													<th>Name</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												@foreach($name as $n)

													<tr>
														<td>{{$n->regdno}}</td>
														<td>{{$n->name}}</td>
														<td class="actions">
														@if($n->regdno == Auth::user()->name)

														@else

							                                <a onclick= "return confirm('Are you sure you want to remove {{ $n->name }} ?');"  href="{{ route('admin.administrators.delete', $n->regdno)}}">
							                                    <button class="btn btn-sm btn-primary">
							                                        <i class="ti-thumb-down"></i>
							                                        Remove Admin
							                                    </button>
							                                </a>
							                             @endif
							                            </td>
													</tr>
												@endforeach
										    </tbody>
										</table>
									</div>

								<div class="clearfix"></div>
				    		</div>
			            </div>
			        </div>
			    </div>
	        </div>


		    
		</div>
	</div>
</div>
	

@endsection
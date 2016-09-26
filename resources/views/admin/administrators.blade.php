@extends('user')

@section('title', 'Admins')

@section('content')
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">Administrators</div>

					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">Add Admin:</label>
						<div class="col-sm-10">
							{!!Form::open(array('route' => 'administrators.make', 'method' => 'POST'))!!}
								<input class="form-control" name="regdno" placeholder="Enter the registration Number to continue"><br/>
								<button class=" btn btn-md btn-success text-center">
				                       <i class="glyphicon glyphicon-thumbs-up"></i>
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

				                                <a href="{{ route('admin.administrators.delete', $n->regdno)}}">
				                                    <button class="btn btn-sm btn-primary">
				                                        <i class="glyphicon glyphicon-thumbs-down"></i>
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
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
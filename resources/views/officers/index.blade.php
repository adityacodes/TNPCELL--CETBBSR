@extends('user')

@section('title',' All officers')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All officers
					            <a href="{{ route('admin.officer.create') }}" class="btn btn-success pull-right"><i class="ti-plus"></i> NEW officer</a>
					            <div ><b>Total officers:</b><span class="badge label-success">{{$officers->total()}}</span></div>
				            </h4>
				            <hr>
				        </div>
				        
				        <div class="content" >
				        	<h5>
				        	<div class="content table-responsive table-full-width"></div>
				        		<table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>#</th>				                            
					                            <th>Name</th>
					                            <th>Designation</th>
					                            <th>Website</th>
					                            <th>Creator</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	@foreach ($officers as $officer)
						                        <tr>
						                            <td>{{ $officer->id }}</td>
						                            <td>{{ $officer->officer_name }}</td>
						                            <td>{{ $officer->officer_desig }}</td>
						                            <td>{{ $officer->officer_website }}</td>
						                            <td>{{ $officer->creator }}</td>

						                            <td class="actions">
						                                <a href="{{ route('admin.officer.show', $officer->id)}}">
						                                    <button class="btn btn-md btn-primary">
						                                        <h6><i class="ti-eye" aria-hidden="true"></i>
						                                        View</h6>
						                                    </button>
						                                </a>
						                                <a href="{{ route('admin.officer.edit', $officer->id) }}">
						                                    <button class="btn btn-md btn-warning">
						                                        <h6><i class="ti-pencil"></i>
						                                        Edit</h6>
						                                    </button>
						                                </a>
						                            </td>
						                        </tr>
						                    @endforeach
					                    </tbody>

				                </table>
				            </div>

				                <div class="text-center">
				                	{!! $officers->render() !!}
				                </div>
				            </h5>

				        </div>

				    </div>
				</div>
    </div>    

@endsection
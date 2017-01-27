@extends('user')

@section('title',' All Alumnis')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All Alumnis
					            <a href="{{ route('admin.alumni.create') }}" class="btn btn-success pull-right"><i class="ti-plus"></i> NEW Alumni</a>
					            <div ><b>Total Alumnis:</b><span class="badge label-success">{{$alumnis->total()}}</span></div>
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
					                            <th>Company</th>
					                            <th>Website</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	@foreach ($alumnis as $alumni)
						                        <tr>
						                            <td>{{ $alumni->id }}</td>
						                            <td>{{ $alumni->alumni_name }}</td>
						                            <td>{{ $alumni->alumni_desig }}</td>
						                            <td>{{ $alumni->alumni_company }}</td>
						                            <td>{{ $alumni->alumni_website }}</td>

						                            <td class="actions">
						                                <a href="{{ route('admin.alumni.show', $alumni->id)}}">
						                                    <button class="btn btn-md btn-primary">
						                                        <h6><i class="ti-eye" aria-hidden="true"></i>
						                                        View</h6>
						                                    </button>
						                                </a>
						                                <a href="{{ route('admin.alumni.edit', $alumni->id) }}">
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
				                	{!! $alumnis->render() !!}
				                </div>
				            </h5>

				        </div>

				    </div>
				</div>
    </div>    
@endsection
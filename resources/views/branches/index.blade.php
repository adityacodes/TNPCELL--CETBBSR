@extends('user')

@section('title',' All Branches')

@section('content')


<div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All Main Branches
					            <a href="{{ route('admin.branches.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW BRANCH</a>
					            <div ><b>Total branches:</b><span class="badge label-success">{{$branches->total()}}</span></div>
				            </h4>
				            <hr>
				        </div>
        
				        <div class="content" >
				        	<h5>
				        		<table class="table bootstrap-admin-table-with-actions">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>Branch</th>
					                            <th>Branch Full Name</th>
					                            <th>Created At</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($branches as $branch)
					                        <tr>
					                            <td>{{ $branch->id }}</td>
					                            <td>{{ $branch->name }}</td>
					                            <td>{{ $branch->fullname }}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($branch->created_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.branches.show', $branch->id)}}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.branches.edit', $branch->id) }}">
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

				                <div class="text-center">
				                	{!! $branches->render() !!}
				                </div>
				            </h5>
				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection
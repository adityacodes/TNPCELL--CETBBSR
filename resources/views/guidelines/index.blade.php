@extends('user')

@section('title',' All guidelines')

@section('content')


<div class="row">
        <div class="card">
                @include('partials._tnpsettingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All Main guidelines
					            <a href="{{ route('admin.guideline.create') }}" class="btn btn-success pull-right"><i class="ti ti-plus"></i> NEW Guideline</a>
					            <div ><b>Total guidelines:</b><span class="badge label-success">{{$guidelines->total()}}</span></div>
				            </h4>
				            <hr>
				        </div>
        
				        <div class="content" >
				        	<h5>
				        		<table class="table bootstrap-admin-table-with-actions">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>Title</th>
					                            <th>Guideline</th>
					                            <th>Created At</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($guidelines as $guideline)
					                        <tr>
					                            <td>{{ $guideline->id }}</td>
					                            <td>{{ substr($guideline->guideline_subject,0,20) }}</td>
					                            <td>{{ substr($guideline->guideline_message,0,20) }}{{ strlen($guideline->guideline_message) > 10 ? "..." : ""}}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($guideline->created_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.guideline.show', $guideline->id)}}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.guideline.edit', $guideline->id) }}">
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
				                	{!! $guidelines->render() !!}
				                </div>
				            </h5>
				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection
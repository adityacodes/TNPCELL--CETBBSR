@extends('user')

@section('title',' All fests')

@section('content')


<div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All Main fests
					            <a href="{{ route('admin.fest.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW FEST</a>
					            <div >
					            	<b>Total fests:</b>
					            	<span class="badge label-success">{{ $fests->total() }}</span>
					            	<br/><br/>
			            				<b>URL:</b>
			            				<a target="_blank" href="{{ url('/fests') }}">{{ url('/fests') }}</a>
					            </div>
				            </h4>
				            <hr>
				        </div>
        
				        <div class="content" >
				        	<h5>
				        		<table class="table bootstrap-admin-table-with-actions">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>Fest Name</th>
					                            <th>Fest Image</th>
					                            <th>Fest Website</th>
					                            <th>Created At</th>
					                            <th>Updated At</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($fests as $fest)
					                        <tr>
					                            <td>{{ $fest->id }}</td>
					                            <td>{{ $fest->fest_name}}</td>
					                            <td><img width="300" height="150" src="/uploads/fest/{{ $fest->fest_image }}"></td>
					                            <td>
					                            <a target="_blank" href="{{ url($fest->fest_website) }}">{{ $fest->fest_website }}</a>
					                            </td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($fest->created_at)) }}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($fest->updated_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.fest.show', $fest->id) }}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.fest.edit', $fest->id) }}">
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
				                	{!! $fests->render() !!}
				                </div>
				            </h5>
				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection
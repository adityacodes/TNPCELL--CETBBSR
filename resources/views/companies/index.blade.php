@extends('user')

@section('title',' All companies')

@section('content')

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._tnpsettingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">Recruiters
					            <a href="{{ route('admin.company.create') }}" class="btn btn-success pull-right"><i class="ti-plus"></i> NEW Company</a>
					            <div ><b>Total Companies:</b><span class="badge label-success">{{$companies->total()}}</span></div>
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
					                            <th>Description</th>
					                            <th>Website</th>
					                            <th>Images</th>
					                            <th>Mass Recruiter?</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	@foreach ($companies as $company)
						                        <tr>
						                            <td>{{ $company->id }}</td>
						                            <td>{{ $company->company_name }}</td>
						                            <td>{{ $company->company_description }}</td>
						                            <td>
						                            <a target="_blank" href="{{ url($company->company_website) }}">{{ $company->company_website}}</a>
						                            </td>
						                            <td>
						                            	<img width="100" height="100" src="/uploads/company/{{ $company->company_image }}">
						                            </td>
						                            <td>
						                            	@if($company->company_massrecruiter)
						                            		YES
						                            	@else
						                            		NO
						                            	@endif
						                            </td>

						                            <td class="actions">
						                                <a href="{{ route('admin.company.show', $company->id)}}">
						                                    <button class="btn btn-md btn-primary">
						                                        <h6><i class="ti-eye" aria-hidden="true"></i>
						                                        View</h6>
						                                    </button>
						                                </a>
						                                <a href="{{ route('admin.company.edit', $company->id) }}">
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
				                	{!! $companies->render() !!}
				                </div>
				            </h5>

				        </div>

				    </div>
				</div>
    </div>    

@endsection
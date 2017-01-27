@extends('user')

@section('title',' All Sliders')

@section('content')


<div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All Main Sliders
					            <a href="{{ route('admin.slider.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW Slider</a>
					            <div ><b>Total Sliders:</b><span class="badge label-success">{{$sliders->total()}}</span></div>
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
					                            <th>Slider</th>
					                            <th>Created At</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($sliders as $slider)
					                        <tr>
					                            <td>{{ $slider->id }}</td>
					                            <td>{{ substr($slider->Slider_subject,0,20) }}</td>
					                            <td>{{ substr($slider->Slider_message,0,20) }}{{ strlen($slider->Slider_message) > 10 ? "..." : ""}}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($slider->created_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.slider.show', $slider->id)}}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.slider.edit', $slider->id) }}">
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
				                	{!! $sliders->render() !!}
				                </div>
				            </h5>
				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection
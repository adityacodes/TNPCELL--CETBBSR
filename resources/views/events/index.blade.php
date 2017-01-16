@extends('user')

@section('title',' All events')

@section('content')


<div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">
					

				        <div class="header">
					        <h4 class="title">All Main Events
					            <a href="{{ route('admin.mainevents.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW Event</a>
					            <div ><b>Total events:</b><span class="badge label-success">{{$events->total()}}</span></div>
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
					                            <th>Event</th>
					                            <th>Created At</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($events as $event)
					                        <tr>
					                            <td>{{ $event->id }}</td>
					                            <td>{{ substr($event->event_subject,0,20) }}</td>
					                            <td>{{ substr($event->event_message,0,20) }}{{ strlen($event->event_message) > 10 ? "..." : ""}}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($event->created_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.mainevents.show', $event->id)}}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.mainevents.edit', $event->id) }}">
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
				                	{!! $events->render() !!}
				                </div>
				            </h5>

				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection
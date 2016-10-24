@extends('user')

@section('title', 'Alumni')



@section('content')

<div class="row">
    <div class="card">

        <div class="header">
	        <h4 class="title">Alumni list
	            <a href="{{ route('admin.alumni.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW Alumni</a>
	            <div ><b>Total Alumnis:</b><span class="badge label-success">{{$posts->total()}}</span></div>
            </h4>
            <hr>
        </div>
        
        <div class="content" >
        	<h5>
        		<table class="table bootstrap-admin-table-with-actions">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Name</th>
	                            <th>Designation</th>
	                            <th>Company</th>
	                            <th>Image</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
                    <tbody>
                    	@foreach ($posts as $post)
	                        <tr>
	                            <td>{{ $post->id }}</td>
	                            <td>{{ $post->name }}</td>
	                            <td>{{ $post->desg }}</td>
	                            <td>{{ $post->comppany }}</td>
	                            <td>{{ $post->image }}</td>
	                            <td class="actions">
	                                <a href="{{ route('admin.alumni.show', $post->id)}}">
	                                    <button class="btn btn-md btn-primary">
	                                        <h6><i class="ti-eye" aria-hidden="true"></i>
	                                        View</h6>
	                                    </button>
	                                </a>
	                                <a href="{{ route('admin.alumni.edit', $post->id) }}">
	                                    <button class="btn btn-md btn-warning">
	                                        <h6><i class="ti-pencil"></i>
	                                        Edit</h6>
	                                    </button>
	                                </a>
	                            @if($post->published == 0)
	                                
	                                	<a onclick="return confirm('Are you sure you want to publish this notice {{$post->title }}?');" href="{{ route('admin.notice.publish', $post->id)}}">
										    <button class="btn btn-md btn-success">
		                                        <h6><i class="ti-thumb-up"></i>
		                                        Publish</h6>
		                                    </button>
										</a>
	                                
	                            @else
	                                <a onclick="return confirm('Are you sure you want to publish this notice {{$post->title }}?');" href="{{ route('admin.notice.unpublish', $post->id)}}">
	                                    <button class="btn btn-md btn-warning">
	                                        <h6><i class="fa fa-eye-slash" aria-hidden="true"></i>
	                                        UnPublish</h6>
	                                    </button>
		                            </a>
	                            @endif
	                            </td>
	                        </tr>
	                    @endforeach
                    </tbody>

                </table>

                <div class="text-center">
                	{!! $posts->render() !!}
                </div>
            </h5>

        </div>
    </div>    

</div>



@endsection
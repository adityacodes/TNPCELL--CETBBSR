@extends('user')

@section('title',' All Posts')

@section('content')

<div class="col-md-9">
<div class="row">
    <div class="col-lg-10">
        
            <div class="content-box-header">
	                <div class="text-muted bootstrap-admin-box-title"><strong>All Notices</strong><div class="pull-right"><a href="{{ route('admin.post.create') }}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> NEW POST</a></div></div>
	                

	                <div ><b>Total Notices:</b><span class="badge label-success">{{$posts->total()}}</span></div>
	                 <div class="clearfix"></div>	
                
            </div>
            <div class="content-box-large box-with-header">
                <table class="table bootstrap-admin-table-with-actions">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Title</th>
	                            <th>Notice</th>
	                            <th>Created At</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
                    <tbody>
                    	@foreach ($posts as $post)
	                        <tr>
	                            <td>{{ $post->id }}</td>
	                            <td>{{ substr($post->title,0,20) }}</td>
	                            <td>{{ substr($post->body,0,20) }}{{ strlen($post->body) > 10 ? "..." : ""}}</td>
	                            <td>{{ date('M j, Y H:i:s', strtotime($post->created_at)) }}</td>
	                            <td class="actions">
	                                <a href="{{ route('admin.post.show', $post->id)}}">
	                                    <button class="btn btn-sm btn-primary">
	                                        <i class="glyphicon glyphicon-eye-open"></i>
	                                        View
	                                    </button>
	                                </a>
	                                <a href="{{ route('admin.post.edit', $post->id) }}">
	                                    <button class="btn btn-sm btn-warning">
	                                        <i class="glyphicon glyphicon-pencil"></i>
	                                        Edit
	                                    </button>
	                                </a>
	                            @if($post->published == 0)
	                                
	                                	<a href="{{ route('admin.notice.publish', $post->id)}}">
										    <button class="btn btn-sm btn-success">
		                                        <i class="glyphicon glyphicon-thumbs-up"></i>
		                                        Publish
		                                    </button>
										</a>
	                                
	                            @else
	                                <a href="{{ route('admin.notice.unpublish', $post->id)}}">
	                                    <button class="btn btn-sm btn-warning">
	                                        <i class="glyphicon glyphicon-thumbs-down"></i>
	                                        UnPublish
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

            </div>
        
    </div>
</div>
</div>
@endsection
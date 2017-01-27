@extends('user')

@section('title',' All links')

@section('content')


<div class="row">
        <div class="card">
                @include('partials._settingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All Main links
					            <a href="{{ route('admin.link.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW link</a>
					            <div ><b>Total links:</b><span class="badge label-success">{{$links->total()}}</span></div>
				            </h4>
				            <hr>
				        </div>
        
				        <div class="content" >
				        	<h5>
				        		<table class="table bootstrap-admin-table-with-actions">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>NAME</th>
					                            <th>HREF</th>
					                            <th>TARGET</th>
					                            <th>POSITION</th>
					                            <th>CREATED AT</th>
					                            <th>ACTIONS</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($links as $link)
					                        <tr>
					                            <td>{{ $link->id }}</td>
					                            <td>{{ $link->link_name }}</td>
					                            <td>{{ $link->link_href }}</td>
					                            <td>{{ $link->link_target }}</td>
					                            <td>
					                            	@if($link->link_isfooter)
					                            		FOOTER
					                            	@elseif($link->link_isheader)
					                            		HEADER
					                            	@elseif($link->link_isfirstquicklink)
					                            		FIRST QUICK
					                            	@elseif($link->link_issecondquicklink)
				                       					SECOND QUICK
					                            	@elseif($link->link_isaddresslink)
					                            		NEAR ADDRESS 
					                            	@endif

					                            </td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($link->created_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.link.show', $link->id)}}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.link.edit', $link->id) }}">
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
				                	{!! $links->render() !!}
				                </div>
				            </h5>
				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection
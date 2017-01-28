@extends('user')

@section('title',' All tnpusers')

@section('stylesheets')
<style type="text/css">
	#search {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-image: url('/template/search.png');
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

#search:focus {
    width: 100%;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')

    <div class="row">
        <div class="card">
                @include('partials._tnpsettingsnav')
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All tnpusers
					            <a href="{{ route('admin.tnpuser.create') }}" class="btn btn-success pull-right"><i class="ti-plus"></i> NEW Tnp User</a>
					            <div ><b>Total tnpusers:</b><span class="badge label-success">{{$tnpusers->total()}}</span></div>
				            </h4>
				            <hr>
				            <input type="text" id="search" name="search" placeholder="Search..">
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
					                            <th>Reg. No.</th>
					                            <th>Branch</th>
					                            <th>CGPA</th>
					                            <th>Backlog</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
					                    <tbody id="result"> 	
					                    	@foreach ($tnpusers as $tnpuser)
						                        <tr>
						                            <td>{{ $tnpuser->id }}</td>
						                            <td>{{ $tnpuser->name }}</td>
						                            <td>{{ $tnpuser->regdno }}</td>
						                            <td>{{ $tnpuser->branch }}</td>
						                            <td>{{ $tnpuser->cgpa }}</td>
						                            <td>{{ $tnpuser->backlog }}</td>

						                            <td class="actions">
						                                <a href="{{ route('admin.tnpuser.show', $tnpuser->id)}}">
						                                    <button class="btn btn-md btn-primary">
						                                        <h6><i class="ti-eye" aria-hidden="true"></i>
						                                        View</h6>
						                                    </button>
						                                </a>
						                                <a href="{{ route('admin.tnpuser.edit', $tnpuser->id) }}">
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
				                	{!! $tnpusers->render() !!}
				                </div>
				            </h5>

				        </div>

				    </div>
				</div>
    </div>    

@endsection


@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		var token = $('meta[name="csrf-token"]').val();
		$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
		});
		function startsearching()
		{
			$.ajax({
					url: 'searchkeyword',
					type: 'PUT',
					data: "keyword=" + $("#search").val() + "&_token=" + token, 
					success: function(result){
							$('.fa-spin').remove();
							$("#result").empty();
        					$("#result").append(result);
        				}
				})
		}
			$("#search").keypress(function(){
				startsearching();
			});
			$("#search").keyup(function(){
				startsearching();
			});
			$("#search").keydown(function(){
				startsearching();
			});

	});
</script>
@endsection
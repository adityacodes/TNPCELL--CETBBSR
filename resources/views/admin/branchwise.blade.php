@extends('user')

@section('title', 'Branchwise Users')

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

@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	        <div class="card">
	        @include('partials._tnpsettingsnav')
	        	<div class="col-lg-12">
			<div class="card" id="my-tab-content" class="tab-content">


				<div class="header">
					<h4 class="title">Branchwise TNP Users
						<a href="{{ route('admin.tnpuser.create') }}" class="btn btn-success pull-right">
							<i class="ti-plus"></i> NEW TNP USER
						</a>
					</h4>
					<hr>
					<div class="col-lg-8 col-lg-offset-1">
						<select class="form-control border-input" id="branchname">
							@foreach($branches as $branch)
								<option value="{{$branch->name}}">{{$branch->fullname}}</option>
							@endforeach
						</select>	
						{{Form::token()}}
					</div>
					
					<button id="chosen" class="btn btn-primary">Select</button><br><br>
					<input type="text" id="search" name="search" placeholder="Search..">
					<hr>
				</div>
				<div class="content" >
					<h5>
						<div class="content table-responsive table-full-width">
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

								</tbody>

							</table>
						</div>

					</h5>
				</div>

			</div>
		</div>



	   		</div>
	</div>
</div>



@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		var token = $('input[name="_token"]').val();
			$("#chosen").click(function() 
			{
				$('#result').empty();
				
				$.ajax({
					url: 'branchwise',
					type: 'PUT',
					data: "branchname=" + $("#branchname :selected").val() + "&_token=" + token, 
					success: function(result){
							$('.fa-spin').remove();
        					$("#result").append(result);
        				}
				});

			});

			function startsearching()
				{
					$.ajax({
						url: 'searchkeyword',
						type: 'PUT',
						data: "keyword=" + $("#search").val() + "&branchname=" + $("#branchname :selected").val() + "&_token=" + token, 
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
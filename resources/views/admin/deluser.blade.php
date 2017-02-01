@extends('user')

@section('title', 'Delete User From User Database')

@section('stylesheets')
<style type="text/css">
	#search {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-image: url('{{ url('/template/search.png') }}');
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

		<div class="card">
			@include('partials._tnpsettingsnav')

			<div class="card" id="my-tab-content" class="tab-content">
				<div class="tab-pane active">
					<div class="header">
				    	<!-- Title here -->
				        <h4 class="title"><i class="ti-user"></i> DELETE USER :</h4><br><br>
				        <p class="alert-warning">
				        	**Please note deleting a user from this table will delete him from the Users table but not from the TNP Database . To delete user from TNP table or to make changes to TNP Table please contact Super Admin.
				        </p>
				        <hr>
				    </div>          
				    <div class="content" >              
				    	<!-- Content goes here -->
				    	<input type="text" id="search" name="search" placeholder="Search..">
				    	{{Form::token()}}

				    		<div class="content table-responsive table-full-width">
				        		<table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>#</th>				                            
					                            <th>Name</th>
					                            <th>Email.</th>
					                            <th>Confirmed</th>
					                            <th>Admin</th>
					                            <th>SuperAdmin</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
					                    <tbody id="result">
					                    </tbody>

				                </table>
				            </div>

						<div class="clearfix"></div>
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
		function startsearching()
		{
			$.ajax({
					url: '{{ url('/admin/searchuser') }}',
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
				if($("#search").val().length === 0){
					$("#result").empty();
				}
				else{
					startsearching();
				}
			});
			$("#search").keyup(function(){
				if($("#search").val().length === 0){
					$("#result").empty();
				}
				else{
					startsearching();
				}
			});
			$("#search").keydown(function(){
				if($("#search").val().length === 0){
					$("#result").empty();
				}
				else{
					startsearching();
				}
			});

	});
</script>
@endsection
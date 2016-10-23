@extends('user')

@section('title', 'Delete User From User Database')

@section('content')

<div class="col-md-9">
	<div class="row">
		<div class="card">
		    <div class="header">
		    	<!-- Title here -->
		        <h4 class="title">DELETE USER :</h4>
		        <p class="alert-warning">
		        	**Please note deleting a user from this table will delete him from the Users table but not from the TNP Database . To delete user from TNP table or to make changes to TNP Table please contact Super Admin.
		        </p>
		        <hr>
		    </div>          
		    <div class="content" >              
		    	<!-- Content goes here -->
		    	{!!Form::open(array('url' => 'admin/delete/user', 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure you want to delete the TNP User from User Database?");'))!!}
	                <div class="form-group">
	                    <label class="col-lg-3 control-label" for="focusedInput">Registration Number:</label>
	                    <div class="col-lg-8">
	                        <input name="singleuserregdno" class="form-control border-input" id="focusedInput" type="text">
	                    </div>
	                </div><br><br>
	                <div class="form-group">
	                    
	                    <div class="col-lg-12 text-center">
	                       <button type="submit" class="btn btn-danger btn-lg">DELETE USER</button>
	                    </div>
	                </div>
	                <br><br>
	            {!!Form::close()!!}

				<div class="clearfix"></div>
		    </div>
		</div>



	</div>
</div>
@endsection
@extends('user')

@section('title', 'Delete User')

@section('content')

<div class="col-md-9">
	<div class="row">

		<div class="col-md-12 panel-warning" style="padding:10px;">
            <div class="content-box-header panel-heading">
                <div class="panel-title ">DELETE USER</div>
                
                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="content-box-large box-with-header">
            	{!!Form::open(array('url' => 'admin/delete/user', 'method' => 'POST'))!!}
	                <div class="form-group">
	                    <label class="col-lg-3 control-label" for="focusedInput">Registration Number:</label>
	                    <div class="col-lg-8">
	                        <input name="singleuserregdno" class="form-control" id="focusedInput" type="text">
	                    </div>
	                </div><br><br>
	                <div class="form-group">
	                    
	                    <div class="col-lg-12 text-center">
	                       <button type="submit" class="btn btn-danger btn-lg">DELETE USER</button>
	                    </div>
	                </div>
	                <br><br>
	            {!!Form::close()!!}<br><br>
            </div>
        </div>



	</div>
</div>
@endsection
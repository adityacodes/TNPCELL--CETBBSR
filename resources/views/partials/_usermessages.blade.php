@if(Session::has('success'))
<div class="col-md-8">
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Success:</strong> {{Session::get('success')}}
		</div>
</div>

@endif
@if(Session::has('warning'))
<div class="col-md-8">
		<div class="alert alert-warning alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Warning:</strong> {{Session::get('warning')}}
		</div>
</div>
@endif

	@if(count($errors) > 0)
		<div class="alert alert-warning alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Errors:</strong>
		   	<ul>
			  @foreach($errors->all() as $error)
			  		<li>{{ $error }} </li>
			  @endforeach
			</ul>
		</div>
	@endif


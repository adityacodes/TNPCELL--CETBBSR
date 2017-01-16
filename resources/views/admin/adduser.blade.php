@extends('user')

@section('title',' Add User')

@section('content')

	<div class="col-md-12">
		<div class="row">

			<div class="card">
				@include('partials._tnpsettingsnav')
				<div class="col-lg-12">

					<div id="my-tab-content" class="tab-content text-center">
						<div class="tab-pane active">
							<div class="header">
						    	<!-- Title here -->
						        <h4 class="title pull-left"><i class="ti-user"></i> ADD USER :</h4>
					        </div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection
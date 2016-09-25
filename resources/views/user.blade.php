<!DOCTYPE html>
<html>
	<head>
		@include('partials._userhead')

		@yield('stylesheets')
	</head>
	<body>
		@include('partials._usernav')

		<div class="page-content container-fluid">
	    	<div class="row">

	    	@if(Request::is('admin'))


	    	@else
	    		@include('partials._usersidebar')

	    	@endif
	    		

	    		@include('partials._usermessages')

	    		@yield('content')


	    	</div>
    	</div>

    	@include('partials._userfooter')

    	@yield('scripts')
	</body>
</html>
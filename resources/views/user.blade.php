<!DOCTYPE html>
<html>
	<head>
		@include('partials._userhead')

		@yield('stylesheets')
	</head>
	<body>

    	<div class="wrapper">

    		@include('partials._usersidebar')

    			<div class="main-panel">
    		
    				@include('partials._usernav')

    				<div class="content">
    					<div class="container-fluid">
		    				@yield('content')
		    			</div>
		    		</div>


    	

					@include('partials._userfooter')

				</div>
		</div>


		@include('partials._userscripts')
		
    	@yield('scripts')


	</body>
</html>
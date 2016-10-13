<div class="row" style="height:60px; margin: 0px;">
		<div style="background-color:#0fa5d9;padding: 10px;" class="navbar  {{Request::is('admin/*')? "navbar-inverse" : "navbar-default"}}  navbar-fixed-top" role="navigation">
		    <div class="container-fluid"> 
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span> 
		            </button>
		            @if(Request::is('admin/*'))
		            	<a href="/" class="navbar-brand text-center" style="font-size:35px; color:white;"><strong>CETB-TNP</strong></a>
		            	<a href="/admin/post" class="navbar-brand text-center" style="font-size:35px; color:white;"><strong>ADMIN PANEL</strong></a>
		            @else
		            	<a href="/" class="navbar-brand text-center" style="font-size:35px;color: 	white;"><strong>CETB-TNP</strong></a>
		            @endif
		        </div>
		        <div class="collapse navbar-collapse">
		            <ul class="nav navbar-nav hidden-md hidden-lg">
		            	@if(Request::is('user/*'))
			                <li class="{{Request::is('user/dashboard')? "active" : ""}}"><a href="/user/dashboard">Dashboard</a></li>
			                <li class="{{Request::is('user/profile')? "active" : ""}}"><a href="/user/profile">User Profile</a></li>
			                <li class="{{Request::is('user/contact')? "active" : ""}}"><a href="/user/contact">Contact Admin</a></li>
			            @else
			            	<li class="{{Request::is('admin/post')? "active" : ""}}"><a href="/admin/post">Posts</a></li>
			                <li class="{{Request::is('admin/applicants')? "active" : ""}}"><a href="/admin/applicants">Applicants</a></li>
			                <li class="{{Request::is('admin/standalone')? "active" : ""}}"><a href="/admin/standalone">Standalone</a></li>

			            @endif 
		                 <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DropDown
		                    <span class="caret"></span>
		                    </a>
		                    <ul class="dropdown-menu">
		                        <li><a href="#">Link 2</a></li>
		                    </ul>
		                 </li>

		             </ul>
		            <ul class="nav navbar-nav navbar-right" >
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">
		                        <span class="glyphicon glyphicon-user"></span> 
		                        <strong >{{$user['name']}}</strong>
		                        <span class="glyphicon glyphicon-chevron-down"></span>
		                    </a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <div class="navbar-login">
		                                <div class="row">
		                                    <div class="col-lg-4">
		                                        <p class="text-center">
		                                            <strong style="margin-left:8px; font-size: 100px;">{{ $user['name'][0]}}</strong>
		                                        </p>
		                                    </div>
		                                    <div class="col-lg-8">
		                                        <p class="text-left p-a-4"><strong>{{$user['regdno']}}</strong></p>
		                                        <p class="text-left small p-a-4"><h5>{{$user['email']}}</h5></p>
		                                        <p class="text-left">
		                                         @if(Auth::user()->isAdmin())
							                        <a href="/admin/post" class="btn btn-primary btn-block btn-sm"><i class="glyphicon glyphicon-star"></i> Goto Admin Panel</a>
							                    @else
							                    	<a href="/user/profile" class="btn btn-primary btn-block btn-sm"><i class="glyphicon glyphicon-star"></i> Profile</a>
							                 
							                    @endif

							                    @if(Request::is('admin/*') || Request::is('admin'))
							                    	<a href="/user/dashboard" class="btn btn-primary btn-block btn-sm"><i class="glyphicon glyphicon-star"></i> Goto USER Panel</a>
							                    @endif
		                                        </p>
		                                    </div>
		                                </div>
		                            </div>
		                        </li>
		                        <li class="divider"></li>
		                        <li style="padding: 8px;">
		                            <div class="navbar-login navbar-login-session">
		                                <div class="row">
		                                    <div class="col-lg-12">
		                                        <p>
		                                            <a href="/logout" class="btn btn-danger btn-block">Logout</a>
		                                        </p>
		                                    </div>
		                                </div>
		                            </div>
		                        </li>
		                    </ul>
		                </li>
		            </ul>
		        </div>
		    </div>
		</div>
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{url('#')}}">@yield('title')</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('#')}}" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-panel"></i>
						<p>Stats</p>
                    </a>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-bell"></i>
							<p>{{$user['regdno']}}</p>
							<b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">

                        <li>
	                        
	                            <div class="col-lg-12">
	                                
	                                    <p class="text-center clearfix">
	                                        <h1 class="text-center"><strong>{{ $user['name'][0]}}</strong></h1>
	                                    </p>
	                                
	                                
	                                <br>
	                                    <p class="text-center"><strong>{{$user['regdno']}}</strong></p>
	                                    <p class="text-center small"><h5>{{$user['email']}}</h5></p>
	                                    <p class="text-left">
                                            <a class="btn btn-primary btn-block btn-sm" href="{{url('/logout')}}">
                                                <i class="ti-back-right"></i>
                                                LOGOUT
                                            </a>
	                                     
	                                    </p>
	                                
	                            </div>
	                        
	                    </li>
                      </ul>
                </li>
                <li>
                    @if(Auth::user()->isAdmin() && (Request::is('user/*') || Request::is('notice/*') ) )
                        <a href="{{url('/admin/post')}}" class="btn btn-primary btn-block btn-sm"><i class="ti-back-right"></i> Goto Admin Panel</a>
                    @else
                        <a href="{{url('/user/profile')}}" class="btn btn-primary btn-block btn-sm"><i class="ti-user"></i> Profile</a>
                 
                    @endif
                </li>
                <li>
                    @if(Request::is('admin/*') || Request::is('admin'))
                        <a href="{{url('/user/dashboard')}}" class="btn btn-primary btn-block btn-sm"><i class="ti-back-right"></i> Goto USER Panel</a>
                    @endif
                </li>
                <li>
                    <a class="btn btn-primary btn-block btn-sm" href="{{url('/logout')}}">
						<i class="ti-"></i>
						<p>LOGOUT</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TNP-CELL | College Of Engineering &amp; Technology</title>

    <!-- Favicon And Shortcut Images -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- CSS FILES -->
    <link href="{{URL::to('main/css/navbar.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{URL::to('main/css/main1.css')}}">
    <link href="{{URL::to('main/css/style.css')}}" rel="stylesheet" type="text/css" media="all">

    <!--font-Awesome-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('stylesheets')

  </head>
  <body cz-shortcut-listen="true">
          <div class="container-fluid {{Request::is('/')? "white-bg" : "aliceblue-bg"}}">
             <div class="row clearfix greyishblue-bg">
             <h3 class="text-center hidden-xs tnptitle">Training &amp; Placement Cell</h3>
             <h2 class="text-center visible-xs tnpsmtitle">TNP-CETB</h2>
           </div>

           <div class="row clearfix greyishblue-bg">
                <div class="col-md-12">
                  <div class="container img-responsive text-center" >
                   <a href="/"><img  src="/main/images/cetlogo2.png" class="w-100 h-70"></a>
                 </div><br>
                </div>
           </div>
           <div class="row blue-bg">
                <div class="container">
                  <nav class="navbar navbar-default navbar-fixed-top text-center" id="primary_nav_wrap" role="navigation">
                    <div class="navbar-header blue-bg">
                      <button type="button" class="navbar-toggle pull-left white-color" data-toggle="collapse" data-target="#bs-navbar-collapse-1"><i class="fa fa-home" aria-hidden="true"></i> MENU</button>
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <div class="collapse navbar-collapse main-nav" id="bs-navbar-collapse-1">           
                      <ul class="nav navbar-nav white-color">
                        <li class="{{Request::is('/')? "active" : ""}}">
                          <a href="/"><i class="fa fa-btn fa-home"></i> Home</a>
                        </li>

                        <li class="{{Request::is('whycet')? "active" : ""}}">
                          <a href="/whycet"> <i class="fa fa-btn fa-question-circle"></i> Why Recruit ?</a>
                        </li>

                        <li class="{{Request::is('procedure/*')? "active" : ""}}">
                          <a href="/procedure/companies"><i class="fa fa-suitcase"></i> Companies</a>
                        </li>

                        <li class="{{Request::is('contact/office')? "active" : ""}}">
                          <a href="/contact/office"><i class="fa fa-building"></i> Placement Office</a>         
                        </li>

                        <li class="{{Request::is('contact/location')? "active" : ""}}">
                          <a href="/contact/location"><i class="fa fa-map-marker"></i> Location</a>        
                        </li>
                        <li class="{{ Request::is('our-alumni')? "active" : ""}}">
                          <a href="/our-alumni"><i class="fa fa-user"></i> Our Alumni</a>
                        </li>
                        <li class="{{ Request::is('events')? "active" : ""}}">
                          <a href="/events"><i class="fa fa-bookmark fa-2"></i> Events</a>
                        </li>

                        <li class="{{ Request::is('login')? "active" : ""}}">
                          @if (Auth::guest())

                          <a href="/login"><i class="fa fa-btn fa-sign-in"></i> Login</a>

                          @else
                          <a href="/user/dashboard"><i class="fa fa-btn fa-sign-in"></i> Dashboard</a>

                          @endif
                        </li>

                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </nav>
                </div>
           </div> 

          <div class="m-h-500" >
            @yield('content')

          </div>
          <div class="row footer white-color darkblue-bg">
                <div class="container m-t-15">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-sm-12 clearfix">
                        <h4>Quick Links</h4>
                        <hr>
                        <div class="col-lg-6 col-xs-6">
                          <ul>
                          @foreach($links as $link)
                            @if($link->link_isfirstquicklink)
                              <li><a target="{{$link->link_target}}" href="{{$link->link_href}}">{{ ucwords(strtolower($link->link_name)) }}</a></li>
                            @endif
                          @endforeach
 
                            <li><a href="/files/acad_cal201617.pdf&#10;">Academic Calendar 16-17</a></li>   
                            <li><a href="#" target="_blank">Academic Curriculum</a></li>
                            <li><a href="#" target="_blank">Degree Verification/ Transcripts/ Certificates</a></li>
                            <li><a href="#" target="_blank">ERP</a></li>
                            <li><a href="#" target="_blank">For Parents/Guardians</a></li>
                            <li><a href="/for-students">For Students</a></li>   
                            <li><a href="/former-employees">Former Employees</a></li>   
                            <li><a href="#" target="_blank">Faculty Openings</a></li>
                            <li><a href="#" target="_blank">Guest House</a></li>

                          </ul>  
                        </div>
                        <div class="col-lg-6 col-xs-6">
                          <ul>
                            @foreach($links as $link)
                              @if($link->link_issecondquicklink)
                                <li><a target="{{$link->link_target}}" href="{{$link->link_href}}">{{ ucwords(strtolower($link->link_name)) }}</a></li>
                              @endif
                            @endforeach
                            <li><a href="/holidays">Holidays</a></li>   
                            <li><a href="#" target="_blank">Doctorates Info System</a></li>
                            <li><a href="/internal-complaints-committee">Internal Complaints Committee</a></li>   
                            <li><a href="#" target="_blank">Internal Notice Board</a></li>
                            <li><a href="/international-mou">International MOU</a></li>   
                            <li><a href="/media">Media</a></li>   
                            <li><a href="#" target="_blank">Non-Teaching Positions</a></li>
                            <li><a href="#" target="_blank">Temporary Jobs</a></li>
                            <li><a href="#" target="_blank">Tenders</a></li>
                            <li><a href="#" target="_blank">Web Mail</a></li>


                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12">
                            <h4>Contact Us</h4> <hr>
                              <div class="footer_address">
                                  <p>{!! $settings['tnp_address'] !!}
                                  </p>
                              </div>
                              <div class="footer_link2">
                                <ul>
                                  <li><a href="/contact/location">How to reach</a></li>
                                  <li><a href="/campus-map">Campus Map</a></li>
                                  <li><a href="/files/comdir.pdf" target="_blank">Communication Directory</a></li>
                                </ul>
                              </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12">
                        <h4>Social Connect</h4><hr>
                        @if(!empty($settings['tnp_facebook']))
                            <a href="{{$settings['tnp_facebook']}}" target="_blank" class="btn btn-primary btn-facebook"><i class=" fa fa-facebook"></i></a>
                        @endif
                        @if(!empty($settings['tnp_linkedin']))
                            <a href="{{$settings['tnp_linkedin']}}" target="_blank" class="btn btn-primary btn-linkedin"><i class=" fa fa-linkedin"></i></a>
                        @endif
                        @if(!empty($settings['tnp_youtube']))
                            <a href="{{$settings['tnp_youtube']}}" target="_blank" class="btn btn-primary btn-youtube"><i class=" fa fa-youtube"></i></a>
                        @endif
                        @if(!empty($settings['tnp_instagram']))
                            <a href="{{$settings['tnp_instagram']}}" target="_blank" class="btn btn-primary btn-instagram"><i class=" fa fa-instagram"></i></a>
                        @endif
                        @if(!empty($settings['tnp_twitter']))
                            <a href="{{$settings['tnp_twitter']}}" target="_blank" class="btn btn-primary btn-twitter"><i class=" fa fa-twitter"></i></a>
                        @endif

                        @if(!empty($settings['tnp_googleplus']))
                            <a href="{{$settings['tnp_googleplus']}}" target="_blank" class="btn btn-primary btn-google-plus"><i class=" fa fa-google-plus"></i></a>
                        @endif
                        <br><br>
                      </div>
                    </div>
                </div>
                <div class="container">
                  <hr>
                  <div class="row m-b-5">
                    <div class="col-lg-6 col-md-6 col-md-12"> © {{date('Y')}} College Of Engineering And Technology </div> 
                    <div class="col-lg-6 col-md-6 col-md-12 text-right bootomtext"> 
                        <!--
                        <a href="/campus-weather">Campus Weather</a> | 
                        <a href="/feedback">Feedback</a> | 
                        <a href="/legal-disclaimer">Legal Disclaimer</a>
                        --> 
                        <a href="/right-to-information">RTI</a> | 
                        <a href="/campus-weather">Campus Weather</a> | 
                        <a href="/feedback">Feedback</a> | 
                        <a href="/legal-disclaimer">Legal Disclaimer</a> | 
                        <a target="_blank" href="mailto:admin@tnp.cet.edu.in">Webmaster</a> | 
                        <a href="/sitemap">Sitemap</a> | 
                    </div>
                  </div> 
                </div>
          </div>


          <script type="text/javascript" src="/js/jquery.js"></script>
          <script type="text/javascript" src="/js/bootstrap.min.js"></script>
          @yield('scripts')
  </body>
</html>

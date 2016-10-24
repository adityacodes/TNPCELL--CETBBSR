<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>TNP-CELL | College Of Engineering &amp; Technology</title>

    <!-- Favicon And Shortcut Images -->

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">


    <!-- CSS FILES -->

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/main/css/main1.css">
    <link href="/main/css/css" rel="stylesheet" type="text/css">
    <link href="/main/css/style.css" rel="stylesheet" type="text/css" media="all">
    <!--font-Awesome-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
@yield('stylesheets')
    
    <script type="application/x-javascript"> 

    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); 
        }, false); 
        function hideURLbar(){
         window.scrollTo(0,1); 
    } 
    </script>
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- start plugins -->
<style type="text/css">
  footer ul:last-child {
    padding: 10px 13px;
    margin: 0px;
    float: left;
}
.footer h4{
  color: #f8b003;
}
</style>
</head>
    
<body cz-shortcut-listen="true">
<div class="container-fluid white-bg">
    <div class="row clearfix" style="background-color: #002147;">
         <h2 class="text-center hidden-xs tnptitle">{{isset($sitename)? $sitename : ""}}</h2>
         <h2 class="text-center visible-xs tnpsmtitle">CETB-TNP</h2>
    </div>

    <div class="row clearfix" style="background-color: #002147;">
          <div class="col-md-12">
                  <div class="container img-responsive text-center" >
                       <a href="/"><img  src="/main/images/cetlogo2.png" style="width:100%;"></a>
                  </div><br>
          </div>
          
    </div>
    <div class="row blue-bg" style="border-top: 2px solid white;">
      <div class="container">
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
              <div class="navbar-header blue-bg">
                <button type="button" class="navbar-toggle pull-left white-color" data-toggle="collapse" data-target="#bs-navbar-collapse-1"><i class="fa fa-home" aria-hidden="true"></i> MENU</button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

               <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">           
                  <ul class="nav navbar-nav white-color">
                    <li class="{{Request::is('/')? "active" : ""}}">
                      <a href="/">Home</a>
                    </li>

                    <li class="{{Request::is('whycet')? "active" : ""}}">
                      <a href="/whycet">Why Recruit ?</a>
                    </li>

                    <li class="dropdown {{Request::is('procedure/*')? "active" : ""}}">
                        <a class="dropdown-toggle" data-toggle="dropdown">Procedure&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" >
                          <li class="nav-subitem"><a href="/procedure/companies"><i class="fa fa-user"></i> Companies</a></li>
                          <li class="nav-subitem"><a href="/procedure/students"><i class="fa fa-user"></i> Students</a></li>
                        </ul>
                    </li>
                       
                    <li class="dropdown {{Request::is('contact/*')? "active" : ""}}">
                        <a class="dropdown-toggle" data-toggle="dropdown">Contact Us&nbsp;&nbsp;<span class="caret"></span> </a>  
                        <ul class="dropdown-menu" >
                          <li class="nav-subitem">
                              <a href="/contact/office">Placement Office</a>
                          </li>
                          <li class="nav-subitem">
                              <a href="/contact/location">Location</a>
                          </li>
                        </ul>        
                    </li>  
                    <li class="{{ Request::is('our-alumni')? "active" : ""}}">
                      <a href="/our-alumni">Our Alumni</a>
                    </li>
                    <li class="{{ Request::is('events')? "active" : ""}}">
                      <a href="/events">Events</a>
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

    <div style="min-height: 500px;">
    @yield('content')

    </div>
    <div class="row footer white-color" style="background-color: #000C2C; ">
        <div class="container" style="margin-top: 15px;">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <h4>Quick Links</h4>
              <hr>
              <!--<div  style="-moz-columns: 3 200px; -webkit-columns: 3 200px; columns: 3 200px; padding:0px 0px 0px 0px; margin: 0px 0px 0px 0px;">-->
              <div class="col-lg-6 col-xs-6">
              <ul>


                <li><a href="/iitkgp-announcements">Announcements</a></li>   
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
              <div class="col-lg-6 col-xs-6 clearfix">
              <ul>
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
              <!--</div>-->
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 clearfix">
              <h4>Contact Us</h4> <hr>
              <div class="footer_address">
                <p>College Of Engineering And Technology<br>
                  Ghatikia, Bhubaneswar, India - 751003<br>
                  Phone: +91-7381110897<br>
                  FAX : I dont know</p>
                </div>
                <div class="footer_link2">
                  <ul>
                    <li><a href="/contact/location">How to reach <!--(by train/car/nearest airport)--></a></li>
                    <li><a href="/campus-map">Campus Map</a></li>
                    <li><a href="/files/comdir.pdf" target="_blank">Communication Directory</a></li>
                  </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <h4>Social Connect</h4><hr>
                <a href="#" target="_blank" class="btn btn-primary btn-facebook"><i class=" fa fa-facebook"></i></a> 
                <!--<a href="" class="btn btn-primary btn-twitter"><i class=" fa fa-twitter"></i></a>--> 
                <a href="#" target="_blank" class="btn btn-linkedin"><i class=" fa fa-linkedin"></i></a> 
                <a href="#" target="_blank" class="btn btn-primary btn-youtube"><i class=" fa fa-youtube"></i></a> 
                <br><br>
            </div>
        </div>
        <div class="container ">
        <hr> 
        <div class="row" style="margin-bottom: 5px;"> 

          <div class="col-lg-6 col-md-6 col-md-12"> © 2016 College Of Engineering And Technology </div> 
          <div class="col-lg-6 col-md-6 col-md-12 text-right bootomtext"> <!--<a href="/campus-weather">Campus Weather</a> | <a href="/feedback">Feedback</a> | <a href="/legal-disclaimer">Legal Disclaimer</a>--> 
            <a href="/right-to-information">RTI</a> | <a href="/campus-weather">Campus Weather</a> | <a href="/feedback">Feedback</a> | <a href="/legal-disclaimer">Legal Disclaimer</a> | <a target="_blank" href="mailto:contact.iic@iitkgp.ac.in">Webmaster</a> | <a href="/sitemap">Sitemap</a> | 
          </div> 
        </div> 
      </div>

        
      </div>

    </div>   
</div>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
@yield('scripts')

</body>


</html>

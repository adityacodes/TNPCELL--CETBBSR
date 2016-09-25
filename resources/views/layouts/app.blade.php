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
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

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

</head>
    
<body style="background-color:#ececec; margin:0px;" cz-shortcut-listen="true">
<div class="container lightblue-bg">
    <div class="row clearfix" class="lightblue-bg">
         <h2 class="text-center hidden-xs tnptitle">{{$sitename}}</h2>
         <h2 class="text-center visible-xs tnpsmtitle">CETB-TNP</h2>
    </div>
    <div class="row clearfix white-bg">
          <br>
          <div class="col-lg-offset-1 img-responsive col-xs-offset-2" style="margin-left: 10%;" >
               <img class="clearfix site-logo" src="/images/140cet.jpg"> 
          </div>
          <div class="col-lg-offset-3 visible-lg">
                <h2 class="clg-name"><b>COLLEGE OF ENGINEERING &amp; TECHNOLOGY</b>  </h2>
                <h2 class="clg-address">Techno-Campus, Kalinga Nagar, Ghatikia, Bhubaneswar </h2>
          </div>
    </div>
    <div class="row col-lg-offset-1">
          <nav class="navbar navbar-default navbar-left" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">           
                  <ul class="nav navbar-nav white-color">
                    <li class="active">
                      <a href="/">Home</a>
                    </li>     
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown">Message&nbsp;&nbsp;<span class="caret"></span></a>

                      <ul class="dropdown-menu" >
                        <li class="nav-subitem">

                            <a href="/message/principal">Principal Message</a>

                        </li>
                        <li class="nav-subitem">
                              
                              <a href="#">PIC's Message</a>

                        </li>
                      </ul>
                    </li> 
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Procedure&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" >
                          <li class="nav-subitem"><a href="http://tnp.cet.edu.in/recruiter.html">Companies</a></li>
                          <li class="nav-subitem"><a href="http://tnp.cet.edu.in/student.html">Students</a></li>
                        </ul>
                    </li>        
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Academics&nbsp;&nbsp;<span class="caret"></span></a>
                      <ul class="dropdown-menu" >
                          <li class="nav-subitem"><a href="http://tnp.cet.edu.in/student.html">Programmes</a></li>
                          <li class="nav-subitem"><a href="http://tnp.cet.edu.in/faculty.html">Faculty</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="http://tnp.cet.edu.in/why_cet.html">Why Recruit ?</a>
                    </li>       
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Contact Us&nbsp;&nbsp;<span class="caret"></span> </a>  
                        <ul class="dropdown-menu" >
                          <li class="nav-subitem">
                              <a href="http://tnp.cet.edu.in/contact_tnp_16-17.html">Placement Office</a>
                          </li>
                          <li class="nav-subitem">
                              <a href="http://tnp.cet.edu.in/visit.html">Location</a>
                          </li>
                        </ul>        
                    </li>      
                  </ul>
                </div><!-- /.navbar-collapse -->
                <!-- start soc_icons -->
          </nav>
        <!--  <div class="soc_icons navbar-right">
            <ul class="list-unstyled text-center">
              
              <li><a href="#.html#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#.html#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#.html#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#.html#"><i class="fa fa-linkedin"></i></a></li>
            </ul> 
          </div>
          -->
    </div> 


    @yield('content')

</div>
<div class="container-fluid">
    <div class="row footer" style="background-color:#08387f;">
        <div class="col-lg-3 col-lg-offset-1">
            <a href="http://cet.edu.in" style="color:#FFFFFF; font-size:64px;">C E T</a>
        </div>
        <div class="col-lg-8 hidden-xs">
              <p class="link white-color" style="margin-right:200px; margin-top:30px;">
              <a href="/" class="footer-menu-item"><span class="footer-things">HOME</span></a>
              <span class="footer-things">|</span>
              <a href="/contact" class="footer-menu-item"><span class="footer-things">CONTACT</span></a>
              <span class="footer-things">|</span>
              <a href="/visit" class="footer-menu-item"><span class="footer-things">VISIT</span><br><br></a>
              </p>
        </div>
        <span class="footer-clgtext">© College Of Engineering &amp; Technology | Design by CET-TNP, WEBD Team</span>

    </div>   
</div>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
@yield('scripts')

</body>


</html>

<!doctype html>
<html lang="en">
  <head>
    <title>@yield('pagetitle')</title>
      <base href="{{asset('/')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('cssBE')}}/img/favicon.ico">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('cssFE')}}/css/magnific-popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Red+Rose:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{asset('cssFE')}}/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="{{asset('cssFE')}}/css/fontawesome.css" rel="stylesheet">
    <link href="{{asset('cssFE')}}/css/pe-icon-7-stroke.css" rel="stylesheet">

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('cssFE')}}/css/owl.carousel.min.css"/> 
    <link rel="stylesheet" href="{{asset('cssFE')}}/css/owl.theme.css"/> 
    <link rel="stylesheet" href="{{asset('cssFE')}}/css/owl.transitions.css"/>
    <link rel="stylesheet" href="{{asset('cssFE')}}/css/slick.css"/> 
    <link rel="stylesheet" href="{{asset('cssFE')}}/css/slick-theme.css"/>  
    <link href="{{asset('cssFE')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('cssFE')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('cssFE')}}/css/menu.css" rel="stylesheet">
    <link href="{{asset('cssFE')}}/css/default.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssFE')}}/css/css.css">
  </head>
  <body>
    
    <button class="back-to-top" onclick="topFunction()" id="myBtn" title="Go to top">  </button>
   
        <div class="tagline hidden-md">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="fas fa-phone"></i> (+84) 905 036 439
                    </div>
                </div>
                <div class="float-right">
                    <ul class="top_socials">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <header id="topnav" class="defaultscroll fixed-top navbar-sticky sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                <a href="{{asset('/')}}" class="logo">
                        <img src="{{asset('cssFE')}}/images/logo.png" alt="missing_logo" height="20">
                    </a>
                </div>
                <!-- End Logo container-->
                
                  @include('FE.menu')
            </div>
        </header>
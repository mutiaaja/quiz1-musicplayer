<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>Music Player</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
     <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
 </head>
 
 <body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        MUSIC PLAYER
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>HOME</p>
                        </a>
                    </li>
                    <li>
                    <a class="nav-link" href="{{ url('artist') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>ARTIST</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('album') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>ALBUM</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('track') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>TRACK</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('played') }}">
                            <i class="nc-icon nc-atom"></i>
                            <p>PLAYED</p>
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="nc-icon nc-circle-09"></i>
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    
                        @yield('content')
                    
            </div>
            
        </div>
    </div>
 </body>
 <!--   Core JS Files   -->
 <script src="{{asset ('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
 <script src="{{asset ('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
 <script src="{{asset ('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{asset ('assets/js/plugins/bootstrap-switch.js') }}"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="{{ asset ('assets/js/plugins/chartist.min.js') }}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{asset ('assets/js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{asset ('assets/js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{asset('assets/js/demo.js') }}"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();
 
         demo.showNotification();
 
     });
 </script>
 
 </html>
 
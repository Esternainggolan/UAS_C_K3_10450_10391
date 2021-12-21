<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Allcure - Best Drugstore All The Time </title>
    @yield('styles')
    <script src="{{ asset('css/app.css') }}" defer></script>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/allcure.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .header-area{
            padding: 20px 0;
        }
    </style>

</head>
<body>
    
    <!--====== PRELOADER PART START ======-->

    <div id="app">
            
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-fixed-top navbar-expand-lg">
                        <a class="navbar-brand" href="\">
                            <img src="assets/images/allcure.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <!-- <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Obat</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a data-scroll-nav="0" href="#service">Laporan</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#showcase">Item</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#blog">Blog</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a data-scroll-nav="0" href="#contact">Kontak Kami</a>
                                </li> -->
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                            <a data-scroll-nav="0" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                                        </li>
                                        <cart/>
                                    @else
                                        <li class="nav-item">
                                            <a data-scroll-nav="0" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a data-scroll-nav="0" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    @yield('content')
    </div>
    <!--====== HEADER PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    
    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    @yield('scripts')
    <script>
        window.onbeforeunload = function(){
          window.scrollTo(0,0);
        }
    </script>
</body>

</html>
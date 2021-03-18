<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>The Fanclub - @yield('title')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- Fonts -->
        @section('fonts')
            <script src="https://kit.fontawesome.com/e1666451c4.js" crossorigin="anonymous"></script>
        @show

        <!-- Styles -->
        @section('stylesheets')
            <!-- framework - css include -->
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

            <!-- icon css include -->
            <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">

            <!-- carousel css include -->
            <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
            <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
            <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
            <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

            <!-- others css include -->
            <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
            <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
            <link href="{{ asset('css/create-fanclub.css') }}" rel="stylesheet">

            <!-- color switcher css include -->
            <link href="{{ asset('css/colors/style-switcher.css') }}" rel="stylesheet">
            <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet">

            <!-- custom css include -->
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @show
        
    </head>
    <body>
        <div class="wrapper default-header-p">
            <!-- backtotop - start -->
            <div id="thetop" class="thetop"></div>
            <div class='backtotop'>
                <a href="#thetop" class='scroll'>
                    <i class="fas fa-angle-double-up"></i>
                </a>
            </div>

            <!-- header-section -->
            <header id="header-section" class="header-section default-header-section auto-hide-header clearfix">
                <!-- header-bottom - start -->
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">

                            <!-- site-logo-wrapper - start -->
                            <div class="col-lg-3">
                                <div class="site-logo-wrapper">
                                    <a href="/" class="logo">
                                        <img src="images/logoPeqAzulFundoTransparente.svg" alt="logo">

                                    </a>
                                </div>
                            </div>

                            <!-- mainmenu-wrapper - start -->
                            <div class="col-lg-9">
                                <div class="mainmenu-wrapper">
                                    <div class="row">

                                        <!-- menu-item-list - start -->
                                        <div class="col-lg-10">
                                            <div class="menu-item-list ul-li clearfix">
                                                <ul>
                                                    <li class="menu-item-has-children">
                                                        <a href="/">home</a>
                                                    </li>
                                                    <li class="menu-item-has-children @if(Request::getPathInfo() === '/about') active @endif">
                                                        <a href="/about">about</a>
                                                    </li>
                                                    <li class="menu-item-has-children @if(Request::getPathInfo() === '/fanclubs') active @endif">
                                                        <a href="/fanclubs">fanclubs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- menu-item-list - start -->
                                        <div class="col-lg-2">
                                            <div class="user-search-btn-group ul-li clearfix">
                                                <ul>
                                                    <li>
                                                        <a href="#login-modal" class="login-modal-btn">
                                                            <i class="fas fa-user"></i>
                                                        </a>
                                                        <x-modals.sign-in />
                                                        <x-modals.sign-up />
                                                    </li>
                                                    <li>
                                                        <button type="button" class="toggle-overlay search-btn">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                        <!-- nav search -->
                                                        <x-widgets.search.nav-search />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- alternative-header -->
            <div class="header-altranative">
                <div class="container">
                    <div class="logo-area float-left">
                        <a href="/">
                            <img src="images/logoPeqAzulFundoTransparente.svg" alt="logo">
                        </a>
                    </div>

                    <button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <!-- sidebar menu - start -->
                <div class="sidebar-menu-wrapper">
                    <div id="sidebar" class="sidebar">
                        <span id="sidebar-dismiss" class="sidebar-dismiss">
                            <i class="fas fa-arrow-left"></i>
                        </span>

                        <div class="sidebar-header">
                            <a href="/">
                                <img src="images/logoPeqAzulFundoTransparente.svg" alt="logo">
                            </a>
                        </div>

                        <!-- sidebar-form -->
                        <div class="sidebar-form">
                            <form action="#">
                                <input id="altmenu-sidebar-search" type="search" placeholder="Search">
                                <label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
                            </form>
                        </div>

                        <!-- main-pages-links -->
                        <div class="menu-link-list main-pages-links">
                            <h2 class="menu-title">The Fanclub</h2>
                            <ul>
                                <li class="active">
                                    <a href="/">
                                        <span class="icon"><i class="fas fa-home"></i></span>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="/about">
                                        <span class="icon"><i class="fas fa-home"></i></span>
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="/fanclubs">
                                        <span class="icon"><i class="fas fa-home"></i></span>
                                        Fanclubs
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- User Panel -->
                        <div class="menu-link-list other-pages-links">
                            <h2 class="menu-title">My Area</h2>
                            <ul>
                                <li>
                                    <a href="/my-profile">
                                        <span class="icon"><i class="fas fa-home"></i></span>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="/my-fanclubs">
                                        <span class="icon"><i class="fas fa-home"></i></span>
                                        My Fanclubs
                                    </a>
                                </li>
                                <li>
                                    <a href="/my-events">
                                        <span class="icon"><i class="fas fa-home"></i></span>
                                        My Events
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- login-btn-group - start -->
                        <div class="login-btn-group">
                            <ul>

                                <li>
                                    <a href="#alt-register-modal" class="register-modal-btn">
                                        Register
                                    </a>
                                    <div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                                        <div class="overlay-black clearfix">

                                            <!-- leftside-content - start -->
                                            <div class="leftside-content">
                                                <div class="site-logo-wrapper mb-80">
                                                    <a href="#!" class="logo">
                                                        <img src="" alt="logo">
                                                    </a>
                                                </div>
                                                <div class="register-login-link mb-80">
                                                    <ul>
                                                        <li><a href="#!">Login</a></li>
                                                        <li class="active"><a href="#!">Register</a></li>
                                                    </ul>
                                                </div>
                                                <div class="copyright-text">
                                                    <p class="m-0">©2021 <a href="#!" class="yellow-color">The Fanclub</a> all right reserved, made with <i class="fas fa-heart"></i> by LBAW group 61 </p>
                                                </div>
                                            </div>

                                            <!-- rightside-content - start -->
                                            <div class="rightside-content text-center">

                                                <div class="mb-30">
                                                    <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                                                    <span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
                                                </div>

                                                <div class="login-form text-center mb-50">
                                                    <form action="#!">
                                                        <div class="form-item">
                                                            <input type="email" placeholder="User Name">
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="password" placeholder="Password">
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="email" placeholder="Repeat Password">
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="password" placeholder="Email Address">
                                                        </div>
                                                        <div class="human-verification text-left">
                                                            <input type="checkbox" id="alt-imnotarobot">
                                                            <label for="alt-imnotarobot">I'm not a robot</label>
                                                            <span class="verification-image">
                                                                <img src="/images/iamnotrobot.png" alt="Image_not_found">
                                                            </span>
                                                        </div>
                                                        <button type="submit" class="login-btn">login now</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <a class="popup-modal-dismiss" href="#!">
                                                <i class="fas fa-times"></i>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#alt-login-modal" class="login-modal-btn">
                                        Login
                                    </a>
                                    <div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                                        <div class="overlay-black clearfix">

                                            <!-- leftside-content - start -->
                                            <div class="leftside-content">
                                                <div class="site-logo-wrapper mb-80">
                                                    <a href="#!" class="logo">
                                                        <img src="images/logoAzulFundoTransparente.svg" alt="logo">
                                                    </a>
                                                </div>
                                                <div class="register-login-link mb-80">
                                                    <ul>
                                                        <li class="active"><a href="#!">Login</a></li>
                                                        <li><a href="#!">Register</a></li>
                                                    </ul>
                                                </div>
                                                <div class="copyright-text">
                                                    <p class="m-0">©2021 <a href="#!" class="yellow-color">The Fanclub</a> all right reserved, made with <i class="fas fa-heart"></i> by LBAW group 61 </p>
                                                </div>
                                            </div>

                                            <!-- rightside-content - start -->
                                            <div class="rightside-content text-center">

                                                <div class="mb-30">
                                                    <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                                                    <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                                                </div>

                                                <div class="fb-login-btn mb-30">
                                                    <a href="#!">
                                                        <span class="icon">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                        login with facebook
                                                    </a>
                                                </div>

                                                <div class="or-text mb-30">
                                                    <span>or sign in</span>
                                                </div>

                                                <div class="login-form text-center mb-50">
                                                    <form action="#!">
                                                        <div class="form-item">
                                                            <input type="email" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="password" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="login-btn">login now</button>
                                                    </form>
                                                </div>

                                                <div class="bottom-text white-color">
                                                    <p class="m-0">
                                                        * Denotes mandatory field.
                                                    </p>
                                                    <p class="m-0">** At least one telephone number is required.</p>
                                                </div>

                                            </div>

                                            <a class="popup-modal-dismiss" href="#!">
                                                <i class="fas fa-times"></i>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>

                        <!-- social-links - start -->
                        <div class="social-links">
                            <h2 class="menu-title">get in touch</h2>
                            <div class="mb-15">
                                <h3 class="contact-info">
                                    <i class="fas fa-phone"></i>
                                    912 345 678
                                </h3>
                                <h3 class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    hello@thefanclub.com
                                </h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitch"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                            <a href="#" class="contact-btn">contact us</a>
                        </div>

                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
		
		
            <!-- Content -->
            @section('content')
            @show

            <!-- footer -->
            <footer id="footer-section" class="footer-section footer-section2 clearfix">

                <!-- footer-top - start -->
                <div class="footer-top sec-ptb-100 clearfix">
                    <div class="container">
                        <div class="row">

                            <!-- about-wrapper - start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="about-wrapper">

                                    <!-- site-logo-wrapper - start -->
                                    <div class="site-logo-wrapper mb-30">
                                        <a href="/" class="footer-logo">
                                            {{-- <img src="images/logoPeqAzulFundoTransparente.svg" alt="logo"> --}}
                                            <img src="images/logoAzulFundoTransparente.svg" alt="TheFanClub">
                                        </a>
                                    </div>

                                    

                                    <!-- basic-info - start -->
                                    <div class="basic-info ul-li-block mb-50">
                                        <ul>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Address: FEUP is our home 
                                            </li>
                                            <li>
                                                <i class="fas fa-envelope"></i>
                                                <a href="#!">hello@thefanclub.com</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-phone"></i>
                                                <a href="#!">912 456 879</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- social-links - start -->
                                    <div class="social-links ul-li">
                                        <h3 class="social-title">Follow us</h3>
                                        <ul>
                                            <li>
                                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fab fa-twitch"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- usefullinks-wrapper - start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="usefullinks-wrapper ul-li-block">
                                    <h3 class="footer-item-title">
                                        useful <strong>links</strong>
                                    </h3>
                                    <ul>
                                        <li><a href="/about">About The Fanclub</a></li>
                                        <li><a href="/fanclubs">Search Fanclubs</a></li>
                                        <li><a href="/create-fanclub">Create New Fanclub</a></li>
                                        <li><a href="/fanclub">Last visited Fanclub</a></li>
                                    </ul>
                                    
                                </div>
                            </div>

                            <!-- instagram-wrapper - start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="instagram-wrapper ul-li">
                                    <h3 class="footer-item-title">
                                        fanclub <strong>instagram</strong>
                                    </h3>
                                    <ul>
                                        <li class="image-wrapper">
                                            <img src="/images/home1.jpg" alt="Instagram">
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="image-wrapper">
                                            <img src="/images/home2.jpg" alt="Instagram">
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="image-wrapper">
                                            <img src="/images/home3.jpg" alt="Instagram">
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="image-wrapper">
                                            <img src="/images/home3.jpg" alt="Instagram">
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="image-wrapper">
                                            <img src="/images/home2.jpg" alt="Instagram">
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="image-wrapper">
                                            <img src="/images/home1.jpg" alt="Instagram">
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                    <h4 class="followus-link">
                                        Follow Our Instagram <a href="#!">#TheFanclub</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-top - end -->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <!-- copyright-text - start -->
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="copyright-text">
                                    <p class="m-0 yellow-color">©2021 <a href="#!" class="site-link">The Fanclub</a> all right reserved, made with <i class="fas fa-heart"></i> by <a href="#!" class="author-link"><strong>LBAW group 61</strong></a></p>
                                </div>
                            </div>

                            <!-- footer-menu - start -->
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="footer-menu">
                                    <ul>
                                        
                                        <li><a href="/about">About us</a></li>
                                        
                                        <li><a href="#!">Privacy policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    <!-- Scripts -->
    @section('scripts')
        <!-- framework - jquery include -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- carousel jquery include -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <!-- calendar jquery include -->
        <script src="{{ asset('js/atc.min.js') }}"></script>

        <!-- others jquery include -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jarallax.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/create-fanclub.js') }}"></script>

        <!-- gallery img loaded - jqury include -->
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        
        <!-- multy count down - jqury include -->
        <script src="{{ asset('js/jquery.countdown.js') }}"></script>

        <!-- custom jquery include -->
        <script src="{{ asset('js/custom.js') }}"></script>
    @show

</html>
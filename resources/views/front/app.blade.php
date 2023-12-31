<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>@yield('title')</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('css/jquery.nice-number.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">

    <style>
        .singel-course-2>.thum .image>img,
        .singel-course .thum .image img {
            height: 300px;
            object-fit: cover
        }

    </style>
    @yield('css')
</head>
<style>
    th {
        background-color: #07294d;
        color: white;
    }

    a {
        color: black;
    }
    a.text-white:hover{
            color:#FEC600;
        }
</style>

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">

    <div class="header-top d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{ asset('images/all-icon/call.png') }}" alt="icon"><span>(124) 123 675
                                    598</span></li>
                            <li><img src="{{ asset('images/all-icon/email.png') }}"
                                    alt="icon"><span>info@yourmail.com</span></li>
                            <li><img src="{{ asset('images/all-icon/map.png') }}" alt="icon"><span>127/5 Mark
                                    street, New york</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header-social text-lg-right text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    @if (Auth::user())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                class="sidebar-link waves-effect waves-dark sidebar-link btn-out text-white"
                                :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    @else
                        <a class="text-white" href="{{ route('login') }}">Log In</a>
                        <div class="d-inline"><span class="text-white">/</span></div>
                         <a class="text-white"  href="{{ route('register') }}">Sign Up</a>
                    @endif

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="navigation navigation-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index-3.html">
                            <img src="{{ asset('images/log.png') }}" width="160" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="active" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses.php">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="events.php">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teachers.php">Our teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                    <div class="right-icon text-right">
                        <ul>
                            <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                        </ul>
                    </div> <!-- right icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>

<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="q" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>

<!--====== SEARCH BOX PART ENDS ======-->

@yield('content')

<!--====== FOOTER PART START ======-->

<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('images/la.png') }}" alt="Logo"
                                    width="300"></a>
                        </div>
                        <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id
                            elit. Duis sed odio sit amet nibh vulputate.</p>
                        <ul class="mt-20">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Sitemap</h6>
                        </div>
                        <ul>
                            <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                            <li><a href="courses.html"><i class="fa fa-angle-right"></i>Courses</a></li>
                            <li><a href="blog.html"><i class="fa fa-angle-right"></i>News</a></li>
                            <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            <li><a href="shop.html"><i class="fa fa-angle-right"></i>Shop</a></li>
                            <li><a href="teachers.html"><i class="fa fa-angle-right"></i>Teachers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link support mt-40">
                        <div class="footer-title pb-25">
                            <h6>Support</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                        </ul>
                    </div> <!-- support -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>143 castle road 517 district, kiyev port south Canada</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+3 123 456 789</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>info@yourmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->

    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">

                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->








<!--====== jquery js ======-->
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('js/slick.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Counter Up js ======-->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

<!--====== Nice Select js ======-->
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>

<!--====== Nice Number js ======-->
<script src="{{ asset('js/jquery.nice-number.min.js') }}"></script>

<!--====== Count Down js ======-->
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>

<!--====== Validator js ======-->
<script src="{{ asset('js/validator.min.js') }}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('js/ajax-contact.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('js/main.js') }}"></script>

<!--====== Map js ======-->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ') }}">
</script>
<script src="{{ asset('js/map-script.js') }}"></script>
@yield('js')

</body>

</html>

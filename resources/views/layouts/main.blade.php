<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <!-- Jquery Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Cleaning</title>

    @stack('extra-css')
</head>

<body>

    <!--Topbar Start-->
    <div class="topbar-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <ul class="social_media style_none">
                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="top_right">
                        <div class="topbar_phone mr-4"><a href="{{ route('login') }}">Login </a></div>
                        <div class="topbar_phone"><a href="{{ route('register') }}">Register </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Topbar End-->

    <!--Header Start-->
    <div class="header-wrap wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
                    <div class="header_logo"><a href="#"><img alt="" src="images/logo.png"></a></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                            class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Navbar</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active"><a class="nav-link" href="index-2.html"> Home </a></li>
                                <li class="nav-item"><a class="nav-link" href="services.html"> Services <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                                    <ul class="submenu">
                                        <li><a href="services.html">Cleaning Services</a></li>
                                        <li><a href="services.html">House Cleaning</a></li>
                                        <li><a href="services.html">Cleaning Services</a></li>
                                        <li><a href="services.html">Professional Cleaning</a></li>
                                        <li><a href="services.html">Window Cleaning</a></li>
                                        <li><a href="services.html">Domestic Cleaning</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#."> Projects <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                                    <ul class="submenu">
                                        <li><a href="project.html">Project 01</a></li>
                                        <li><a href="project2.html">Project 02</a></li>
                                        <li><a href="project_details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#."> Pages <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="faqs.html">Faqs</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="pricing.html">Pricing Table</a></li>
                                        <li><a href="404.html">Page 404 </a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog.html"> Blog <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog_grid.html">Blog Grid with Sidebar</a></li>
                                        <li><a href="blog_list.html">Blog List</a></li>
                                        <li><a href="blog_single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact.page') }}"> Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Header End-->

    {{-- Main Content --}}
    @yield('content')

    <!--Footer Start-->
    <footer class="footer bg-style wow fadeInUp">
        <div class="container">
            <div class="footer-upper">
                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget quick-links">
                            <h3 class="title">Quick links</h3>
                            <ul>
                                <li><a href="#."> Cleaning Services</a> </li>
                                <li><a href="#.">House Cleaning</a> </li>
                                <li><a href="#.">Cleaning Services</a> </li>
                                <li><a href="#.">Professional Cleaning</a> </li>
                                <li><a href="#.">Window Cleaning</a> </li>
                                <li><a href="#.">Domestic Cleaning</a> </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget quick-links">
                            <h3 class="title">Quick links</h3>
                            <ul>
                                <li><a href="#."> Home</a> </li>
                                <li><a href="#."> Properties</a> </li>
                                <li><a href="#."> Agents</a> </li>
                                <li><a href="#."> Blogs</a> </li>
                                <li><a href="#."> Contact Us</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="footer-widget contact">
                            <h3 class="title">Recent Posts</h3>
                            <ul class="property_sec">
                                <li>
                                    <div class="rec_proprty">
                                        <div class="servicesImg"><img alt="" src="images/property_small01.jpg"></div>
                                        <div class="property_info">
                                            <h4><a href="#">1324 Tennessee Road</a></h4>
                                            <p>Minneapolis, MN 55402</p>
                                            <div class="priceWrp">$98.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="rec_proprty">
                                        <div class="servicesImg"><img alt="" src="images/property_small02.jpg"></div>
                                        <div class="property_info">
                                            <h4><a href="#">1324 Tennessee Road</a></h4>
                                            <p>Minneapolis, MN 55402</p>
                                            <div class="priceWrp">$98.00</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-widget contact">
                            <h3 class="title">Contact Info</h3>
                            <ul class="footer-adress">
                                <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>123 Lorem Ipsum, 45 sit Atlanta</span> </li>
                                <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:info@realestate.com"> info@realestate.com </a></span> </li>
                                <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:7704282433"> 770-123-4567</a></span> </li>
                            </ul>
                            <div class="social-icons footer_icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">Copyright © 2020 CleanX. All rights reserved</div>
    </footer>
    <!--Footer End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- Jquery Fancybox -->
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/animate.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script>
        new WOW().init();

    </script>
    <!-- general script file -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('extra-js')
</body>

</html>

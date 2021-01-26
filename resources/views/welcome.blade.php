@extends('layouts.main')

@section('content')
    <!-- Revolution slider start -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" alt="" src="images/dummy.png" data-lazyload="images/banner2.jpg">
                    <div class="caption lft large-title tp-resizeme slidertext_hover" data-x="left" data-y="180" data-speed="600" data-start="1600">Welcome to Eco Clean</div>
                    <div class="caption lft large-title tp-resizeme slidertext2" data-x="left" data-y="190" data-speed="600" data-start="2200">Cleaning Services</div>
                    <div class="caption lfb large-title tp-resizeme slidertext3" data-x="left" data-y="310" data-speed="600" data-start="2800">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /> Donec
                        convallis fringilla nibh ac laoreet.</div>
                    <div class="caption lfb large-title tp-resizeme slidertext4 slider_btn" data-x="left" data-y="400" data-speed="600" data-start="3500"><a href="#">Learn More </a></div>
                    <div class="caption lfb large-title tp-resizeme slidertext4" data-x="240" data-y="400" data-speed="600" data-start="4100"><a href="#">Contact Us </a></div>
                </li>

                <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" alt="" src="images/dummy.png" data-lazyload="images/banner.jpg">
                    <div class="caption lft large-title tp-resizeme slidertext_hover" data-x="left" data-y="180" data-speed="600" data-start="1600">Welcome to Eco Clean</div>
                    <div class="caption lft large-title tp-resizeme slidertext2" data-x="left" data-y="190" data-speed="600" data-start="2200">Cleaning Services</div>
                    <div class="caption lfb large-title tp-resizeme slidertext3" data-x="left" data-y="310" data-speed="600" data-start="2800">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /> Donec
                        convallis fringilla nibh ac laoreet.</div>
                    <div class="caption lfb large-title tp-resizeme slidertext4 slider_btn" data-x="left" data-y="400" data-speed="600" data-start="3500"><a href="#">Learn More </a></div>
                    <div class="caption lfb large-title tp-resizeme slidertext4" data-x="240" data-y="400" data-speed="600" data-start="4100"><a href="#">Contact Us </a></div>
                </li>

            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->


    <!-- About Start -->
    <div class="about-wrap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="aboutImg"><img src="images/aboutImg.png" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="about_box">
                        <div class="title">
                            <p>About Us</p>
                            <h1>The Best help in <span>cleaning the House.</span></h1>
                        </div>
                        <div class="subText">Aliquam convallis faucibus sem vitae imperdiet.</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum pellentesque convallis. Ut mollis libero eu massa imperdiet faucibus vitae non diam.</p>
                        <ul class="bullet_icons">
                            <li>Neat & Cleaning Service</li>
                            <li>Office & Property Clean</li>
                            <li>Expert Cleaner</li>
                            <li>24/7 Online Support</li>
                        </ul>
                        <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!--Services Start-->
    <div class="services-wrap wow fadeInUp">
        <div class="container">
            <div class="title title_center">
                <h1>Our Services</h1>
            </div>

            <!--Row Start-->
            <ul class="row">
                @foreach ($services as $service)
                    <!--col-lg-4 Start-->
                    <li class="col-lg-4">
                        <div class="services_box wow fadeInUp">
                            <div class="servicesImg"><img alt="" src="{{ $service->image }}"></div>
                            <div class="service-price"><span>{{ $service->label }}</span></div>
                            <h3><a href="#">{{ Str::limit($service->title, 20) }}</a></h3>
                            <p>{{ Str::limit($service->description, 100) }}</p>
                        </div>
                    </li>
                    <!--col-lg-4 End-->
                @endforeach
            </ul>
            <!--Row End-->

        </div>
    </div>
    <!--Services End-->




    <!--How it Work Start-->
    <div class="work-wrap wow fadeInUp">
        <div class="container">
            <div class="title title_center">
                <h1>How it Works</h1>
            </div>
            <ul class="fix text-center row">
                <!--Start Single working  Box-->
                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">
                    <div class="icon-holder"><img src="images/step01.png"></div>
                    <div class="text-holder">
                        <h4><a href="#">Schedule Your<br> Experience</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis leo eu nulla rutrum fringilla.</p>
                    </div>
                </li>
                <!--End Single working  Box-->
                <!--Start Single working  Box-->
                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">

                    <div class="icon-holder"><img src="images/step02.png"></div>
                    <div class="text-holder">
                        <h4><a href="#">Meet Your<br> Cleaning Expert</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis leo eu nulla rutrum fringilla.</p>
                    </div>
                </li>
                <!--End Single working  Box-->
                <!--Start Single working  Box-->
                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">


                    <div class="icon-holder"><img src="images/step03.png"></div>
                    <div class="text-holder">
                        <h4><a href="#">Get Professional<br> Advices</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis leo eu nulla rutrum fringilla.</p>
                    </div>


                </li>
                <!--End Single working  Box-->
                <!--Start Single working  Box-->
                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">



                    <div class="icon-holder"><img src="images/step04.png"></div>
                    <div class="text-holder">
                        <h4><a href="#">Get a Best<br> Cleaning Service</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis leo eu nulla rutrum fringilla.</p>
                    </div>


                </li>
                <!--End Single working Box-->
            </ul>
        </div>
    </div>
    <!--How it Work Start-->



    <!-- Gallery Start -->
    <section class="gallery-wrap wow fadeInUp">
        <div class="container">
            <div class="title title_center">
                <h1>Our Gallery</h1>
            </div>
            <ul class="row style_none">
                <li class="col-lg-4 col-md-6">
                    <div class="galleryImg"><img src="images/gallery/gallery01.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <a href="images/gallery/gallery01.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="gallery_info">
                                    <h3>Commerial Cleaning</h3>
                                    <p>Office Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-md-6">
                    <div class="galleryImg"><img src="images/gallery/gallery02.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <a href="images/gallery/gallery02.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="gallery_info">
                                    <h3>Commerial Cleaning</h3>
                                    <p>Office Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-md-6">
                    <div class="galleryImg"><img src="images/gallery/gallery03.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <a href="images/gallery/gallery03.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="gallery_info">
                                    <h3>Commerial Cleaning</h3>
                                    <p>Office Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-md-6">
                    <div class="galleryImg"><img src="images/gallery/gallery04.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <a href="images/gallery/gallery04.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="gallery_info">
                                    <h3>Commerial Cleaning</h3>
                                    <p>Office Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-md-6">
                    <div class="galleryImg"><img src="images/gallery/gallery05.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <a href="images/gallery/gallery05.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="gallery_info">
                                    <h3>Commerial Cleaning</h3>
                                    <p>Office Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 col-md-6">
                    <div class="galleryImg"><img src="images/gallery/gallery06.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content">
                                <a href="images/gallery/gallery06.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="gallery_info">
                                    <h3>Commerial Cleaning</h3>
                                    <p>Office Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Gallery End -->


    <!-- Commerial Start -->
    <div class="commerial_wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="commerialWrp">
                        <h3>Commerial Cleaning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra orci id nunc finibus, at condimentum lectus placerat. Nullam sapien quam, maximus a rutrum at, iaculis vitae est. </p>
                        <div class="learnmore"><a href="#">Learn More</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="commerial_wrapWrp residence_bg">
                        <h3>Residential Cleaning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra orci id nunc finibus, at condimentum lectus placerat. Nullam sapien quam, maximus a rutrum at, iaculis vitae est. </p>
                        <div class="learnmore"><a href="#">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Commerial End -->


    <!-- Blog Start -->
    <div class="blog-wrap">
        <div class="container">
            <div class="title title_center">
                <h1>Our Blogs</h1>
            </div>
            <ul class="row blog_post">
                <li class="col-lg-4">
                    <div class="services_box wow fadeInUp">
                        <div class="servicesImg"><img alt="" src="images/blog01.jpg"></div>
                        <h3><a href="#">Morbi dolor metus, convallis vitae bibendum</a></h3>
                        <div class="post-meta"> <span>June 21, 2020</span> <span>15 Comments</span> <span>15 Likes</span> </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </li>

                <li class="col-lg-4">
                    <div class="services_box wow fadeInUp">
                        <div class="servicesImg"><img alt="" src="images/blog02.jpg"></div>
                        <h3><a href="#">Morbi metus bibendum</a></h3>
                        <div class="post-meta"> <span>June 21, 2020</span> <span>15 Comments</span> <span>15 Likes</span> </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus, erat nec sagittis imperdiet, erat libero suscipit. </p>
                    </div>
                </li>


                <li class="col-lg-4">
                    <div class="services_box wow fadeInUp">
                        <div class="servicesImg"><img alt="" src="images/blog03.jpg"></div>
                        <h3><a href="#">Morbi dolor metus, convallis vitae bibendum</a></h3>
                        <div class="post-meta"> <span>June 21, 2020</span> <span>15 Comments</span> <span>15 Likes</span> </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Appointment Start -->
    <section class="appointment-area pt-120 pb-120 bg_img" data-overlay="6">
        <div class="container">
            <div class="title title_center">
                <h1>Make An Appointment</h1>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="appointment-form">
                        <div role="form" class="wpcf7">
                            <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                            <form>
                                <div class="row mt-none-30">

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control " placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" placeholder="Your Address">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="nice-select wide select_option" tabindex="0"> <span class="current">Select Category</span>
                                                <ul class="list">
                                                    <li data-value="Property Status" data-display="Property Status" class="option selected focus">Property Status</li>
                                                    <li data-value="service01" class="option">Commercial Services</li>
                                                    <li data-value="service02" class="option">Ressidential Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <input type="date" name="phone" class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group appoint_btn">
                                            <button type="submit" class="submit-btn">Confirm Appointment</button>

                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment End -->


    <!-- Get In Touch start -->
    <div class="get-wrap">
        <div class="container">
            <div class="title">
                <h1>Get in touch</h1>
            </div>
            <p>We are determined to carry on our mission for as long as there will be a demand for that kind of care!</p>
            <div class="callText">Call us! we are available 24/7</div>
            <div class="phonewrp"><a href="#">(770) 132 4657</a></div>
        </div>
    </div>
    <!-- Get In Touch End -->


    <!-- our team start -->
    <section class="our_team_wrap wow fadeInUp">
        <div class="container">
            <div class="title title_center">
                <h1>Meet Our Team</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team_wrp">
                        <div class="team_member  wow fadeInUp">
                            <div class="team_img"><img alt="" src="images/team_1.png">
                                <div class="team_icons">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team_name">
                                <h3>David Strozier</h3>
                                <p>Cleaner</p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team_wrp">
                        <div class="team_member  wow fadeInUp">
                            <div class="team_img"><img alt="" src="images/team_2.png">
                                <div class="team_icons">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team_name">
                                <h3>David Strozier</h3>
                                <p>Cleaner</p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_wrp">
                        <div class="team_member  wow fadeInUp">
                            <div class="team_img"><img alt="" src="images/team_3.png">
                                <div class="team_icons">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team_name">
                                <h3>David Strozier</h3>
                                <p>Cleaner</p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- our team  end -->


    <!--Newsletter Start-->
    <div class="newsletter-wrap wow fadeInUp">
        <div class="container">

            <div class="row">
                <div class="col-lg-5">
                    <div class="title">
                        <h1><span>Stay in Loop</span> Join our Newsletter</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="news-info">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Your Email Address">
                                <div class="form_icon"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="submit" class="sigup" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter End-->
@endsection

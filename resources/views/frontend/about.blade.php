@extends('layouts')
@section('content')
    
<div class="main">
    <div class="body-overlay"></div>

    <div class="product-section contact-body">
        @include('navbar')
        <div class="contact-us-content">
            <div class="slider-content">
                <div class="parallax-slide banner-slide" style='background:url("img/project-banner10.jpg")'>
                </div>
                <div class="about_content" data-wow-duration="2s">
                    <div class="container">
                        <div class="row">
                            <div class="col-12  col-lg-8 offset-lg-2 text-center wow slideInUp" data-wow-duration="2s">
                                <h1 class="heading">A Web Studio helping the world to gain some success</h1>
                                <p class="para_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere nisi est, sed ullamcorper nibh volutpat at. In rutrum, metus ut posuere gravida, tellus lacus faucibus lectus, sed cursused eros ligula non odio. Suspendisse volutpat sagittis sapien. Curabitur quis malesuada ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_services">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4 wow bounceInUp" data-wow-duration="2s">
                                <div class="service-card text-center">
                                    <div class="image-holder">
                                        <i class="lni-pencil-alt"></i>
                                    </div>
                                    <h3 class="service-card-heading">Branding Design</h3>
                                    <p class="service-card-detail">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit augue diam, accumsan.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 wow bounceInUp" data-wow-duration="2s">
                                <div class="service-card text-center">
                                    <div class="image-holder">
                                        <i class="lni-cog"></i>
                                    </div>
                                    <h3 class="service-card-heading">Branding Design</h3>
                                    <p class="service-card-detail">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit augue diam, accumsan.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 wow bounceInUp" data-wow-duration="2s">
                                <div class="service-card text-center">
                                    <div class="image-holder">
                                        <i class="lni-code"></i>
                                    </div>
                                    <h3 class="service-card-heading">Branding Design</h3>
                                    <p class="service-card-detail">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit augue diam, accumsan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_content wow slideInUp" data-wow-duration="2s">
                    <div class="container">
                        <div class="row">
                            <div class="col-12  col-lg-8 offset-lg-2 text-center">
                                <h1 class="heading">A Web Studio helping the world to gain some success</h1>
                                <p class="para_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere nisi est, sed ullamcorper nibh volutpat at. In rutrum, metus ut posuere gravida, tellus lacus faucibus lectus, sed cursused eros ligula non odio. Suspendisse volutpat sagittis sapien. Curabitur quis malesuada ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Clients content start-->
                <div id="client-sec" class="client-sec parallax-window cursor-light">
                    <div class="client-sec-overlay"></div>
                    <div class="clients owl-carousel owl-theme no-gutters">
                        <div class="item client-container">
                            <div class="row no-gutters client-img-overlay text-center">
                                <div class="col-10 offset-1 col-lg-6 offset-lg-3 wow zoomIn" data-wow-duration="2s">
                                    <span class="client-symbol-qoute"><i class="fas fa-quote-left text-left"></i></span>
                                    <p class="client-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere nisi est, sed ullamcorper nibh volutpat at. In rutrum, metus ut posuere gravida, tellus lacus faucibus lectus, sed cursus eros ligula non odio. Suspendisse volutpat sagittis sapien. Curabitur quis malesuada ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="client-img-holder rounded-circle center-block">
                                <img src="img\client1.jpg" class="rounded-circle" alt="client1">
                            </div>
                            <div class="client-detail col-12 text-center">
                                <h4 class="client-name">Ellizabeth Taylor</h4>
                                <p class="client-des">Amazon</p>
                            </div>
                        </div>
                        <div class="item client-container">
                            <div class="row no-gutters client-img-overlay text-center">
                                <div class="col-10 offset-1 col-lg-6 offset-lg-3 wow zoomIn" data-wow-duration="2s">
                                    <span class="client-symbol-qoute"><i class="fas fa-quote-left text-left"></i></span>
                                    <p class="client-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere nisi est, sed ullamcorper nibh volutpat at. In rutrum, metus ut posuere gravida, tellus lacus faucibus lectus, sed cursus eros ligula non odio. Suspendisse volutpat sagittis sapien. Curabitur quis malesuada ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="client-img-holder rounded-circle center-block">
                                <img src="img\client2.png" class="rounded-circle" alt="client1">
                            </div>
                            <div class="client-detail col-12 text-center">
                                <h4 class="client-name">Ellizabeth Taylor</h4>
                                <p class="client-des">Amazon</p>
                            </div>
                        </div>
                        <div class="item client-container">
                            <div class="row no-gutters client-img-overlay text-center">
                                <div class="col-10 offset-1 col-lg-6 offset-lg-3 wow zoomIn" data-wow-duration="2s">
                                    <span class="client-symbol-qoute"><i class="fas fa-quote-left text-left"></i></span>
                                    <p class="client-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere nisi est, sed ullamcorper nibh volutpat at. In rutrum, metus ut posuere gravida, tellus lacus faucibus lectus, sed cursus eros ligula non odio. Suspendisse volutpat sagittis sapien. Curabitur quis malesuada ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="client-img-holder rounded-circle center-block">
                                <img src="img\client3.png" class="rounded-circle" alt="client1">
                            </div>
                            <div class="client-detail col-12 text-center">
                                <h4 class="client-name">Ellizabeth Taylor</h4>
                                <p class="client-des">Amazon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Clients content end-->
                <div class="row">
                    <div class="col-12 text-center footer_rights pb-5">
                        <p>&copy; 2019 MegaOne. Made With Love by <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--END ABOUT US SECTION -->

        <!--START SIDEBAR SECTION -->
        <div class="sidebar-section">
            <div class="side-nav-btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="social-icons">
                <li><a href="#." class="facebook_bg_hvr2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#." class="twitter_bg_hvr2"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#." class="linkdin_bg_hvr2"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                <li><a href="#." class="instagram_bg_hvr2"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <!--END SIDEBAR SECTION -->

        <!--START OVERLAY MENU -->
        @include('navsidebar')
        <!--END OVERLAY MENU -->
    </div>
</div>

@endsection

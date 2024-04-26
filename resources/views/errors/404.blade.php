@extends('layouts')
@section('content')
    <!--END PAGE LOADER-->


    <!--START MAIN SECTION -->
    <div class="main">
        <div class="body-overlay"></div>
        <div class="product-section contact-body">
            @include('navbar')


            <!--START HEADER NAVBAR-->
            <!-- END HEADER NAVBAR  -->

            <!--START 404 INNER CONTEND-->
            <div class="contact-us-content">
                <div class="slider-content">
                    <div class="parallax-slide banner-slide" style='background:url("{{ asset('images/img/project-banner14.jpg') }}")'>
                    </div>
                    <div class="about_content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center four0fourpage">
                                    <div class="error">
                                        <h1>404</h1>
                                        <h2>404</h2>
                                    </div>
                                    <p class="heading_space">We are sorry, the page you want isn’t here anymore. May be
                                        one of the links below can help !</p>
                                    <div class="actions">
                                        <a href="{{route('frontend.home')}}"
                                            class="btn view-bag rounded-pill wow fadeInLeft">Back To Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END 404 INNER CONTEND-->

            <!--START SIDEBAR SECTION -->
            <div class="sidebar-section">
                <div class="side-nav-btn" id="sidemenu_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="social-icons">
                    <li><a href="#." class="facebook_bg_hvr2"><i class="fab fa-facebook-f"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#." class="twitter_bg_hvr2"><i class="fab fa-twitter"
                                aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkdin_bg_hvr2"><i class="fab fa-linkedin-in"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#." class="instagram_bg_hvr2"><i class="fab fa-instagram"
                                aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <!--END SIDEBAR SECTION -->
            @include('navsidebar')
            <!--START OVERLAY MENU -->

            <!-- End Overlay Menu -->
        </div>
    </div>
    <!--END MAIN SECTION-->
    <!-- JavaScript -->
    @endsection
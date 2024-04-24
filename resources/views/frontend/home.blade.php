@extends('layouts')
@section('content')
<div class="main">
    <div class="body-overlay" data-value="dismis"></div>

    <!--START PRODUCT SECTION -->
    <div class="product-section">
        <!--START HEADER -->
        @include('navbar')
        <!--END HEADER -->
        <div class="row inner-product-sec">
            <div class="left-area">
                <p class="d-none d-lg-block"></p>
            </div>
            <div class="right-area">
                <div id="particles"></div>
                <div class="container container-setting">
                    <div class="row text-center">
                        <!--  START PRODUCT SLIDER  -->
                        <div class="col-sm-12 col-md-8 col-lg-12 box1 text-center order-2">
                            <div class="ribbon">
                                <div class="wrap">
                                    <span class="ribbon6">1.500.000 VND</span>
                                </div>
                            </div>
                            <!-- Swiper-->
                            <div class="swiper-container" id="product-slider" style="overflow: hidden;">
                                <div class="swiper-wrapper wow slideInLeft" data-wow-duration="2s">
                                    <div class="swiper-slide">

                                        <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="{{ asset('images/img/featured_product.png') }}" alt="featured product 4"></a></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="{{ asset('images/img/featured_product1.png') }}" alt="featured product 4"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="{{ asset('images/img/featured_product2.png') }}" alt="featured product 4"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="{{ asset('images/img/featured_product3.png') }}" alt="featured product 4"></a>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                            </div>
                            <div class="swiper-dots"></div>
                        </div>
                        <!--  END PRODUCT SLIDER  -->

                        <div class="col-sm-12 featured_title d-sm-block d-md-block d-lg-none order-1">
                            <h4 class="text-center text-lg-left"><span>Shoes</span> Shop</h4>
                            <p class="featured_description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                            <div class="button-1 rounded-pill">
                                <a href="{{route('frontend.product')}}" class="rounded-pill">SHOP NOW </a>
                            </div>
                        </div>
                    </div>

                    <div class="featured_products">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-3"></div>
                            <div class="col-12 col-lg-9 offset-lg-3 detail-area">
                                <div class="row">
                                    <div class="col-12 featured_title d-none d-lg-block">
                                        <h4 class="text-center text-md-left"><span>Shoes</span> Store</h4>
                                        <p class="">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                        <div class="button-1 rounded-pill">
                                            <a href="product\product-listing-light.html" class="rounded-pill">SHOW NOW </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 featured_items wow fadeIn" data-wow-duration="2s">
                                        <div class="featured-items owl-carousel owl-theme">
                                            <div class="item pr-2">
                                                <a href="javascript:void(0)" onclick="open_model_window('model-window1');">
                                                    <div class="img-holder">
                                                        <img src="{{ asset('images/img\item1.png') }}" alt="items">
                                                        <div class="plus"><i class="fa-plus"></i></div>
                                                    </div>
                                                </a>
                                                <p class="text-center product-price">$103.00</p>
                                            </div>
                                            <div class="item pr-2">
                                                <a href="javascript:void(0)" onclick="open_model_window('model-window2');">
                                                    <div class="img-holder">
                                                        <img src="{{ asset('images/img\item2.png') }}" alt="items">
                                                        <div class="plus"><i class="fa-plus"></i></div>
                                                    </div>
                                                </a>
                                                <p class="text-center product-price">$103.00</p>
                                            </div>
                                            <div class="item pr-2">
                                                <a href="javascript:void(0);" onclick="open_model_window('model-window3');">
                                                    <div class="img-holder">
                                                        <img src="{{ asset('images/img\item3.png') }}" alt="items">
                                                        <div class="plus"><i class="fa-plus"></i></div>
                                                    </div>
                                                </a>
                                                <p class="text-center product-price">$103.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  START FOOTER AREA -->
                                    <div class="col-12 featured_footer">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-center text-md-left">Neque porro quisquam est qui dolorem ipsum quia dolor sit velit. Neque porromrion quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                            </div>
                                            <div class="col-12 text-center text-lg-left">
                                                <div class="row">
                                                    <div class="terms col-sm-12 col-md-4  col-lg-4">
                                                        <h4>Free Shipping</h4>
                                                        <p>GREAT FROM HEBES</p>
                                                    </div>
                                                    <div class="terms col-sm-12  col-md-4 col-lg-4">
                                                        <h4>Secure Payment</h4>
                                                        <p>100% SECURE PAYMENT</p>
                                                    </div>
                                                    <div class="terms col-sm-12 col-md-4  col-lg-4">
                                                        <h4>30 Days Return</h4>
                                                        <p>SIMPLY RETURN 3 DAYS</p>
                                                    </div>
                                                    <div class="col-md-12 d-block d-lg-none">
                                                        <p>© 2019 MegaOne.  Made by Themes Industry</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  END FOOTER AREA -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--START PRODUCT SECTION -->

    <!--START SIDEBAR SECTION -->
    <div class="sidebar-section">
        <div class="side-nav-btn site-nav-alignment" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="social-icons">
            <li><a href="#." class="facebook_bg_hvr2 wow slideInLeft" data-wow-duration="2.1s"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#." class="twitter_bg_hvr2 wow slideInRight" data-wow-duration="2.1s"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#." class="linkdin_bg_hvr2 wow slideInLeft" data-wow-duration="2.1s"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            <li><a href="#." class="instagram_bg_hvr2 wow slideInRight" data-wow-duration="2.1s"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <!--END SIDEBAR SECTION -->

    <!--START OVERLAY MENU -->
    @include('navsidebar')
    <!-- End OVERLAY Menu -->
</div>

<div id="modal-data"></div>

@endsection
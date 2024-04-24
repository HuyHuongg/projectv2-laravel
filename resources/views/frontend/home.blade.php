<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="Product is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>Product MegaOne</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/fe/favicon.ico') }}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('css/fe/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('css/fe/') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/wow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/LineIcons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/') }}">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="{{ asset('css/fe/style.css') }}">
</head>
<style>
    .cart-counter {
        position: relative;
        bottom: 10px;
        font-size: 10px;
        color: white;
        border-radius: 50%;
    }

    .add-cart {
        color: black;
        padding: 15px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        border-radius: 15px;
        position: relative;
    }
</style>

<body>

    <!--START PAGE LOADER-->
    <div id="loader">
        <div class="loader center-block">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div>
    <!--END PAGE LOADER-->

    <!--START MODEL WINDOW LOADER-->
    <div id="model-loader" class="center-block">
        <div class="loader center-block">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div>
    <!--END MODEL WINDOW LOADER-->

    <!--START MAIN-->
    <div class="main">
        <div class="body-overlay" data-value="dismis"></div>

        <!--START PRODUCT SECTION -->
        <div class="product-section">
            <!--START HEADER -->
            <header>
                <div class="container container-setting">
                    <div class="row justify-content-center">
                        <!-- START HEADER NAV   -->
                        <nav class="navbar navbar-expand  navbar-light bg-light">
                            <a href="index-product.html"><img class="d-none d-lg-block" src="product\img\logo.png" class="manage-logo" alt="logo"></a>
                            <h4 class="brand-logo d-block d-lg-none"> <a href="index-product.html"><img src="product\img\logo-white.png" alt="white-logo"></a></h4>
                            <div class="menu-tog d-block d-md-none" id="sidemenu_toggle1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="collapse navbar-collapse transparent-nav" id="navbarTogglerDemo03">
                                <ul class="navbar-nav ml-auto header-nav">
                                    <li class="nav-item dropdown cart-item">
                                        <form id="addToCartForm" action="{{ route('frontend.addToCart') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#" class="add-cart" onclick="event.preventDefault(); document.getElementById('addToCartForm').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 56 56">
                                                <path fill="white" d="M20.008 39.649H47.36c.913 0 1.71-.75 1.71-1.758s-.797-1.758-1.71-1.758H20.406c-1.336 0-2.156-.938-2.367-2.367l-.375-2.461h29.742c3.422 0 5.18-2.11 5.672-5.461l1.875-12.399a7.2 7.2 0 0 0 .094-.89c0-1.125-.844-1.899-2.133-1.899H14.641l-.446-2.976c-.234-1.805-.89-2.72-3.28-2.72H2.687c-.937 0-1.734.822-1.734 1.76c0 .96.797 1.781 1.735 1.781h7.921l3.75 25.734c.493 3.328 2.25 5.414 5.649 5.414m31.054-25.454L49.4 25.422c-.188 1.453-.961 2.344-2.344 2.344l-29.906.023l-1.993-13.594ZM21.86 51.04a3.766 3.766 0 0 0 3.797-3.797a3.781 3.781 0 0 0-3.797-3.797c-2.132 0-3.82 1.688-3.82 3.797c0 2.133 1.688 3.797 3.82 3.797m21.914 0c2.133 0 3.82-1.664 3.82-3.797c0-2.11-1.687-3.797-3.82-3.797c-2.109 0-3.82 1.688-3.82 3.797c0 2.133 1.711 3.797 3.82 3.797" />
                                            </svg>
                                            <span id="cartCounter" class="cart-counter">0</span>
                                        </a>
                                        <div class="dropdown-menu sm-menu mini-cart">
                                            <div class="mini-cart-body">
                                                <div class="inner-card">
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="product\img\m1.jpg" class="align-self-center" alt="cartitem">
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="product\img\m2.jpg" class="align-self-center" alt="cartitem">
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="product\img\m1.jpg" class="align-self-center" alt="cartitem">
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="product\img\m2.jpg" class="align-self-center" alt="cartitem">
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-footer">
                                                <div class="subtotal">
                                                    <span class="total-title">Total: </span>
                                                    <span class="total-price">
                                                        <span class="Price-amount">
                                                            $135
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <button type="button" class="btn view-bag rounded-pill">View Bag</button>
                                                    <button type="button" class="btn view-cart  btn-medium btn-gradient rounded-pill">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- END HEADER NAV   -->
                    </div>
                </div>
            </header>
            <!--END HEADER -->
            <div class="row inner-product-sec">
                <div class="left-area">
                    <p class="d-none d-lg-block">© 2019 MegaOne. Made by Themes Industry</p>
                </div>
                <div class="right-area">
                    <div id="particles"></div>
                    <div class="container container-setting">
                        <div class="row text-center">
                            <!--  START PRODUCT SLIDER  -->
                            <div class="col-sm-12 col-md-8 col-lg-12 box1 text-center order-2">
                                <div class="ribbon">
                                    <div class="wrap">
                                        <span class="ribbon6">$ 150.00</span>
                                    </div>
                                </div>
                                <!-- Swiper-->
                                <div class="swiper-container" id="product-slider" style="overflow: hidden;">
                                    <div class="swiper-wrapper wow slideInLeft" data-wow-duration="2s">
                                        <div class="swiper-slide">
                                            <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="product\img\featured_product.png" alt="featured product 4"></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="product\img\featured_product1.png" alt="featured product 4"></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="product\img\featured_product2.png" alt="featured product 4"></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a onclick="slide_window('model-window4');" style="cursor: pointer"><img src="product\img\featured_product3.png" alt="featured product 4"></a>
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
                                    <a href="product\product-listing-light.html" class="rounded-pill">SHOP NOW </a>
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
                                                            <img src="product\img\item1.png" alt="items">
                                                            <div class="plus"><i class="lni-plus"></i></div>
                                                        </div>
                                                    </a>
                                                    <p class="text-center product-price">$103.00</p>
                                                </div>
                                                <div class="item pr-2">
                                                    <a href="javascript:void(0)" onclick="open_model_window('model-window2');">
                                                        <div class="img-holder">
                                                            <img src="product\img\item2.png" alt="items">
                                                            <div class="plus"><i class="lni-plus"></i></div>
                                                        </div>
                                                    </a>
                                                    <p class="text-center product-price">$103.00</p>
                                                </div>
                                                <div class="item pr-2">
                                                    <a href="javascript:void(0);" onclick="open_model_window('model-window3');">
                                                        <div class="img-holder">
                                                            <img src="product\img\item3.png" alt="items">
                                                            <div class="plus"><i class="lni-plus"></i></div>
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
                                                            <p>© 2019 MegaOne. Made by Themes Industry</p>
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
        <div class="side-menu-nav">
            <h1 class="sidenav-bg-text">HTH Sneaker</h1>
            <div class="close-side-menu">
                <i class="lni-close cross-sign" id="close-side-menu-nav"></i>
            </div>
            <nav>
                <ul class="side-bar">
                    <li class="nav-item main-item">
                        <a class="nav-link nav-appear" href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item main-item">
                        <a class="nav-link nav-appear" id="demo2">Products <i class="fas fa-caret-right forward"></i></a>
                        <div class="submenu-overlay">
                            <ul class="d-flex justify-content-lg-center">
                                <li class="nav-item d-flex align-items-center">
                                    <a class="sub-menu-nav-appear"><i class="fas fa-arrow-alt-circle-left go-back-btn"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub-menu-nav-appear" href="product\product-listing-dark.html">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub-menu-nav-appear" href="product\product-detail.html">Product Detail Version</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub-menu-nav-appear" href="product\shop-cart.html">Shopping Cart</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item main-item">
                        <a class="nav-link nav-appear" href="https://www.messenger.com/t/274283589104715" target="_blank">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer">
                <ul class="social-icons-simple">
                    <li><a href="#." class="facebook_bg_hvr2 wow fadeInUp"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#." class="twitter_bg_hvr2 wow fadeInDown"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkdin_bg_hvr2 wow fadeInUp"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    <li><a href="#." class="instagram_bg_hvr2 wow fadeInDown"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <p class="whitecolor text-center w-100 wow fadeInDown">&copy; 2019 MegaOne. Made With Love by <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a></p>
            </div>
        </div>
        <!-- End OVERLAY Menu -->
    </div>
    <!--END MAIN-->

    <!--LOAD MODEL WINDOW-->
    <div id="modal-data"></div>
    <!--END LOAD MODEL WINDOW-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the cart counter element
            const cartCounter = document.getElementById('cartCounter');

            // Get the cart items from local storage or initialize to an empty array if not present
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            // Update the cart counter with the length of cart items
            cartCounter.textContent = cartItems.length;
        });
    </script>
    <!-- JavaScript -->
    <script src="{{ asset('js/bundle.min.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('js/parallaxie.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
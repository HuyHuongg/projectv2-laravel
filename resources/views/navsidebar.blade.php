<div class="side-menu-nav">
    <h1 class="sidenav-bg-text">SNEAKER STORE</h1>
    <div class="close-side-menu">
        {{-- <i class="lni-close cross-sign" id="close-side-menu-nav"></i> --}}
        <i class="fa-solid fa-xmark cross-sign" id="close-side-menu-nav"></i>
    </div>
    <nav>
        <ul class="side-bar">
            <li class="nav-item main-item">
                <a class="nav-link nav-appear" href="{{route('frontend.home')}}">Home</a>
            </li>
            <li class="nav-item active main-item">
                <a class="nav-link nav-appear" id="demo1">Blog <i class="fas fa-caret-right forward"></i></a>
                <div class="submenu-overlay">
                    <ul class="d-flex justify-content-lg-center">
                        <li class="nav-item d-flex align-items-center">
                            <a class="sub-menu-nav-appear"><i class="fas fa-arrow-alt-circle-left go-back-btn"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-menu-nav-appear" href="product\blog.html">Standard Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-menu-nav-appear" href="product\single-blog.html">Single Blog</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item main-item">
                <a class="nav-link nav-appear" id="demo2">Products <i class="fas fa-caret-right forward"></i></a>
                <div class="submenu-overlay">
                    <ul class="d-flex justify-content-lg-center">
                        <li class="nav-item d-flex align-items-center">
                            <a class="sub-menu-nav-appear"><i class="fas fa-arrow-alt-circle-left go-back-btn"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-menu-nav-appear" href="{{route('frontend.product')}}">Product</a>
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
                <a class="nav-link nav-appear" id="demo3">Pages <i class="fas fa-caret-right forward"></i></a>
                <div class="submenu-overlay">
                    <ul class="d-flex justify-content-lg-center">
                        <li class="nav-item d-flex align-items-center">
                            <a class="sub-menu-nav-appear"><i class="fas fa-arrow-alt-circle-left go-back-btn"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-menu-nav-appear" href="product\faq.html">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-menu-nav-appear" href="product\404.html">404</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item main-item">
                <a class="nav-link nav-appear" href="product\about-us.html">About Us</a>
            </li>
            <li class="nav-item main-item">
                <a class="nav-link nav-appear" href="product\contact-us.html">Contact Us</a>
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
        <p class="whitecolor text-center w-100 wow fadeInDown"> <a class="web-link" href="http://www.themesindustry.com/" target="_blank"></a></p>
    </div>
</div>
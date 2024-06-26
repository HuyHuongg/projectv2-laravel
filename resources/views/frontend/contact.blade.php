@extends('layouts')
@section('content')
<!--END PAGE LOADER-->

<!--START MAIN SECTION-->
<div class="main">
    <div class="body-overlay"></div>

    <!--START PRODUCT SECTION-->
    <div class="product-section contact-body">
        @include('navbar')

        <!--START HEADER NAVBAR-->
        <!--START CONTACT US-->
        <div class="contact-us-content">
            <div class="slider-content">
                <div id="map" class="mb-3"></div>
            </div>
            <div class="contact-details">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="heading">Let's Get In Touch</h4>
                            <ul class="contact-list">
                                <li><span>Office Telephone :</span> 0393234822</li>
                                <li><span>Mobile :</span> 0998736223</li>
                                <li><span>Email :</span> sneakerstore@gmail.com</li>
                                <li><span>Mon-Fri:</span> 9am to 10pm</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-8 offset-lg-2 text-center">
                            <h4 class="heading">Do you have any Questions?</h4>
                            <div class="contact-form">
                                <form class="contact-form" id="contact-form-data">
                                    <div class="row my-form">
                                        <div class="col-md-12 col-sm-12 mb-2">
                                            <div id="result"></div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input class="form-control" name="userName" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input class="form-control" name="userEmail" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input class="form-control" name="userSubject" placeholder="Subject">
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" name="userMessage" placeholder="Message" rows="7"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn our-btn btn-gradient rounded-pill contact_btn" type="button">Contact Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END CONTACT US-->

    </div>
    <!--END PRODUCT SECTION-->
    <!--START SIDEBAR SECTION-->
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
    <!--END SIDEBAR SECTION-->
    @include('navsidebar')
    <!--START OVERLAY MENU -->
    
    <!-- End Overlay Menu -->

</div>
<!--END MAIN SECTION -->

<!-- JavaScript -->
@endsection
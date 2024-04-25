@extends('layouts')
@section('content')

<!--START MAIN SECTION-->
<div class="main">
    <div class="body-overlay"></div>
    <div class="product-section contact-body">
        @include('navbar')

        <div class="contact-us-content">
            <div class="slider-content">
                <div class="parallax-slide banner-slide" style="background: url('img/product-detail-bg.jpg')"></div>

                <div class="product-section-body">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-3 order-2 order-lg-1 bg-light sticky">
                            <div id="product-filter-nav" class="product-filter-nav">
                                <div class="product-category">
                                    <h5 class="filter-heading text-center text-lg-left">
                                        Category
                                    </h5>
                                    <ul>
                                        <li><a href="#">June </a><span>(2)</span></li>
                                        <li><a href="#">July </a><span>(4)</span></li>
                                        <li><a href="#">Augest </a><span>(2)</span></li>
                                        <li><a href="#">March </a><span>(7)</span></li>
                                        <li><a href="#">May </a><span>(9)</span></li>
                                    </ul>
                                </div>
                                <div class="product-price">
                                    <h5 class="filter-heading">Shop By</h5>
                                    <div id="slider-range"></div>
                                    <p class="price-num" style="color: #0b2e13">
                                        Price: <span id="min-p"></span> <span id="max-p"></span>
                                    </p>
                                </div>

                                <button class="btn our-btn btn-gradient rounded-pill d-block ml-auto mr-auto ml-lg-0">
                                    Filter
                                </button>

                                <div class="product-add">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <img src="img\add.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row R-rite">
                                    <div class="col-12">
                                        <p>
                                            &copy; 2019 MegaOne Made by
                                            <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-9 order-1 order-lg-2">
                            <div class="product-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb text-center text-lg-left">
                                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
                                        <li class="breadcrumb-item">
                                            <a href="#">categories</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            <a href="#">sports</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">{{$productDetails->Name_sneaker}}</a>
                                        </li>
                                    </ol>
                                </nav>
                                <div class="pro-detail-sec row">
                                    <div class="col-12">
                                        <h4 class="pro-heading text-center text-lg-left">
                                            <span>Sports </span> Collection
                                        </h4>
                                        <p class="pro-text text-center text-lg-left">
                                            Neque porro quisquam est qui dolorem ipsum quia dolor
                                            sit amet, consectetur, adipisci velit.
                                        </p>
                                    </div>
                                </div>
                                <form action="{{ route('frontend.addToCart') }}" method="POST"></form>
                                @if(isset($productDetails))

                                <div class="row product-list product-detail">
                                    <div class="col-12 col-lg-6 product-detail-slider">
                                        <div class="wrapper">
                                            <div class="Gallery swiper-container img-magnifier-container" id="gallery">
                                                <div class="swiper-wrapper" class="myimgs">
                                                    <div class="swiper-slide">
                                                        <a href="{{$productDetails->Image}}" data-fancybox="1" title="Zoom In"><img class="myimage" src="{{$productDetails->Image}}" alt="gallery" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6 text-center text-lg-left">
                                        <div class="product-single-price">
                                            <h4>
                                                <span class="real-price">{{ number_format($productDetails->Price, 0, ',', '.') }} VND</span>
                                            </h4>
                                            <p class="pro-description">
                                                {{$productDetails->Description}}
                                            </p>
                                        </div>

                                        <div class="product-checklist">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-check"></i> Satisfaction 100%
                                                    Guaranteed
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i> free shipping on
                                                    orders over $99
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i> 14 days easy Return
                                                </li>
                                            </ul>
                                        </div>
                                        <span> <strong>Size: </strong></span>
                                        <select id="sizeSelect">
                                            @forelse($productDetails->sizes as $size)
                                            <option value="{{ $size->size_name }}">{{ $size->size_name }}</option>
                                            @empty
                                            <option disabled>No sizes available</option>
                                            @endforelse
                                        </select>
                                        <div class="row product-quantity input_plus_mins no-gutters">
                                            <div class="qty col-12 col-lg-3 d-lg-flex align-items-lg-center d-inline-block">
                                                <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                                <input type="number" class="count" name="qty" value="1" />
                                                <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                                <!--                                                <button class="btn btn-small our-btn btn-gradient rounded-pill flex-grow-0 ml-lg-0">ADD TO CART</button>-->
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <form id="addToCartForm" action="{{ route('frontend.addToCart') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="#" class="add-cart" onclick="event.preventDefault(); document.getElementById('addToCartForm').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 56 56">
                                                        <path fill="currentColor" d="M20.008 39.649H47.36c.913 0 1.71-.75 1.71-1.758s-.797-1.758-1.71-1.758H20.406c-1.336 0-2.156-.938-2.367-2.367l-.375-2.461h29.742c3.422 0 5.18-2.11 5.672-5.461l1.875-12.399a7.2 7.2 0 0 0 .094-.89c0-1.125-.844-1.899-2.133-1.899H14.641l-.446-2.976c-.234-1.805-.89-2.72-3.28-2.72H2.687c-.937 0-1.734.822-1.734 1.76c0 .96.797 1.781 1.735 1.781h7.921l3.75 25.734c.493 3.328 2.25 5.414 5.649 5.414m31.054-25.454L49.4 25.422c-.188 1.453-.961 2.344-2.344 2.344l-29.906.023l-1.993-13.594ZM21.86 51.04a3.766 3.766 0 0 0 3.797-3.797a3.781 3.781 0 0 0-3.797-3.797c-2.132 0-3.82 1.688-3.82 3.797c0 2.133 1.688 3.797 3.82 3.797m21.914 0c2.133 0 3.82-1.664 3.82-3.797c0-2.11-1.687-3.797-3.82-3.797c-2.109 0-3.82 1.688-3.82 3.797c0 2.133 1.711 3.797 3.82 3.797" />
                                                    </svg>
                                                    <button class="btn btn-small our-btn btn-gradient rounded-pill flex-grow-0 ml-lg-0">
                                                        ADD TO CART
                                                    </button>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <div class="product-tags-list">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <p class="d-inline">SKU: <span>00012</span></p>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <p class="d-inline">Categories:</p>
                                                        <a href="#">Sports</a><span class="comma-separtor">,</span><a href="#">Footwear</a>
                                                    </li>
                                                    <li class="breadcrumb-item" aria-current="page">
                                                        <p class="d-inline">Tags:</p>
                                                        <a href="#">Sports</a><span class="comma-separtor">,</span><a href="#">Shoes</a>
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>

                                        <div class="share-product-details">
                                            <ul class="share-product-icons">
                                                <li>
                                                    <p>Share Link:</p>
                                                </li>
                                                <li>
                                                    <a href="#." class="facebook_bg_hvr2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#." class="twitter_bg_hvr2"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#." class="linkedin-bg-hvr"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#." class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4 mb-4">
                                        <div class="row no-gutters product-all-details">
                                            <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                                                <li class="col-4 nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Project Description</a>
                                                </li>
                                                <li class="col-4 nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional Information</a>
                                                </li>
                                                <li class="col-4 nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customer Reviews (2)</a>
                                                </li>
                                            </ul>
                                            <div class="col-12 tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <p class="product-tab-description text-center text-lg-left">
                                                        If you are a small business and you are
                                                        interested in small rebranding then this is a
                                                        perfect plan for you, having Five years
                                                        experience in Blogging, photographing, Disgning
                                                        and love to cycling,Writting,Singing and
                                                        Traveling around the world
                                                    </p>
                                                    <p class="product-tab-description text-center text-lg-left">
                                                        If you are a small business and you are
                                                        interested in small rebranding then this is a
                                                        perfect plan for you, having Five years
                                                        experience in Blogging, photographing, Disgning
                                                        and love to cycling,Writting,Singing and
                                                        Traveling around the world
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">First</th>
                                                                        <th scope="col">Last</th>
                                                                        <th scope="col">Handle</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td>@twitter</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade reviews" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                    <div class="media">
                                                        <div class="row no-gutter">
                                                            <div class="col-12 col-lg-2 p-0">
                                                                <div class="row no-gutters">
                                                                    <div class="col-12 d-flex justify-content-center">
                                                                        <img src="img\product-detail-images\user.jpg" alt="Generic placeholder image" />
                                                                    </div>
                                                                    <div class="col-12 d-flex mt-2 justify-content-center">
                                                                        <ul class="user-rating">
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-lg-10 p-0">
                                                                <div class="media-body">
                                                                    <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                                    <h5 class="mb-2 text-center text-lg-left">
                                                                        Media heading
                                                                    </h5>
                                                                    <p class="text-center text-lg-left">
                                                                        Neque porro quisquam est, qui dolorem
                                                                        ipsum quia dolor sit amet, consectetur,
                                                                        adipisci velit, sed quia non numquam
                                                                        eius modi tempora incidunt ut labore et
                                                                        dolore magnam.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="row no-gutter">
                                                            <div class="col-12 col-lg-2 p-0">
                                                                <div class="row no-gutters">
                                                                    <div class="col-12 d-flex justify-content-center">
                                                                        <img src="img\product-detail-images\user2.jpg" alt="Generic placeholder image" />
                                                                    </div>
                                                                    <div class="col-12 d-flex mt-2 justify-content-center">
                                                                        <ul class="user-rating">
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star-filled"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="lni-star"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-lg-10 p-0">
                                                                <div class="media-body">
                                                                    <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                                    <h5 class="mb-2 text-center text-lg-left">
                                                                        Media heading
                                                                    </h5>
                                                                    <p class="text-center text-lg-left">
                                                                        Neque porro quisquam est, qui dolorem
                                                                        ipsum quia dolor sit amet, consectetur,
                                                                        adipisci velit, sed quia non numquam
                                                                        eius modi tempora incidunt ut labore et
                                                                        dolore magnam.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="col-12 p-featured-footer">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="text-center text-md-left">
                                                Neque porro quisquam est qui dolorem ipsum quia
                                                dolor sit velit. Neque porromrion quisquam est qui
                                                dolorem ipsum quia dolor sit amet, consectetur,
                                                adipisci velit.
                                            </p>
                                        </div>
                                        <div class="col-12 text-center text-lg-left">
                                            <div class="row">
                                                <div class="terms col-sm-12 col-md-4 col-lg-4">
                                                    <h4>Free Shipping</h4>
                                                    <p>GREAT FROM HEBES</p>
                                                </div>
                                                <div class="terms col-sm-12 col-md-4 col-lg-4">
                                                    <h4>Secure Payment</h4>
                                                    <p>100% SECURE PAYMENT</p>
                                                </div>
                                                <div class="terms col-sm-12 col-md-4 col-lg-4">
                                                    <h4>30 Days Return</h4>
                                                    <p>SIMPLY RETURN 3 DAYS</p>
                                                </div>

                                                <div class="col-md-12 d-block d-lg-none">
                                                    <p class="d-none d-lg-block">
                                                        © 2019 MegaOne. Made by Themes Industry
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-section">
            <div class="side-nav-btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="social-icons">
                <li>
                    <a href="#." class="facebook_bg_hvr2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#." class="twitter_bg_hvr2"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#." class="linkdin_bg_hvr2"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#." class="instagram_bg_hvr2"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>

        <!--START OVERLAY MENU -->
        @include('navsidebar')
        <!-- End Overlay Menu -->
    </div>
</div>
<!--END MAIN SECTION-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const viewDetailsButtons = document.querySelectorAll('.view-details');
        viewDetailsButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                window.location.href = '/product/' + productId;
            });
        });

        // Khởi tạo mảng chứa các sản phẩm trong giỏ hàng từ localStorage
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Hiển thị số lượng sản phẩm trong giỏ hàng
        let cartCounter = document.getElementById('cartCounter');
        cartCounter.innerText = cartItems.length;

        function addToCart(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của nút

            // Lấy thông tin sản phẩm từ DOM
            const productId = "{{ $productDetails->id }}";
            const productName = "{{$productDetails->Name_sneaker }}";
            const productPrice = "{{$productDetails->Price}}";
            const selectedSize = "{{$productDetails->Size}}";
            const productBrand = "{{$productDetails->Brand}}";
            const productOrigin = "{{$productDetails->Origin}}";
            const productColor = "{{$productDetails->Color}}";
            const productImage = "{{$productDetails->Image}}"; // Lấy đường dẫn hình ảnh sản phẩm
            const productQuantity = "{{$productDetails->Quantity}}"; // Lấy giá trị quantity từ input

            if (productQuantity < 1) {
                alert("Quantity must be greater than 1 or equal to 1.");
                return; // Kết thúc hàm nếu số lượng nhỏ hơn 1
            }

            // Lưu thông tin sản phẩm vào localStorage
            const cartItem = {
                id: productId,
                name: productName,
                price: productPrice,
                size: selectedSize,
                brand: productBrand,
                origin: productOrigin,
                color: productColor,
                image: productImage,
                quantity: productQuantity
            };

            // Lấy danh sách các sản phẩm trong giỏ hàng từ localStorage
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            // Thêm sản phẩm vào danh sách
            cartItems.push(cartItem);

            // Lưu danh sách sản phẩm vào localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            // Cập nhật số lượng sản phẩm trong giỏ hàng trên giao diện
            document.getElementById('cartCounter').innerText = cartItems.length;
        }


        // Gắn sự kiện click cho nút thêm vào giỏ hàng
        const addToCartButton = document.querySelector('.btn-success');
        addToCartButton.addEventListener('click', addToCart);
    });

    $(document).ready(function() {
        $('.nav-tabs a').click(function() {
            $(this).tab('show');
        });
    });
</script>
<!-- JavaScript -->
@endsection
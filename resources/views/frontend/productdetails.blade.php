@extends('layouts')
@section('content')
<style>
    .alert {
        position: relative;
        top: 10;
        left: 0;
        width: auto;
        height: auto;
        padding: 10px;
        margin: 10px;
        line-height: 1.8;
        border-radius: 5px;
        cursor: hand;
        cursor: pointer;
        font-family: sans-serif;
        font-weight: 400;
    }
</style>
<!--START MAIN SECTION-->
<div class="main">
    <div class="body-overlay"></div>
    <div class="product-section contact-body">
        @include('navbar')

        <div class="contact-us-content">
            <div class="slider-content">
                <div class="parallax-slide banner-slide" style="background: url('{{ asset('images/img/product-detail-bg.jpg') }}')"></div>

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
                                            <img src="{{ asset('images/img\add.jpg') }}" />
                                        </div>
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
                                            <div class="col-12 col-lg-9">
                                                <a class="btn btn-small our-btn btn-gradient rounded-pill flex-grow-0 ml-lg-0" style="color: aliceblue;" id="addToCartBtn">Add to Cart</a>
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

        // Gắn sự kiện click cho nút thêm vào giỏ hàng
        const addToCartButton = document.querySelector('.btn-success');
        addToCartButton.addEventListener('click', addToCart);
    });

    function addToCart(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút

        // Lấy thông tin sản phẩm từ DOM
        const productId = "{{ $productDetails->id }}";
        const productName = "{{$productDetails->Name_sneaker }}";
        const productPrice = "{{$productDetails->Price}}";
        const selectedSize = document.getElementById('sizeSelect').value;
        const productBrand = "{{$productDetails->Brand}}";
        const productOrigin = "{{$productDetails->Origin}}";
        const productColor = "{{$productDetails->Color}}";
        const productImage = "{{$productDetails->Image}}"; // Lấy đường dẫn hình ảnh sản phẩm
        let productQuantity = document.getElementById('quantityInput').value; // Lấy giá trị quantity từ input

        // Chuyển đổi giá trị từ chuỗi sang số nguyên
        productQuantity = parseInt(productQuantity);

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
</script>
<script>
    let addToCartBtn = document.getElementById('addToCartBtn');
    let sizeSelect = document.getElementById('sizeSelect');

    addToCartBtn.addEventListener('click', function() {
        // Lấy giá trị size được chọn từ select box
        let selectedSize = sizeSelect.value;

        // Lấy các thông tin sản phẩm từ PHP và gán cho các biến JavaScript
        let productInfo = {
            id: "{{$productDetails->id}}",
            name: "{{$productDetails->Name_sneaker}}",
            price: "{{$productDetails->Price}}",
            size: selectedSize,
            brand: "{{$productDetails->Brand}}",
            origin: "{{$productDetails->Origin}}",
            color: "{{$productDetails->Color}}",
            image: "{{$productDetails->Image}}",
            quantity: 1,
            total: "{{$productDetails->Price}}"
        };

        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        let existingItemIndex = cartItems.findIndex(item => item.id === productInfo.id && item.size === productInfo.size);

        if (existingItemIndex !== -1) {
            cartItems[existingItemIndex].quantity++;
            cartItems[existingItemIndex].total = cartItems[existingItemIndex].quantity * parseFloat(cartItems[existingItemIndex].price);
        } else {
            let sameIdDiffSizeIndex = cartItems.findIndex(item => item.id === productInfo.id && item.size !== productInfo.size);

            if (sameIdDiffSizeIndex !== -1) {
                let newProductInfo = Object.assign({}, productInfo);
                cartItems.push(newProductInfo);
            } else {
                cartItems.push(productInfo);
            }
        }

        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Cập nhật số lượng sản phẩm trong giỏ hàng và hiển thị tổng giá trị giỏ hàng
        alert("Added to cart successfully!");
        updateCartCounter();
        displayCartItems();

        // Sau khi alert được hiển thị, reload lại trang
        location.reload();
    });


    function updateCartCounter() {
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        let cartCounter = document.getElementById('cartCounter');
        if (cartItems.length > 0) {
            cartCounter.textContent = cartItems.length;
            cartCounter.style.display = 'inline-block'; // Hiển thị cartCounter nếu có sản phẩm trong giỏ hàng
        } else {
            cartCounter.style.display = 'none'; // Ẩn cartCounter nếu không có sản phẩm trong giỏ hàng
        }
    }

    function displayCartItems() {
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        let totalPrice = 0;

        // Tính tổng giá trị của tất cả các sản phẩm trong giỏ hàng
        cartItems.forEach(item => {
            totalPrice += item.total;
        });

        // Hiển thị tổng giá trị
        let totalPriceElement = document.querySelector('.total-price .Price-amount');
        totalPriceElement.textContent = '$' + totalPrice;
    }
</script>

<script></script>
<!-- JavaScript -->
@endsection
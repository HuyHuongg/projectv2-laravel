<header>
    <div class="container container-setting">
        <div class="row justify-content-center">
            <!-- START HEADER NAV   -->
            <nav class="navbar navbar-expand  navbar-light bg-light">
                <a href="{{ route('frontend.home') }}"><img class="d-none d-lg-block" src="{{ asset('images/img/logo.png') }}" class="manage-logo" alt="logo"></a>
                <h4 class="brand-logo d-block d-lg-none"> <a href="{{ route('frontend.home') }}"><img src="product\img\logo-white.png" alt="white-logo"></a></h4>
                <div class="menu-tog d-block d-md-none" id="sidemenu_toggle1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="collapse navbar-collapse transparent-nav" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto header-nav">
                        <li class="nav-item dropdown cart-item">
                            <a href="#" class="nav-link" onclick="addToCart(event)" data-toggle="dropdown">
                                <i class="fa-solid fa-cart-shopping"> <span id="cartCounter" class="badge badge-custom-setting">0</span></i>
                            </a>
                            <script>
                                window.onload = function() {
                                    // Lấy giá trị cartCounter từ localStorage
                                    let cartCounter = localStorage.getItem('cartCounter');

                                    // Nếu cartCounter không null hoặc undefined, cập nhật giá trị trên giao diện
                                    if (cartCounter !== null && cartCounter !== undefined) {
                                        document.getElementById('cartCounter').innerText = cartCounter;
                                    }
                                };

                                function addToCart(event) {
                                    event.preventDefault();

                                    // Lấy giá trị hiện tại của cartCounter từ localStorage
                                    let cartCounter = localStorage.getItem('cartCounter');

                                    // Chuyển đổi giá trị từ chuỗi sang số nguyên
                                    cartCounter = parseInt(cartCounter) || 0;

                                    // Tăng giá trị cartCounter
                                    cartCounter++;

                                    // Lưu giá trị mới vào localStorage
                                    localStorage.setItem('cartCounter', cartCounter);

                                    // Cập nhật giá trị cartCounter trên giao diện
                                    document.getElementById('cartCounter').innerText = cartCounter;
                                }
                            </script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const viewDetailsButtons = document.querySelectorAll('.view-details');
                                    viewDetailsButtons.forEach(button => {
                                        button.addEventListener('click', function() {
                                            const productId = this.getAttribute('data-product-id');
                                            window.location.href = '/product/' + productId;
                                        });
                                    });
                                });
                            </script>
                            <div class="dropdown-menu sm-menu mini-cart">
                                <div class="mini-cart-header">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="mini-cart-body">
                                    <div class="inner-card">
                                        <div class="media">
                                            <div class="img-holder ml-1 mr-2">
                                                <img src="{{ asset('images/img\m1.jpg') }}" class="align-self-center" alt="cartitem">
                                            </div>
                                            <div class="media-body mt-auto mb-auto">
                                                <h5 class="name">Shoes</h5>
                                                <p class="category">Adidas Shoes Lastest</p>
                                                <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="img-holder ml-1 mr-2">
                                                <img src="{{ asset('images/img\m2.jpg') }}" class="align-self-center" alt="cartitem">
                                            </div>
                                            <div class="media-body mt-auto mb-auto">
                                                <h5 class="name">Shoes</h5>
                                                <p class="category">Adidas Shoes Lastest</p>
                                                <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="img-holder ml-1 mr-2">
                                                <img src="{{ asset('images/img\m1.jpg') }}" class="align-self-center" alt="cartitem">
                                            </div>
                                            <div class="media-body mt-auto mb-auto">
                                                <h5 class="name">Shoes</h5>
                                                <p class="category">Adidas Shoes Lastest</p>
                                                <p class="price"><span>$20</span>(x1) <a href="#"> <i class="fa fa-trash dustbin"></i></a></p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="img-holder ml-1 mr-2">
                                                <img src="{{ asset('images/img\m2.jpg') }} class=" align-self-center" alt="cartitem">
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
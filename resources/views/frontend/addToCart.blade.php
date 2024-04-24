<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Themes Industry" />
    <!-- description -->
    <meta name="description" content="Product is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos." />
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq" />
    <!-- Page Title -->
    <title>Shopping Cart Page</title>
    <!-- Favicon -->
    <link rel="icon" href="product/img/favicon.ico" />
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('css/fe/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('css/fe/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/wow.css') }}">
    <!-- Line Icons -->
    <link rel="stylesheet" href="{{ asset('css/fe/LineIcons.min.css') }}">
    <!-- button hover css   -->
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('css/fe/hover-min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/fe/style.css') }}">
</head>

<body class="page-body">
    <div id="noProductMessage" style="display: none">
        <p>Không có sản phẩm nào.</p>
    </div>
    <div id="loader">
        <div class="loader center-block">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div>

    <div class="main">
        <div class="body-overlay"></div>
        <div class="product-section contact-body">
            <header class="contact-us-header">
                <div class="container container-setting">
                    <div class="row justify-content-center about_us_nav">
                        <nav class="navbar navbar-expand contact-us-nav navbar-light bg-light">
                            <a href="{{ route('frontend.home') }}" class="navbar-brand">
                                <img src="{{ asset('images/logo.png') }}" alt="logo"></a>

                            <div class="menu-tog d-block d-lg-none" id="sidemenu_toggle1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav ml-auto header-nav">

                                    <li class="nav-item dropdown cart-item">
                                        <div class="dropdown-menu sm-menu mini-cart">
                                            
                                            <div class="mini-cart-body">
                                                <div class="inner-card">
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="img\m1.jpg" class="align-self-center" alt="cartitem" />
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price">
                                                                <span>$20</span>(x1)
                                                                <a href="#">
                                                                    <i class="fa fa-trash dustbin"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="img\m2.jpg" class="align-self-center" alt="cartitem" />
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price">
                                                                <span>$20</span>(x1)
                                                                <a href="#">
                                                                    <i class="fa fa-trash dustbin"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="img\m1.jpg" class="align-self-center" alt="cartitem" />
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price">
                                                                <span>$20</span>(x1)
                                                                <a href="#">
                                                                    <i class="fa fa-trash dustbin"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="img-holder ml-1 mr-2">
                                                            <img src="img\m2.jpg" class="align-self-center" alt="cartitem" />
                                                        </div>
                                                        <div class="media-body mt-auto mb-auto">
                                                            <h5 class="name">Shoes</h5>
                                                            <p class="category">Adidas Shoes Lastest</p>
                                                            <p class="price">
                                                                <span>$20</span>(x1)
                                                                <a href="#">
                                                                    <i class="fa fa-trash dustbin"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-footer">
                                                <div class="subtotal">
                                                    <span class="total-title">Total: </span>
                                                    <span class="total-price">
                                                        <span class="Price-amount"> $135 </span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <button type="button" class="btn view-bag rounded-pill">
                                                        View Bag
                                                    </button>
                                                    <button type="button" class="btn view-cart btn-medium btn-gradient rounded-pill">
                                                        Checkout
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

            <div class="contact-us-content">
                <div class="slider-content">
                    <div class="parallax-slide banner-slide" style="background: url('img/shop-banner.jpg')"></div>

                    <!-- START HEADING SECTION -->
                    <div class="about_content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 text-center wow slideInUp" data-wow-duration="2s">
                                    <h1 class="heading">Shop Cart</h1>
                                    <p class="para_text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        A dolores explicabo laudantium, omnis provident quam
                                        reiciendis voluptatum?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END HEADING SECTION -->

                    <!-- START SHOP CART SECTION -->
                    <div class="shop-cart">
                        <div class="container">
                            <!-- START SHOP CART TABLE -->
                            <div class="row">
                                <div class="col-12 col-md-10 offset-md-1 cart_table wow fadeInUp animated" data-wow-delay="300ms" style="
                      visibility: visible;
                      animation-delay: 300ms;
                      animation-name: fadeInUp;
                    ">
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-radius">
                                            <thead>
                                                <tr>
                                                    <th class="darkcolor">Product</th>
                                                    <th class="darkcolor">Quantity</th>
                                                    <th class="darkcolor">Size</th>
                                                    <th class="darkcolor">Price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="cartTableBody"></tbody>
                                        </table>
                                    </div>
                                    <div class="apply_coupon">
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SHOP CART TABLE -->

                            <!-- START SHOP CART CHECKOUT FORM -->
                            <div class="row pt-5">
                                <div class="col-12 col-lg-5 offset-lg-1 wow slideInUp" data-wow-duration="2s">
                                    <div class="calculate-shipping">
                                        <h4 class="heading">Info Shipping</h4>
                                        <form id="orderForm" action="https://hyphoccode.id.vn/order-submit" method="post">
                                            <input type="hidden" name="_token" value="iVkdLvKtdjz4nbSi23qbTxFmcq78wATMMtxen6A7" autocomplete="off" />

                                            <div class="row">
                                                <div class="col-50">
                                                    <h3>Billing Address</h3>
                                                    <label for="name">Full Name</label><br />
                                                    <input type="text" id="name" name="name" placeholder="Your name" required />
                                                    <br />
                                                    <label for="email">Email</label><br />
                                                    <input type="text" id="email" name="email" placeholder="abc@example.com" required />
                                                    <br />
                                                    <label for="phone">Phone Number</label><br />
                                                    <input type="text" id="phone" name="phone" placeholder="Phone number" required />
                                                    <br />
                                                    <label for="address">Address</label> <br />
                                                    <input type="text" id="address" name="address" placeholder="Ha Noi City, etc" required />
                                                    <input type="hidden" id="productData" name="productData" />
                                                </div>
                                            </div>

                                            <button type="submit" class="btn our-btn btn-gradient rounded-pill" role="button">
                                                Check Out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 wow slideInUp" data-wow-duration="2s">
                                    <div class="card-total">
                                        <h4 class="heading">Card Total</h4>
                                        <table>
                                            <tr>
                                                <td>Subtotal</td>
                                                <td>$251.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>
                                                    <ul class="color-grey">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flat-rate" name="shipping" class="custom-control-input" checked="" />
                                                                <label class="custom-control-label" for="flat-rate">Flat Rate : $49.00</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input" />
                                                                <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="cod-shipping" name="shipping" class="custom-control-input" />
                                                                <label class="custom-control-label" for="cod-shipping">Cash on Delivery</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>$300.00</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SHOP CART CHECKOUT FORM -->
                        </div>
                    </div>
                    <!-- END SHOP CART SECTION-->

                    <!--START FOOTER NOTES -->
                    <div class="row">
                        <div class="col-12 text-center footer_rights pb-5">
                            <p>
                                &copy; 2019 MegaOne. Made With Love by
                                <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a>
                            </p>
                        </div>
                    </div>
                    <!--END FOOTER NOTES -->
                </div>
            </div>

            <!--START SIDEBAR SECTION -->
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
            <!--END SIDEBAR SECTION -->

            <!--START OVERLAY MENU -->
            <div class="side-menu-nav">
                <h1 class="sidenav-bg-text">MEGA ONE</h1>
                <div class="close-side-menu">
                    <i class="lni-close cross-sign" id="close-side-menu-nav"></i>
                </div>
                <nav>
                    <ul class="side-bar">
                        <li class="nav-item main-item">
                            <a class="nav-link nav-appear" href="..\index-product.html">Home</a>
                        </li>
                        <li class="nav-item active main-item">
                            <a class="nav-link nav-appear" id="demo1">Blog <i class="fas fa-caret-right forward"></i></a>
                            <div class="submenu-overlay">
                                <ul class="d-flex justify-content-lg-center">
                                    <li class="nav-item d-flex align-items-center">
                                        <a class="sub-menu-nav-appear"><i class="fas fa-arrow-alt-circle-left go-back-btn"></i></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="blog.html">Standard Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="single-blog.html">Single Blog</a>
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
                                        <a class="nav-link sub-menu-nav-appear" href="product-listing-light.html">Product Listing One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="product-listing-dark.html">Product Listing Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="product-detail.html">Product Detail Version</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="shop-cart.html">Shopping Cart</a>
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
                                        <a class="nav-link sub-menu-nav-appear" href="registeration.html">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="login.html">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="faq.html">FAQs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub-menu-nav-appear" href="404.html">404</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item main-item">
                            <a class="nav-link nav-appear" href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item main-item">
                            <a class="nav-link nav-appear" href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer">
                    <ul class="social-icons-simple">
                        <li>
                            <a href="#." class="facebook_bg_hvr2 wow fadeInUp"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#." class="twitter_bg_hvr2 wow fadeInDown"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#." class="linkdin_bg_hvr2 wow fadeInUp"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#." class="instagram_bg_hvr2 wow fadeInDown"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <p class="whitecolor text-center w-100 wow fadeInDown">
                        &copy; 2019 MegaOne. Made With Love by
                        <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a>
                    </p>
                </div>
            </div>
            <!-- END OVERLAY MENU -->
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Lấy thông tin từ localStorage
            let products = localStorage.getItem("cartItems");

            // Kiểm tra xem có thông tin trong localStorage không
            if (!products || JSON.parse(products).length === 0) {
                // Nếu không có sản phẩm trong giỏ hàng, hiển thị thông báo "No products in the cart"
                let cartHeader = document.querySelector(".col-25 h4");
                cartHeader.innerHTML =
                    'Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span><p>No products in the cart</p>';
            } else {
                // Nếu có sản phẩm, hiển thị giỏ hàng bình thường
                products = JSON.parse(products);

                // Điền dữ liệu vào các trường của biểu mẫu
                document.getElementById("name").value = products.name || "";
                document.getElementById("email").value = products.email || "";
                document.getElementById("phone").value = products.phone || "";
                document.getElementById("address").value = products.address || "";

                displayCart(products);
            }
        });

        document
            .getElementById("orderForm")
            .addEventListener("submit", function(event) {
                event.preventDefault();

                let orderDetails = JSON.parse(localStorage.getItem("cartItems"));

                if (!orderDetails || orderDetails.length === 0) {
                    // Nếu không có sản phẩm trong giỏ hàng, hiển thị cảnh báo
                    alert("No products in the cart.");
                    return; // Ngăn chặn tiếp tục thực hiện sự kiện submit
                }
                let name = document.getElementById("name").value;
                let email = document.getElementById("email").value;
                let phone = document.getElementById("phone").value;
                let address = document.getElementById("address").value;
                let productsData = [];
                let product = productsData;

                let invoiceData = {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    product: product,
                    // Thêm order_id vào invoiceData
                    order_id: orderDetails[0].order_id, // Giả sử order_id được lấy từ orderDetails[0]
                };

                orderDetails.forEach((item) => {
                    let productInfo = {
                        id: item.id.toString(),
                        name: item.name.toString(),
                        quantity: item.quantity.toString(),
                        price: item.price,
                        size: item.size.toString(),
                        totalPrice: item.price * item.quantity,
                        timestamp: new Date().toLocaleString("en-US", {
                            timeZone: "Asia/Ho_Chi_Minh",
                            hour12: true,
                            year: "numeric",
                            month: "numeric",
                            day: "numeric",
                            hour: "numeric",
                            minute: "numeric",
                            second: "numeric",
                        }),
                    };
                    productsData.push(productInfo);
                });

                function customStringify(obj) {
                    return JSON.stringify(obj).replace(
                        /[\u007F-\uFFFF]/g,
                        function(chr) {
                            return (
                                "\\u" + ("0000" + chr.charCodeAt(0).toString(16)).substr(-4)
                            );
                        }
                    );
                }
                let productsDataJSON = customStringify(productsData);

                document.getElementById("productData").value = productsDataJSON;

                // Lưu invoiceData vào localStorage
                localStorage.setItem("invoiceData", JSON.stringify(invoiceData));

                localStorage.removeItem("cartItems");

                this.submit();
            });

        function displayCart(products) {
            // Kiểm tra nếu không có sản phẩm trong giỏ hàng
            if (!products || products.length === 0) {
                // Hiển thị cảnh báo
                document.getElementById("noProductMessage").style.display = "block";
                // Ẩn form
                document.getElementById("orderForm").style.display = "none";
                return;
            }

            // Lấy thẻ tbody của bảng
            let tbody = document.getElementById("cartTableBody");

            let totalPrice = 0;

            // Thêm dòng cho từng sản phẩm
            products.forEach((item) => {
                let row = document.createElement("tr");
                row.innerHTML = `<td>${item.name}</td><td>${item.quantity}</td><td>${
            item.size
          }</td><td>${formatCurrency(item.price)}</td>`;
                tbody.appendChild(row);
                totalPrice += item.price * item.quantity;
            });

            // Hiển thị tổng giá tiền
            let totalPriceElement = document.createElement("p"); // Tạo phần tử mới
            totalPriceElement.innerHTML = `<strong>Total Price: <span>${formatCurrency(
          totalPrice
        )}</span></strong>`; // Thiết lập nội dung của phần tử
            document
                .querySelector(".col-25 .container")
                .appendChild(totalPriceElement);
        }

        function formatCurrency(amount) {
            // Chuyển đổi số thành chuỗi và thêm đơn vị tiền tệ
            const formatter = new Intl.NumberFormat("vi-VN", {
                style: "currency",
                currency: "VND",
                currencyDisplay: "code", // Hiển thị mã tiền tệ thay vì ký hiệu
                minimumFractionDigits: 0, // Số lượng chữ số sau dấu phẩy (để không hiển thị phần thập phân)
            });
            return formatter.format(amount).replace("₫", "VND"); // Thay thế ký hiệu tiền tệ từ "₫" sang "VND"
        }
    </script>
    <!-- JavaScript -->
    <script src="{{ asset('js/bundle.min.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('js/parallaxie.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
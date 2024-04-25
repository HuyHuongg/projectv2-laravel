@extends('layouts')
@section('content')
<div class="main">
    <div class="body-overlay"></div>
    <div class="product-section contact-body">

        @include('navbar')

        <div class="contact-us-content">

            <div class="slider-content">

                <div class="parallax-slide banner-slide" style='background:url("{{ asset('images/img/shop-banner.jpg') }}")'></div>

                <!-- START HEADING SECTION -->
                <div class="about_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12  col-lg-8 offset-lg-2 text-center wow slideInUp" data-wow-duration="2s">
                                <h1 class="heading">Shop Cart</h1>
                                <p class="para_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
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
                            <div class="col-12 col-md-10 offset-md-1 cart_table wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-radius">
                                        <thead>
                                            <tr>
                                                <th class="darkcolor">Product</th>
                                                <th class="darkcolor">Price</th>
                                                <th class="darkcolor">Quantity</th>
                                                <th class="darkcolor">Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-table">
                                                        <div class="d-table-cell">
                                                            <a class="shopping-product" href="img\shoes\thumb1.jpg"><img src="{{ asset('images/img\shoes\thumb1.jpg') }}" alt="product"></a>
                                                        </div>
                                                        <div class="d-table-cell">
                                                            <h4 class="product-name"><a href="product-detail.html">Blue Shoe</a></h4>
                                                            <p>We offer the most complete in the country</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="text-center amount">$130.00</h4>
                                                </td>
                                                <td class="text-center">
                                                    <div class="quote text-center">
                                                        <input type="text" placeholder="1" class="rounded-pill quote">
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="text-center amount">$136.00</h4>
                                                </td>
                                                <td class="text-center"><a class="btn-close" href="#."><i class="fa-regular fa-trash-can"></i></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-table">
                                                        <div class="d-table-cell">
                                                            <a class="shopping-product" href="img\shoes\thumb2.jpg"><img src="{{ asset('images/img\shoes\thumb2.jpg') }}" alt="product"></a>
                                                        </div>
                                                        <div class="d-table-cell">
                                                            <h4 class="product-name"><a href="product-detail.html">Red Shoe</a></h4>
                                                            <p class="product-des">We offer the most complete in the country</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="text-center d-table-price amount">$130.00</h4>
                                                </td>
                                                <td class="text-center">
                                                    <div class="quote text-center">
                                                        <input type="text" placeholder="1" class="rounded-pill quote">
                                                    </div>
                                                </td>
                                                <td>
                                                    <h4 class="text-center amount">$136.00</h4>
                                                </td>
                                                <td class="text-center"><a class="btn-close" href="#."><i class="fa-regular fa-trash-can"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="apply_coupon">
                                    <div class="row">
                                        <div class="col-6  text-lg-left text-center">
                                            <a href="faq.html" class="btn our-btn btn-transparent-black rounded-pill btn-sm">Update</a>
                                        </div>
                                        <div class="col-6  coupon text-lg-right text-center">
                                            <a href="faq.html" class="btn our-btn btn-gradient rounded-pill btn-sm">CheckOut</a>
                                        </div>
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
                <!--END FOOTER NOTES -->

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
        <!-- END OVERLAY MENU -->

    </div>
</div>



@endsection
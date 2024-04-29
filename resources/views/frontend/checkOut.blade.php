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
                                                <th class="darkcolor">Total price</th>
                                                <th>Act</th>
                                            </tr>
                                        </thead>
                                        <tbody id="checkOutItems"></tbody>
                                    </table>

                                </div>

                                <div class="card-total">
                                    <p>
                                    <h4 class="heading">Total unit price: </h4>
                                    <h5 id="totalPriceAmount" class="heading"></h5>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- END SHOP CART TABLE -->

                        <!-- START SHOP CART CHECKOUT FORM -->
                        <div class="row pt-5">
                            <div class="col-12 col-lg-5 offset-lg-1 wow slideInUp" data-wow-duration="2s">
                                <div class="calculate-shipping">
                                    <h4 class="heading">Info Shipping</h4>
                                    <form id="orderForm" action="{{ route('frontend.checkout.submit') }}" method="post">
                                        <input type="hidden" name="_token" value="iVkdLvKtdjz4nbSi23qbTxFmcq78wATMMtxen6A7" autocomplete="off" />

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="name">Full Name</label><br />
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required />
                                            </div>
                                            <div class="col-12">
                                                <label for="email">Email</label><br />
                                                <input type="text" id="email" name="email" class="form-control" placeholder="abc@example.com" required />
                                            </div>
                                            <div class="col-12">
                                                <label for="phone">Phone Number</label><br />
                                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number" required />
                                            </div>
                                            <div class="col-12">
                                                <label for="address">Address</label><br />
                                                <input type="text" id="address" name="address" class="form-control" placeholder="Ha Noi City, etc" required />
                                            </div>
                                            <input type="hidden" id="productData" name="productData" />
                                        </div>

                                        <button type="submit" class="btn our-btn btn-gradient rounded-pill" role="button">
                                            Check Out
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1 wow slideInUp" data-wow-duration="2s" style="margin: 0;">
                                <div class="Commit-service" style="border: 1px solid #dee2e6; padding: 20px; ">
                                    <h5 class="heading" style="font-size: 24px;">Commitments and policies</h5>
                                    <ul>
                                        <li><strong>Returns:</strong> We accept returns within 30 days of purchase. Items must be in their original condition.</li>
                                        <li><strong>Exchanges:</strong> You can exchange your purchase within 60 days. Please bring your receipt.</li>
                                        <li><strong>Refunds:</strong> Refunds will be issued to the original payment method within 7-10 business days after we receive your return.</li>
                                        <li><strong>Shipping:</strong> We offer Cash on Delivery (COD) for all orders. No other payment methods are accepted for shipping.</li>
                                        <li><strong>Customer Support:</strong> Our customer support team is available 24/7 to assist you. Contact us through our Facebook page messenger for any inquiries or assistance.</li>
                                    </ul>

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

            document.addEventListener('DOMContentLoaded', function() {
                // Lấy danh sách các sản phẩm từ localStorage
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                let tbody = document.querySelector('#checkOutItems');

                // Xóa nội dung cũ của tbody
                tbody.innerHTML = '';

                // Duyệt qua từng sản phẩm trong giỏ hàng và thêm vào tbody
                cartItems.forEach(function(item, index) {
                    let tr = document.createElement('tr');
                    tr.innerHTML = `
    <td>
        <div class="d-table">
            <div class="d-table-cell">
                <a class="shopping-product" href="${item.image}"><img src="${item.image}" alt="${item.name}"></a>
            </div>
            <div class="d-table-cell">
                <h4 class="product-name"><a>${item.name}</a></h4>
                <p>Size: ${item.size}</p> <!-- Thêm dòng này để hiển thị size -->
            </div>
        </div>
    </td>
    <td>
        <h4 class="text-center d-table-price amount">${formatCurrency(item.price)}</h4>
    </td>
    <td class="text-center">
    <div class="quote text-center">
        <input type="number" value="${item.quantity}" min="1" class="rounded-pill quote" onchange="updateQuantity(${index}, this)">
    </div>
</td>
    <td>
        <h4 class="text-center amount">${formatCurrency(item.price * item.quantity)}</h4>
    </td>
    <td>
        <a href="#" class="btn-remove" onclick="removeCartItem(${index})"> <i class="fa fa-trash dushbin"></i></a>
    </td>
`;
                    tbody.appendChild(tr);

                    updateTotalPrice();
                });
            });
            // Hàm xử lý khi xoá sản phẩm
            function removeCartItem(index) {
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                cartItems.splice(index, 1); // Xoá sản phẩm khỏi giỏ hàng

                localStorage.setItem('cartItems', JSON.stringify(cartItems)); // Lưu lại giỏ hàng mới

                updateCart(); // Cập nhật giỏ hàng và tổng giá tiền
            }

            // Hàm cập nhật tổng giá tiền và hiển thị lại giỏ hàng
            function updateCart() {
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                let tbody = document.querySelector('#checkOutItems');

                // Xóa nội dung cũ của tbody
                tbody.innerHTML = '';

                // Duyệt qua từng sản phẩm trong giỏ hàng và thêm vào tbody
                cartItems.forEach(function(item, index) {
                    let tr = document.createElement('tr');
                    tr.innerHTML = `
            <td>
                <div class="d-table">
                    <div class="d-table-cell">
                        <a class="shopping-product" href="${item.image}"><img src="${item.image}" alt="${item.name}"></a>
                    </div>
                    <div class="d-table-cell">
                        <h4 class="product-name"><a>${item.name}</a></h4>
                    </div>
                </div>
            </td>
            <td>
                <h4 class="text-center d-table-price amount">${formatCurrency(item.price)}</h4>
            </td>
            <td class="text-center">
    <div class="quote text-center">
        <input type="number" value="${item.quantity}" min="1" class="rounded-pill quote" onchange="updateQuantity(${index}, this)">
    </div>
</td>
            <td>
                <h4 class="text-center amount">${formatCurrency(item.price * item.quantity)}</h4>
            </td>
            <td>
            <a href="#" class="btn-remove" onclick="removeCartItem(${index})"> <i class="fa fa-trash dushbin"></i></a>
            </td>
        `;
                    tbody.appendChild(tr);
                });

                updateTotalPrice(); // Gọi hàm cập nhật tổng giá tiền sau mỗi lần cập nhật giỏ hàng

            }

            // Hàm cập nhật tổng giá tiền
            function updateTotalPrice() {
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                let totalPrice = 0;

                cartItems.forEach(function(item) {
                    totalPrice += item.price * item.quantity;
                });

                // Hiển thị tổng giá tiền
                document.getElementById('totalPriceAmount').textContent = formatCurrency(totalPrice);

                // Console log tổng giá tiền để kiểm tra
                console.log('Tổng giá tiền:', totalPrice);
            }

            function updateQuantity(index, input) {
                const newValue = parseInt(input.value);
                if (newValue <= 0) {
                    alert("Số lượng không hợp lệ. Vui lòng nhập một số lớn hơn 0.");
                    input.value = 1; // Đặt giá trị về 1 nếu người dùng nhập số lượng nhỏ hơn hoặc bằng 0
                } else {
                    // Lấy danh sách sản phẩm từ localStorage
                    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                    // Cập nhật số lượng cho sản phẩm tại chỉ số index
                    cartItems[index].quantity = newValue;
                    // Lưu danh sách sản phẩm mới vào localStorage
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));

                    // Cập nhật giá trị tổng giá tiền và hiển thị lại giỏ hàng
                    updateCart();
                }
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
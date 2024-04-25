<header>
    <div class="container container-setting">
        <div class="row justify-content-center">
            <!-- START HEADER NAV   -->
            <nav class="navbar navbar-expand  navbar-light bg-light">
                <a href="{{ route('frontend.home') }}"><img class="d-none d-lg-block" src="{{ asset('images/img/logo.png') }}" class="manage-logo" alt="logo"></a>
                <h4 class="brand-logo d-block d-lg-none"> <a href="{{ route('frontend.home') }}"><img src="{{ asset('images/img/logo.png') }}" alt="white-logo"></a></h4>
                <div class="menu-tog d-block d-md-none" id="sidemenu_toggle1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="collapse navbar-collapse transparent-nav" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto header-nav">
                        <li class="nav-item dropdown cart-item">
                            <a href="#" class="nav-link" onclick="event.preventDefault()" data-toggle="dropdown">
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

                                function updateCartCounter() {
                                    // Lấy số lượng sản phẩm từ localStorage
                                    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

                                    // Cập nhật số lượng sản phẩm trong giỏ hàng
                                    let cartCounter = cartItems.length;

                                    // Cập nhật giá trị cartCounter trên giao diện
                                    document.getElementById('cartCounter').innerText = cartCounter;

                                    // Lưu giá trị mới của cartCounter vào localStorage
                                    localStorage.setItem('cartCounter', cartCounter);
                                }

                                function addToCart(event) {
                                    event.preventDefault();

                                    // Lấy giá trị hiện tại của cartCounter từ localStorage
                                    let cartCounter = localStorage.getItem('cartCounter');

                                    // Lấy số lượng sản phẩm từ localStorage
                                    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                                    updateCartCounter();
                                    // Kiểm tra nếu giỏ hàng có sản phẩm thì cập nhật cartCounter với độ dài của mảng cartItems
                                    if (cartItems.length > 0) {
                                        cartCounter = cartItems.length;
                                    } else {
                                        // Nếu không có sản phẩm trong giỏ hàng, cartCounter được đặt về 0
                                        cartCounter = 0;
                                    }

                                    // Lưu giá trị mới vào localStorage
                                    localStorage.setItem('cartCounter', cartCounter);

                                    // Cập nhật giá trị cartCounter trên giao diện
                                    document.getElementById('cartCounter').innerText = cartCounter;
                                }
                            </script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Lấy danh sách các sản phẩm từ localStorage
                                    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

                                    // Đếm số lượng sản phẩm trong giỏ hàng
                                    let cartCounter = cartItems.length;

                                    // Lưu giá trị cartCounter vào localStorage
                                    localStorage.setItem('cartCounter', cartCounter);

                                    // Cập nhật giá trị cartCounter trên giao diện
                                    document.getElementById('cartCounter').innerText = cartCounter;
                                });

                                document.getElementById('addToCartBtn').addEventListener('click', function(event) {
                                    event.preventDefault(); // Ngăn chặn hành động mặc định của nút

                                    // Lấy danh sách các sản phẩm từ localStorage
                                    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

                                    // Thêm sản phẩm vào giỏ hàng
                                    cartItems.push({});

                                    // Lưu lại số lượng sản phẩm vào localStorage
                                    localStorage.setItem('cartItems', JSON.stringify(cartItems));

                                    // Cập nhật số lượng sản phẩm trong giỏ hàng và hiển thị nó
                                    let cartCounter = cartItems.length;
                                    localStorage.setItem('cartCounter', cartCounter);

                                    // Cập nhật giá trị cartCounter trên giao diện
                                    document.getElementById('cartCounter').innerText = cartCounter;
                                });
                            </script>
                            <div class="dropdown-menu sm-menu mini-cart">
                                <div class="mini-cart-header">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="mini-cart-body">
                                    <div class="inner-card" id="miniCartItems">
                                        <!-- Các sản phẩm sẽ được in ra từ vòng for -->
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            // Lấy danh sách các sản phẩm từ localStorage
                                            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                                            let totalPrice = 0;

                                            // Tính tổng giá trị của các sản phẩm trong giỏ hàng
                                            for (let i = 0; i < cartItems.length; i++) {
                                                totalPrice += cartItems[i].price * cartItems[i].quantity;
                                            }

                                            // In tổng giá trị vào phần tử có id là 'totalPrice'
                                            document.getElementById('totalPrice').innerText = formatCurrency(totalPrice);

                                            // Đối với mỗi sản phẩm trong giỏ hàng, tạo một phần tử HTML tương ứng và thêm vào #miniCartItems
                                            let miniCartItemsDiv = document.getElementById('miniCartItems');
                                            if (cartItems.length === 0) {
                                                // Nếu không có sản phẩm trong giỏ hàng, hiển thị thông báo "No products in cart"
                                                miniCartItemsDiv.innerHTML = '<p>No products in cart</p>';
                                            } else {
                                                for (let i = 0; i < cartItems.length; i++) {
                                                    let item = cartItems[i];
                                                    let html = `
                <div class="media">
                    <div class="img-holder ml-1 mr-2">
                        <img src="${item.image}" class="align-self-center" alt="cartitem">
                    </div>
                    <div class="media-body mt-auto mb-auto">
                        <h5 class="name">${item.name}</h5>
                        <p class="category">${item.color} - ${item.size}</p>
                        <p class="price">
                            <span>${formatCurrency(item.price)}</span>
                            <div style="display:flex; justify-content:space-between">
                            <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${i}, this)" style="width: 70px!important">
                            <a href="#" onclick="removeCartItem(${i})" style="width:20px">
                                <i class="fa fa-trash dustbin"></i>
                            </a>
                            </div>
                        </p>
                    </div>
                </div>
            `;
                                                    miniCartItemsDiv.insertAdjacentHTML('beforeend', html);
                                                }
                                            }
                                        });


                                        // Hàm cập nhật số lượng sản phẩm
                                        function updateQuantity(index, input) {
                                            const newValue = parseInt(input.value);
                                            if (newValue <= 0) {
                                                alert("Số lượng không hợp lệ. Vui lòng nhập một số lớn hơn 0.");
                                                input.value = 1; // Đặt giá trị về 1 nếu người dùng nhập số lượng nhỏ hơn hoặc bằng 0
                                            } else {
                                                // Lưu giá trị mới vào trong localStorage
                                                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                                                cartItems[index].quantity = newValue;
                                                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                                                // Cập nhật lại giá trị tổng giá trị và hiển thị nó
                                                updateTotalPrice();
                                            }
                                        }

                                        function updateTotalPrice() {
                                            // Lấy danh sách các sản phẩm từ localStorage
                                            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                                            let totalPrice = 0;
                                            for (let i = 0; i < cartItems.length; i++) {
                                                totalPrice += cartItems[i].price * cartItems[i].quantity;
                                            }
                                            // In tổng giá trị vào phần tử có id là 'totalPrice'
                                            document.getElementById('totalPrice').innerText = formatCurrency(totalPrice);
                                        }

                                        function removeCartItem(index) {
                                            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

                                            // Xóa sản phẩm khỏi giỏ hàng
                                            cartItems.splice(index, 1);

                                            // Lưu lại danh sách sản phẩm mới vào localStorage
                                            localStorage.setItem('cartItems', JSON.stringify(cartItems));

                                            // Cập nhật lại số lượng sản phẩm trong giỏ hàng
                                            updateCartCounter();

                                            // Cập nhật lại tổng giá trị
                                            updateTotalPrice();

                                            // Cập nhật lại mini cart
                                            updateMiniCart();
                                        }


                                        function updateMiniCart() {
                                            let miniCartItemsDiv = document.getElementById('miniCartItems');
                                            miniCartItemsDiv.innerHTML = ''; // Xóa nội dung cũ của miniCartItemsDiv
                                            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                                            for (let i = 0; i < cartItems.length; i++) {
                                                let item = cartItems[i];
                                                let html = `
            <div class="media">
                <div class="img-holder ml-1 mr-2">
                    <img src="${item.image}" class="align-self-center" alt="cartitem">
                </div>
                <div class="media-body mt-auto mb-auto">
                    <h5 class="name">${item.name}</h5>
                    <p class="category">${item.color} - ${item.size}</p>
                    <p class="price">
                        <span>${formatCurrency(item.price)}</span>${item.quantity}
                        <a href="#" onclick="removeCartItem(${i})">
                            <i class="fa fa-trash dustbin"></i>
                        </a>
                    </p>
                </div>
            </div>
        `;
                                                miniCartItemsDiv.insertAdjacentHTML('beforeend', html);
                                            }
                                        }

                                        function formatCurrency(amount) {
                                            // Chuyển đổi số thành chuỗi và thêm đơn vị tiền tệ
                                            const formatter = new Intl.NumberFormat('vi-VN', {
                                                style: 'currency',
                                                currency: 'VND',
                                                currencyDisplay: 'code', // Hiển thị mã tiền tệ thay vì ký hiệu
                                                minimumFractionDigits: 0 // Số lượng chữ số sau dấu phẩy (để không hiển thị phần thập phân)
                                            });
                                            return formatter.format(amount).replace('₫', 'VND'); // Thay thế ký hiệu tiền tệ từ "₫" sang "VND"
                                        }
                                        document.addEventListener('DOMContentLoaded', function() {
                                            // Gắn sự kiện click cho nút refresh cart
                                            let refreshCartBtn = document.getElementById('refreshCartBtn');
                                            refreshCartBtn.addEventListener('click', function() {
                                                // Gọi hàm updateMiniCart để làm mới mini cart
                                                updateMiniCart();
                                            });
                                        });
                                    </script>
                                </div>
                                <div class="mini-cart-footer">
                                    <div class="subtotal">
                                        <span class="total-title">Total: </span>
                                        <span class="total-price" id="totalPrice"></span>
                                    </div>
                                    <div class="actions" style="display: flex;">
                                        <a  class="btn btn-medium btn-gradient rounded-pill"style="color: white;" id="refreshCartBtn">Refresh Cart</a>
                                        <a class="btn view-cart btn-medium btn-gradient rounded-pill" href="{{route('frontend.checkOut')}}" style="color: white;">Check Out</a>
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
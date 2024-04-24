<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTH SNEAKER STORE</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/fe/homepage.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fe/productdetails.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="{{ asset('js/homepage.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/fe/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
</head>

<body>
    
    <div class="header">
        <div class="header-left">
            <a href="{{ route('frontend.home') }}"><img src="{{ asset('images/logo-shop.png') }}" alt="Mô tả của hình ảnh"></a>
            <div class="option-header">
                <a href="/product">Product</a>
                <a href="#">About</a>
                <a href="/blog">Blog</a>
            </div>
        </div>

        <div class="header-right">

            <form id="addToCartForm" action="{{ route('frontend.addToCart') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" class="add-cart" onclick="event.preventDefault(); document.getElementById('addToCartForm').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 56 56">
                    <path fill="currentColor" d="M20.008 39.649H47.36c.913 0 1.71-.75 1.71-1.758s-.797-1.758-1.71-1.758H20.406c-1.336 0-2.156-.938-2.367-2.367l-.375-2.461h29.742c3.422 0 5.18-2.11 5.672-5.461l1.875-12.399a7.2 7.2 0 0 0 .094-.89c0-1.125-.844-1.899-2.133-1.899H14.641l-.446-2.976c-.234-1.805-.89-2.72-3.28-2.72H2.687c-.937 0-1.734.822-1.734 1.76c0 .96.797 1.781 1.735 1.781h7.921l3.75 25.734c.493 3.328 2.25 5.414 5.649 5.414m31.054-25.454L49.4 25.422c-.188 1.453-.961 2.344-2.344 2.344l-29.906.023l-1.993-13.594ZM21.86 51.04a3.766 3.766 0 0 0 3.797-3.797a3.781 3.781 0 0 0-3.797-3.797c-2.132 0-3.82 1.688-3.82 3.797c0 2.133 1.688 3.797 3.82 3.797m21.914 0c2.133 0 3.82-1.664 3.82-3.797c0-2.11-1.687-3.797-3.82-3.797c-2.109 0-3.82 1.688-3.82 3.797c0 2.133 1.711 3.797 3.82 3.797" />
                </svg>
                <span id="cartCounter" class="cart-counter">0</span>
            </a>
            <a href="#" class="btn-contact">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 14">
                    <path fill="currentColor" fill-rule="evenodd" d="M13.854.146a.5.5 0 0 1 .113.534l-5 13a.5.5 0 0 1-.922.027l-2.091-4.6L9.03 6.03a.75.75 0 0 0-1.06-1.06L4.893 8.046l-4.6-2.09a.5.5 0 0 1 .028-.923l13-5a.5.5 0 0 1 .533.113" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <form action="{{ route('frontend.addToCart') }}" method="POST"></form>
    @if(isset($productDetails))

    <div class="container bootdey">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body" style="width:100%; display:">
                    <div class="col-md-6">
                        <div class="pro-img-details">
                            <img class="productimg" src="{{$productDetails->Image}}" alt="" style="width:400px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title">
                            Giày: {{ $productDetails->Name_sneaker }}
                        </h4>
                        <p>
                            <!--{{$productDetails->Description}}-->
                        </p>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Brand: {{$productDetails->Brand}}</strong> </span> <br>
                            <span class="tagged_as"><strong>Origin: {{$productDetails->Origin}}</strong> </span> <br>
                            <span class="color"><strong>Color: {{$productDetails->Color}}</strong> </span><br>
                            <span> <strong>Size: </strong></span>
                            <select id="sizeSelect">
                                @forelse($productDetails->sizes as $size)
                                <option value="{{ $size->size_name }}">{{ $size->size_name }}</option>
                                @empty
                                <option disabled>No sizes available</option>
                                @endforelse
                            </select>
                            <input class="form-control quantity-input" type="number" value="1" min="1" style="width:23%">

                            <span><strong>Price:</strong></span>
                            <span class="pro-price">{{ number_format($productDetails->Price) }}(VND)</span>


                        </div>
                        <a class="btn btn-success text-white" onclick="addToCart(event);" href="{{ route('frontend.addToCart', ['id' => $productDetails->id]) }}" style="width:23%;">Add to Cart</a>

                        </p>
                    </div>
                </div>
                
            </section>
        </div>
       <div class="details-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#commitment" role="tab">Commitment</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <p>{{ $productDetails->Description }}</p>
                    </div>
                    <div class="tab-pane fade" id="commitment" role="tabpanel">
                        <p>VÌ SAO CHỌN HTH Store?
✔ Hỗ trợ đổi size, đổi mẫu 7 ngày<br>
✔ Hỗ trợ bảo hành miễn phí trong 1 năm<br>
✔ Double Box kèm chống sốc khi giao hàng<br>
✔ Chương trình chăm sóc khách hàng, ưu đãi sinh nhật<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                            </form>
                            @else
                            <p>Product not found!</p>
                            @endif
                        </div>
                    </div>
                </div>

</body>
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
            const productName = document.querySelector('.pro-d-title').innerText;
            const productPriceText = document.querySelector('.pro-price').innerText;
            const productPrice = parseFloat(productPriceText.replace(/[^\d.]/g, ''));
            const selectedSize = document.getElementById('sizeSelect').value;
            const productBrand = document.querySelector('.product_meta .posted_in').innerText;
            const productOrigin = document.querySelector('.product_meta .tagged_as').innerText;
            const productColor = document.querySelector('.color').innerText;
            const productImage = document.querySelector('.pro-img-details img').getAttribute('src'); // Lấy đường dẫn hình ảnh sản phẩm
            const productQuantity = parseInt(document.querySelector('.quantity-input').value); // Lấy giá trị quantity từ input
            if (productQuantity < 1) {
                alert("Quantity must be greater than 1 or equal to 1.");
                return; // Kết thúc hàm nếu số lượng nhỏ hơn 1
            }
            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
            const existingItemIndex = cartItems.findIndex(item => item.id === productId && item.size === selectedSize);

            if (existingItemIndex !== -1) {
                // Nếu sản phẩm đã tồn tại trong giỏ hàng với cùng kích thước, chỉ cập nhật số lượng của sản phẩm
                cartItems[existingItemIndex].quantity += productQuantity;
            } else {
                // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng với kích thước khác hay chưa
                const existingItemDifferentSizeIndex = cartItems.findIndex(item => item.id === productId && item.size !== selectedSize);

                if (existingItemDifferentSizeIndex !== -1) {
                    // Nếu sản phẩm đã tồn tại trong giỏ hàng với kích thước khác, thêm một mục mới vào giỏ hàng với kích thước và số lượng mới
                    const newItem = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        size: selectedSize,
                        brand: productBrand,
                        origin: productOrigin,
                        image: productImage,
                        color: productColor,
                        quantity: productQuantity
                    };
                    cartItems.push(newItem);
                } else {
                    // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm một mục mới vào giỏ hàng với kích thước và số lượng được chọn
                    const newItem = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        size: selectedSize,
                        brand: productBrand,
                        origin: productOrigin,
                        image: productImage,
                        color: productColor,
                        quantity: productQuantity
                    };
                    cartItems.push(newItem);
                }
            }

            // Cập nhật số lượng sản phẩm trong giỏ hàng
            cartCounter.innerText = cartItems.length;

            // Lưu mảng cartItems vào localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
        }

        // Gắn sự kiện click cho nút thêm vào giỏ hàng
        const addToCartButton = document.querySelector('.btn-success');
        addToCartButton.addEventListener('click', addToCart);
    });
    
    $(document).ready(function(){
        $('.nav-tabs a').click(function(){
            $(this).tab('show');
        });
    });
</script>





</html>
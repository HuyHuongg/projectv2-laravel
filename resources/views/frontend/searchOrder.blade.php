@extends('layouts')
@section('content')
<style>
    .table-container {
        overflow-x: auto;
    }

    .order-list {
        max-height: 160px;
        /* Chiều cao tối đa là 5 dòng * 32px (độ cao của mỗi dòng) */
        overflow-y: auto;
        /* Hiển thị thanh cuộn dọc nếu danh sách dài hơn */
    }

    .order-list table {
        width: 100%;
        border-collapse: collapse;
    }

    .order-list th,
    .order-list td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .order-list th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .order-list tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .order-list tr:hover {
        background-color: #ddd;
    }



    .btn-show-orders {
        align-items: center;
        appearance: none;
        background-color: #fff;
        border-radius: 24px;
        border-style: none;
        box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px, rgba(0, 0, 0, .14) 0 6px 10px 0, rgba(0, 0, 0, .12) 0 1px 18px 0;
        box-sizing: border-box;
        color: #3c4043;
        cursor: pointer;
        display: inline-flex;
        fill: currentcolor;
        font-family: "Poppins", Roboto, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 48px;
        justify-content: center;
        letter-spacing: .25px;
        line-height: normal;
        max-width: 100%;
        overflow: visible;
        padding: 2px 24px;
        position: relative;
        text-align: center;
        text-transform: none;
        transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1), opacity 15ms linear 30ms, transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: auto;
        will-change: transform, opacity;
        z-index: 0;
    }

    .btn-show-orders:hover {
        background: #F6F9FE;
        color: #174ea6;
    }

    .btn-show-orders:active {
        box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
        outline: none;
    }

    .btn-show-orders:focus {
        outline: none;
        border: 2px solid #4285f4;
    }

    .btn-show-orders:not(:disabled) {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
    }

    .btn-show-orders:not(:disabled):hover {
        box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
    }

    .btn-show-orders:not(:disabled):focus {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
    }

    .btn-show-orders:not(:disabled):active {
        box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
    }

    .btn-show-orders:disabled {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
    }
</style>
<div class="main">
    <div class="body-overlay"></div>
    <!-- START PRODUCT-SECTION -->
    <div class="product-section contact-body">
        @include('navbar')

        <!-- START HEADER NAVBAR -->
        <header class="contact-us-header">
            <div class="container container-setting">
                <div class="row justify-content-center about_us_nav">
                    <nav class="navbar navbar-expand contact-us-nav navbar-light bg-light">
                        <div class="menu-tog d-block d-lg-none" id="sidemenu_toggle1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- END HEADER NAVBAR -->

        <!-- START FAQ SECTION -->
        <div class="contact-us-content">
            <div class="slider-content">
                <div class="parallax-slide banner-slide" style='background:url("{{ asset('images/img/project-banner8.jpg') }}")'>
                </div>

                <div class="about_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 text-center wow slideInUp" data-wow-duration="2s">
                                <h1 class="heading">Frequently Asked Questions</h1>
                                <p class="para_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq_content">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                                <div id="accordion">
                                    <div class="search-form">
                                        <form action="{{ route('frontend.searchOrder') }}" method="GET" class="form-inline">
                                            <div class="input-group">
                                                <input type="number" name="query" class="form-control" placeholder="Nhập số điện thoại">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn our-btn btn-gradient rounded-pill" role="button">
                                                        Tìm kiếm
                                                    </button>
                                                </div>
                                            </div>
                                            @if(isset($none))
                                            <div class="alert alert mt-3">
                                            <i class="fas fa-exclamation-circle"></i> {{ $none }}
                                            </div>
                                            @endif
                                            @if(isset($message))
                                            <div class="alert alert-danger mt-3">
                                            <i class="fas fa-times-circle"></i> {{ $message }}
                                            </div>
                                            @endif
                                            @if(isset($success))
                                            <div class="alert alert-success mt-3">
                                                <i class="fas fa-check-circle"></i> {{ $success }}
                                            </div>
                                            @endif

                                        </form>

                                        @if(isset($results))
                                        @if($results->isNotEmpty())
                                        <div class="table-container">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Address</th>
                                                        <th>Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($results as $result)
                                                    <tr>
                                                        <td>{{ $result->Name_customer }}</td>
                                                        <td>{{ $result->phone }}</td>
                                                        <td>{{ $result->address }}</td>
                                                        <td>{{ $result->gmail }}</td>
                                                        <td>
                                                            <button class="btn-show-orders" data-customer-id="{{ $result->id }}" role="button">All orders</button>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div id="order-list-{{ $result->id }}" class="order-list" style="display: none;">
                                                                @foreach ($orders as $order)
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Order ID</th>
                                                                            <th>Product Name</th>
                                                                            <th>Size</th>
                                                                            <th>Quantity</th>
                                                                            <th>Subtotal</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                        $total = 0; // Khởi tạo biến tổng giá trị
                                                                        @endphp
                                                                        @foreach ($order->orderDetails as $detail)
                                                                        <tr>
                                                                            <td>{{ $detail->order_id }}</td>
                                                                            <td>{{ $detail->product->Name_sneaker }}</td>
                                                                            <td>{{ $detail->size }}</td>
                                                                            <td>{{ $detail->quantity }}</td>
                                                                            <td>{{ number_format($detail->subtotal, 0, ',', '.') }} VND</td>
                                                                        </tr>
                                                                        @php
                                                                        $total += $detail->subtotal; // Cộng vào tổng giá trị
                                                                        @endphp
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                @endforeach
                                                                <!-- Hiển thị tổng giá trị ở dưới -->
                                                                <div class="total">
                                                                    <strong>Tổng giá trị đơn hàng: {{ number_format($total, 0, ',', '.') }} VND</strong>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        @else
                                        <p>Không tìm thấy kết quả nào.</p>
                                        @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center footer_rights pb-5">
                        <p>&copy; 2019 MegaOne. Made With Love by <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FAQ SECTION -->

        <!-- START SIDEBAR SECTION -->
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
        <!-- END SIDEBAR SECTION -->

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
                    <!-- Các mục menu khác -->
                </ul>
            </nav>
            <div class="side-footer">
                <ul class="social-icons-simple">
                    <li><a href="#." class="facebook_bg_hvr2 wow fadeInUp"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#." class="twitter_bg_hvr2 wow fadeInDown"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkdin_bg_hvr2 wow fadeInUp"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    <li><a href="#." class="instagram_bg_hvr2 wow fadeInDown"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <p class="whitecolor text-center w-100 wow fadeInDown">&copy; 2019 MegaOne. Made With Love by <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a></p>
            </div>
        </div>
        <!-- End Overlay Menu -->
    </div>
    <!-- END PRODUCT SECTION -->
</div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.btn-show-orders').click(function() {
            var customerId = $(this).data('customer-id');
            $('#order-list-' + customerId).toggle();
        });
    });
</script>
@endsection
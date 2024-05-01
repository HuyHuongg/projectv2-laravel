<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .order-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f1f1f1;
        }

        .order-details {
            margin-left: 20px;
            margin-top: 10px;
        }

        .order-details li {
            margin-bottom: 5px;
        }

        .button-group {
            margin-top: 10px;
        }

        .button-group button {
            margin-right: 10px;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .button-group button:hover {
            background-color: #0056b3;
        }

        .cancelled-orders {
            margin-top: 20px;
        }

        .cancelled-orders button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #dc3545;
            color: #fff;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .cancelled-orders button:hover {
            background-color: #c82333;
        }

        .view-details {
            display: none;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f1f1f1;
        }

        .view-details.active {
            display: block;
        }

        .order-item.cancelled {
            border: 1px solid #dc3545;
            background-color: #f8d7da;
        }

        /* CSS cho các đơn hàng vẫn còn hoạt động */
        .order-item.active {
            border: 1px solid #007bff;
            background-color: #cce5ff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Name: {{ $customerName = $customer->Name_customer}}</h1>
        <h2>Orders for Phone: {{ $phone }}</h2>
        <ul>
            @foreach ($orders as $key => $order)
            <li class="order-item" id="order_{{ $order->order_id }}">
                <strong>Order ID:</strong> {{ $order->order_id }}
                <ul class="order-details">
                    @php
                    $totalPrice = 0;
                    @endphp
                    @foreach ($orders as $subOrder)
                    @if ($subOrder->order_id == $order->order_id)
                    <li>
                        <strong>Product Name:</strong> {{ $subOrder->product->Name_sneaker }}
                    </li>
                    @php
                    $totalPrice += $subOrder->subtotal;
                    @endphp
                    @endif
                    @endforeach
                </ul>
                <div class="button-group">
                    <button onclick="toggleDetails({{ $order->order_id }})">View Details</button>
                    <button onclick="cancelOrder({{ $order->order_id }})">Cancel Order</button>
                </div>
                <div class="view-details" id="details_{{ $order->order_id }}">
                    <strong>Quantity:</strong> {{ $subOrder->quantity }}
                    <strong>Size:</strong> {{ $subOrder->size }}
                    <strong>Subtotal:</strong> {{ number_format($subOrder->subtotal, 0, ',', '.') }} VND
                    <strong>Total Price:</strong> {{ number_format($totalPrice, 0, ',', '.') }} VND
                    <strong>Status:</strong> {{ $status[$key] }} {{-- Truy cập vào trạng thái tương ứng với đơn hàng --}}
                </div>
            </li>
            @endforeach
        </ul>


        <div class="cancelled-orders">
            <button onclick="showCancelledOrders()">Show Cancelled Orders</button>
            <button id="backToOrdersButton" onclick="backToOrders()" style="display: none;">Back to Orders</button>
        </div>
    </div>

    <script>
        function toggleDetails(orderId) {
            var details = document.getElementById("details_" + orderId);
            details.classList.toggle("active");
        }

        function cancelOrder(orderId) {
            var orderItem = document.getElementById("order_" + orderId);
            orderItem.style.display = "none";
            localStorage.setItem("hidden_order_" + orderId, "true");
        }

        function keepOrder(orderId) {
            var orderItem = document.getElementById("order_" + orderId);
            orderItem.style.display = "block";
            localStorage.removeItem("hidden_order_" + orderId);
            var cancelledOrders = document.querySelectorAll(".order-item[id='order_" + orderId + "']");
            for (var i = 0; i < cancelledOrders.length; i++) {
                cancelledOrders[i].style.display = "none";
            }
        }

        // Hiển thị các đơn hàng đã huỷ sau khi nhấn nút
        function showCancelledOrders() {
            var cancelledOrders = document.querySelectorAll("[id^='order_'][style*='none']");
            for (var i = 0; i < cancelledOrders.length; i++) {
                var orderButtons = cancelledOrders[i].querySelectorAll(".button-group button");
                for (var j = 0; j < orderButtons.length; j++) {
                    if (orderButtons[j].innerHTML === "Cancel Order") {
                        orderButtons[j].innerHTML = "Keep Order";
                        orderButtons[j].setAttribute("onclick", "keepOrder(" + cancelledOrders[i].id.split("_")[1] + ")");
                    }
                }
                cancelledOrders[i].style.display = "block";
            }
        }

        // Quay lại danh sách các đơn hàng khi nhấn nút "Back to Orders"
        function backToOrders() {
            var allOrders = document.querySelectorAll(".order-item");
            for (var i = 0; i < allOrders.length; i++) {
                allOrders[i].style.display = "block";
            }
            var backToOrdersButton = document.getElementById("backToOrdersButton");
            backToOrdersButton.style.display = "none";
        }

        // Kiểm tra Local Storage sau khi trang được load lại và ẩn các phần tử đã được lưu trữ trạng thái
        window.onload = function() {
            for (var i = 0; i < localStorage.length; i++) {
                var key = localStorage.key(i);
                if (key.startsWith("hidden_order_")) {
                    var orderId = key.split("_")[2];
                    var orderItem = document.getElementById("order_" + orderId);
                    if (orderItem) {
                        orderItem.style.display = "none";
                    }
                }
            }
        }
    </script>

</body>

</html>
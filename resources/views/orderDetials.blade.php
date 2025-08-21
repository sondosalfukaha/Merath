<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - Merath</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 20px;
        }

        .order-container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 10px;
        }

        .order-info {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }

        .order-items table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-items th,
        .order-items td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .order-items img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .support {
            margin: 25px 0;
            padding: 15px;
            background: #f1f1f1;
            border-radius: 8px;
        }

        .actions {
            text-align: center;
            margin-top: 20px;
        }

        .actions a {
            display: inline-block;
            margin: 5px;
            padding: 12px 20px;
            background: #b68b2f;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .actions a:hover {
            background: #C4A35A;
        }
    </style>
</head>

<body>
    <div class="order-container">
        <h2>Order Details</h2>

        <!-- Order Information -->
        <div class="order-info">
            <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
            <p><strong>Expected Delivery:</strong> {{ now()->addDays(3)->format('d M Y') }}</p>
            <p><strong>Payment Method:</strong>Cash in Delivery</p>
            <p><strong>Total:</strong> JD{{ $order->total_amount }}</p>


        </div>

        <!-- Items in this order -->
        <div class="order-items">
            <h3>Items in this order</h3>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderItems as $item)
                        <tr>
                            <td class="px-4 py-2 border text-center">
                                <img src="{{ asset('storage/' . $item->product_image) }}" alt="{{ $item->product_name }}"
                                    class="w-16 h-16 object-cover mx-auto">
                            </td>
                            <td class="px-4 py-2 border text-center">{{ $item->product_name }}</td>
                            <td class="px-4 py-2 border text-center">{{ $item->quantity }}</td>
                            <td class="px-4 py-2 border text-center">JD {{ $item->product_price }}</td>
                            <td class="px-4 py-2 border text-center">JD {{ $item->product_price * $item->quantity }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Support Section
        <div class="support">
            <p><strong>Need help?</strong></p>
            <p>📞 Call us: +962-79-1234567</p>
            <p>📧 Email: support@merath.com</p>
        </div>-->

        <!-- Buttons
        <div class="actions">
            <a href="/wishlist">Go to Wishlist</a>
            <a href="/cart">Back to Cart</a>
            <a href="/shop">Continue Shopping</a>
        </div>-->
    </div>

</body>

</html>

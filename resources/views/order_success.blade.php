<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @once
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endonce
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @media(max-width:767px) {

            nav.desktop {
                display: flex;
            }

            .menu-toggle {
                display: none;
            }

            nav.mobile {
                display: none !important;
            }


            .button-group {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                justify-content: center;
            }


            .btn {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
                font-weight: 400;
                text-decoration: none;

                transition: background-color 0.3s ease;
            }

            .btn-primary {
                background-color: #C4A35A;
                color: #fff;
                border: none;
                border-radius: 50px;
            }

            .btn-primary:hover {

                transform: scale(1.02);
                transition: 0.3s ease-in-out;
                opacity: 70%;

            }

            .btn-outline {
                border: 2px solid #fff;
                color: #fff;
                border-radius: 50px;
            }

            .btn-outline:hover {
                transform: scale(1.02);
                transition: 0.3s ease-in-out;
                opacity: 70%;

            }

        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: black;
        }

        nav.desktop {
            display: none;
        }

        nav.desktop a,
        nav.mobile a {
            text-decoration: none;
            color: #4a4a4a;
            font-weight: 500;
            margin-right: 1.5rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #C4A35A;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .icon {
            color: #4a4a4a;
            cursor: pointer;
        }

        .icon:hover {
            color: #C4A35A;
        }

        .cart-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: #C4A35A;
            color: white;
            font-size: 12px;
            border-radius: 50%;
            width: 17px;
            height: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cart-icon {
            position: relative;
        }

        .menu-toggle {
            display: inline-block;
            cursor: pointer;
        }

        nav.mobile {
            display: none;
            flex-direction: column;
            padding: 1rem;
        }

        nav.mobile.open {
            display: flex;
        }

        @media (min-width: 768px) {
            nav.desktop {
                display: flex;
            }

            .menu-toggle {
                display: none;
            }

            nav.mobile {
                display: none !important;
            }
        }
    </style>
    <style>
        .cart-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 1.5rem;
            /*box-shadow: 0 4px 8px #dcdcdc4f;*/
        }

        .cart-header,
        .cart-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #ddd;

        }

        .cart-item {
            box-shadow: 0 4px 8px #dcdcdc4f;
            transition: 0.3s ease-in;
        }

        .cart-item:hover {
            scale: 102%;
        }

        .cart-header {
            font-weight: bold;
            text-transform: capitalize;

        }

        .col {
            flex: 1;
            text-align: center;

        }

        .col-product {
            flex: 3;
            display: flex;
            align-items: center;
            gap: 1rem;

        }

        .col-product img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-info h4 {
            margin: 0;
            font-size: 1rem;
        }

        .product-info p {
            margin: 0;
            font-size: 0.8rem;
            color: #666;
        }

        .col-qty button.qty-btn {
            padding: 0.25rem 0.5rem;
            margin: 0 0.25rem;
            background-color: #0b2c55;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .col-remove .remove-btn {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: red;
        }

        .cart-summary {
            background: #dcdcdc4f;
            width: 25%;
            padding: 10px;
            margin-top: 10px;
            box-shadow: 0 4px 8px #c4a35aaf;
        }



        .cart-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-clear,
        .btn-place {
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            font-size: 15px;
        }

        .btn-clear {
            background-color: red;
            color: #fff;
        }

        .btn-clear:hover {
            opacity: 50%;
        }

        .btn-place:hover {
            opacity: 50%;
        }

        .btn-place {
            background-color: #C4A35A;
            color: #fff;
        }
    </style>
    <style>
        .checkout-tracker {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            max-width: 400px;
            margin: 20px auto -39px auto;
            /* centers horizontally */
        }

        .checkout-tracker::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 20px;
            right: 20px;
            height: 4px;
            background-color: #ccc;
            /* line between circles */
            z-index: 0;
            transform: translateY(-50%);
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .step .circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 5px;
            transition: 0.3s;
        }

        .step.completed .circle {
            background-color: #4CAF50;
            /* green for completed */
        }

        .step.active .circle {
            background-color: #b3934f;
            /* current step */
        }

        .step .label {
            font-size: 12px;
            color: #555;
            text-align: center;
        }
    </style>
    <title>Cart</title>
</head>

<body>
    <!--Start NavBar-->
    <header>
        <div class="container">
            <!-- Logo -->
            <a href="#" class="logo">Merath</a>

            <!-- Desktop Navigation -->
            <nav class="desktop">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="/collection">Collections</a>
                <a href="/about">About</a>
                <a href="contact">Contact</a>
            </nav>

            <!-- Icons -->
            <div class="icons">
                <a href="/register" class="icon"><i class="fas fa-user"></i></a>
                @auth
                    <a href="{{ route('wishlist') }}"class="icon">
                        <i class="fas fa-heart"></i>
                    </a>
                @endauth
                <div class="icon cart-icon" ><!--onclick="toggleCart()"-->
                    <a href="/cart" style="text-decoration: none;">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-badge" id="cart-count"></span>
                    </a>
                </div>
                <div class="menu-toggle icon" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
            </div>


        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile" id="mobileMenu">
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">Collections</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <!--End NavBar-->
    @php
        // currentStep can be 'cart', 'checkout', 'success'
        $currentStep = $currentStep ?? 'cart';
    @endphp

    <!-- Checkout Tracker -->
    <div class="checkout-tracker">
        <div class="step completed">
            <div class="circle">1</div>
            <div class="label">Cart</div>
        </div>
        <div class="step completed">
            <div class="circle">2</div>
            <div class="label">Checkout</div>
        </div>
        <div class="step completed">
            <div class="circle">3</div>
            <div class="label">Success</div>
        </div>
    </div>


    <div class="cart-container">
        <h2>Order Placed Successfully</h2>
        <p>Your Order Number: {{ $order->order_number }}</p>
        <p>Status: {{ $order->status }}</p>
    </div>


</body>

</html>

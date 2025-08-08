<!-- resources/views/details.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .flex {
            display: flex;
        }

        .gap-12 {
            gap: 3rem;
        }

        .mb-4,
        .mb-6,
        .mb-8,
        .mb-16 {
            margin-bottom: 1.5rem;
        }

        .text-gray-600 {
            color: #4B5563;
        }

        .text-gray-500 {
            color: #6B7280;
        }

        .text-[#C4A35A] {
            color: #C4A35A;
        }

        .border-b {
            border-bottom: 1px solid #E5E7EB;
        }

        .font-bold {
            font-weight: bold;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .text-3xl {
            font-size: 1.875rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .hover\:underline:hover {
            text-decoration: underline;
        }

        .hover\:text-amber:hover {
            color: #C4A35A;
        }

        .border {
            border: 1px solid #D1D5DB;
        }

        .button-primary {
            background: #C4A35A;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            cursor: pointer;
        }

        .tab-button {
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            background: none;
            border: none;
            font-weight: 500;
        }

        .active-tab {
            border-bottom: 2px solid #C4A35A;
            color: #C4A35A;
        }

        .tab-content {
            margin-top: 1.5rem;
        }
    </style>
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

            .hero-container {
                position: relative;
                height: 600px;
                overflow: hidden;
            }

            .hero-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .hero-overlay {
                position: absolute;
                inset: 0;
                background-color: rgba(0, 0, 0, 0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                text-align: center;
                padding: 0 1rem;
            }

            .hero-content h1 {
                font-family: 'Playfair Display', serif;
                font-size: 2.5rem;
                font-weight: bold;
                margin-bottom: 1rem;
                line-height: 1.2;
            }



            .hero-content p {
                font-size: 1.125rem;
                max-width: 32rem;
                margin: 0 auto 2rem auto;
                color: #e5e5e5;
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
            background-color: white;
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
            font-size: 24px;
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
            width: 20px;
            height: 20px;
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

            .hero-container {
                position: relative;
                height: 600px;
                overflow: hidden;
            }

            .hero-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .hero-overlay {
                position: absolute;
                inset: 0;
                background-color: rgba(0, 0, 0, 0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                text-align: center;
                padding: 0 1rem;
            }

            .hero-content h1 {
                font-family: 'Playfair Display', serif;
                font-size: 2.5rem;
                font-weight: bold;
                margin-bottom: 1rem;
                line-height: 1.2;
            }

            @media (min-width: 768px) {
                .hero-content h1 {
                    font-size: 3rem;
                }
            }

            @media (min-width: 1024px) {
                .hero-content h1 {
                    font-size: 3.75rem;
                }
            }

            .hero-content p {
                font-size: 1.125rem;
                max-width: 32rem;
                margin: 0 auto 2rem auto;
                color: #e5e5e5;
            }

            .button-group {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                justify-content: center;
            }

            @media (min-width: 640px) {
                .button-group {
                    flex-direction: row;
                }
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

        .section {
            padding: 4rem 0;
            background-color: white;
        }

        .section .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1rem;
            /*height: 3.5rem;*/
        }

        .section-title {
            text-align: center;
            margin: 0 auto;



        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .section-title p {
            color: #4B5563;
            max-width: 640px;
            margin: 0 auto;
        }

        .features {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .features {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .feature {
            text-align: center;
            padding: 1.5rem;
        }

        .icon-circle {
            height: 4rem;
            width: 4rem;
            background-color: #f8f5eb;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .step-number {
            color: #C4A35A;
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .feature h3 {
            font-weight: 500;
            font-size: 1.125rem;
            margin-bottom: 0.5rem;
        }

        .feature p {
            color: #4B5563;
        }

        .containerb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1rem;

        }

        .title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 3rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .category {
            position: relative;
            overflow: hidden;
            height: 320px;
            text-decoration: none;
        }

        .category img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .category:hover img {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 1rem;
        }

        .overlay h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .overlay p {
            font-size: 0.875rem;
        }

        .shop-now {
            margin-top: 1rem;
            font-size: 0.875rem;
            border-bottom: 1px solid white;
            padding-bottom: 0.25rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .category:hover .shop-now {
            opacity: 1;
        }



        .containerc {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .slider-wrapper {
            position: relative;
        }

        .slider-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .slider-header h2 {
            font-size: 1.75rem;
            font-weight: bold;
        }

        .slider-buttons button {
            padding: 0.5rem;
            border: 1px solid #ccc;
            background-color: white;
            border-radius: 9999px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        .slider-buttons button:hover {
            background-color: #f0f0f0;
        }

        .slider {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding-bottom: 1rem;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
        }

        .slider::-webkit-scrollbar {
            display: none;
        }

        .product-card {
            min-width: 280px;
            max-width: 280px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            scroll-snap-align: start;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .product-card .info {
            padding: 1rem;
        }

        .product-card .info h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .product-card .info p {
            font-size: 0.95rem;
            color: #555;
        }

        < !-- Style section --><style>.scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .snap-x {
            scroll-snap-type: x mandatory;
        }

        .snap-start {
            scroll-snap-align: start;
        }

        .transition-opacity {
            transition: opacity 0.3s ease;
        }

        .group:hover .opacity-0 {
            opacity: 1;
        }

        .essence-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .essence-container {
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 1rem;
            padding-right: 1rem;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .essence-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            align-items: center;
            margin-bottom: 4rem;
        }

        @media (min-width: 768px) {
            .essence-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .essence-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .essence-text {
            padding: 1.5rem;
        }

        .essence-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .essence-paragraph {
            color: #4B5563;
            /* Tailwind's gray-600 */
            margin-bottom: 1.5rem;
        }

        .essence-button {
            display: inline-block;
            background-color: #C4A35A;
            color: white;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .essence-button:hover {
            background-color: #b3934f;
        }

        .featured-section {
            background-color: white;
            padding-top: 4rem;
            padding-bottom: 4rem;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1rem;

        }

        .featured-container {
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 1rem;
            padding-right: 1rem;

        }

        .featured-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .featured-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .featured-description {
            color: #4B5563;
            /* Tailwind's gray-600 */
            max-width: 640px;
            margin-left: auto;
            margin-right: auto;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .featured-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .featured-card {
            position: relative;
            overflow: hidden;
        }

        .featured-image {
            width: 100%;
            height: 24rem;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .group:hover .group-hover-scale {
            transform: scale(1.05);
        }

        .featured-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.2);
            opacity: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            transition: opacity 0.3s ease;
        }

        .group:hover .featured-overlay {
            opacity: 1;
        }

        .featured-name {
            color: white;
            font-weight: 500;
            font-size: 1.25rem;
        }

        .featured-price {
            color: white;
            opacity: 0.8;
            margin-bottom: 1rem;
        }

        .featured-button {
            display: inline-block;
            background-color: white;
            color: #111827;
            /* gray-900 */
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .featured-button:hover {
            background-color: #C4A35A;
            color: white;
        }

        .newsletter-section {
            padding: 4rem 1rem;
            background-color: #f9fafb;
        }

        .newsletter-section .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            flex-direction: column;
        }

        .text-center {
            text-align: center;
        }

        .mb-12 {
            margin-bottom: 3rem;
        }

        .newsletter-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .newsletter-subtitle {
            color: #4b5563;
            max-width: 32rem;
            margin: 0 auto;
        }

        .form-wrapper {
            max-width: 28rem;
            margin: 0 auto;
        }

        .newsletter-form {
            display: flex;
            gap: 0;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            outline: none;
            transition: all 0.3s ease;
        }

        .newsletter-input:focus {
            border-color: #c4a35a;
            box-shadow: 0 0 0 1px #c4a35a;
        }

        .newsletter-button {
            background-color: #c4a35a;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .newsletter-button:hover {
            background-color: #b3934f;
        }

        <style>.footer {
            background-color: #f9fafb;
            padding-top: 4rem;
            padding-bottom: 2rem;
            border-top: 1px solid #e5e7eb;
            font-family: sans-serif;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        @media (min-width: 768px) {
            .footer-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .footer-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .footer-desc {
            color: #4b5563;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .footer-icons {
            display: flex;
            gap: 1rem;
        }

        .footer-icon {
            color: #4b5563;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 1.2rem;
        }

        .footer-icon:hover {
            color: #c4a35a;
        }

        .footer-heading {
            color: #111827;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #4b5563;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #c4a35a;
        }

        .footer-form {
            display: flex;
        }

        .footer-input {
            flex: 1;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            outline: none;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        .footer-input:focus {
            border-color: #c4a35a;
            box-shadow: 0 0 0 1px #c4a35a;
        }

        .footer-button {
            background-color: #c4a35a;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .footer-button:hover {
            background-color: #b3934f;
        }

        .footer-bottom {
            padding-top: 2rem;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
        }

        .shop-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .sidebar {
            position: sticky;
            top: 20px;
            width: 250px;
            height: fit-content;
            background: #fff;
            border: 1px solid #eee;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .product-area {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-image-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 8px;
        }

        .product-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
        }

        .product-label {
            position: absolute;
            top: 8px;
            left: 8px;
            padding: 5px 10px;
            color: white;
            font-weight: bold;
            font-size: 12px;
            border-radius: 4px;
            z-index: 2;
        }

        .product-label.featured {
            background-color: #28a745;
            /* green */
        }

        .product-label.best {
            background-color: #ffc107;
            /* yellow */
        }
    </style>
    <style>
        .button-primary {
            background-color: #C4A35A;
            color: white;
            padding: 10px 20px;
            border: none;
            font-weight: 500;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .button-primary:hover {
            background-color: #a48444;
        }

        .wishlist-btn {
            background: none;
            border: 2px solid #C4A35A;
            padding: 10px 14px;
            font-size: 18px;
            border-radius: 4px;
            color: #C4A35A;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .wishlist-btn:hover {
            background-color: #C4A35A;
            color: white;
        }

        .wishlist-btn i {
            pointer-events: none;
        }
    </style>

</head>

<body>
    <!--Start NavBar-->
    <header>
        <div class="container">
            <!-- Logo -->
            <a href="#" class="logo">Merath</a>
        </div>


    </header>
    <!--End NavBar-->
    <div class="container">
        <div class="mb-6">
            <a href="/shop" class="text-gray-500 hover:text-amber flex items-center">
                ← Back to Shop
            </a>
        </div>

        <div class="flex gap-12 mb-16">
            <div style="flex: 1;">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    style="width:50%; height:auto;" />
            </div>

            <!-- Product Info -->
            <div style="flex: 1;">
                <h1 class="font-playfair text-3xl font-bold mb-2">{{ $product->name }}</h1>
                <p class="text-2xl text-[#C4A35A] font-medium mb-4">${{ $product->price }}</p>

                <div class="mb-6">
                    <p class="text-gray-600">{{ $product->description }}</p>
                </div>

                <div class="mb-6">
                    <div class="mb-2"><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</div>

                </div>

                <!-- Quantity + Add to Cart + Wishlist -->
                <form method="POST" action="">
                    @csrf
                    <div class="mb-4">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" value="1" min="1"
                            style="width: 80px; margin-left: 10px;" />
                    </div>

                    <div style="display: flex; gap: 10px; align-items: center;">
                        <button type="submit" class="button-primary">
                            Add to Cart
                        </button>

                        <!-- Wishlist Button -->
                        <form method="POST" action="">
                            @csrf
                            <button type="submit" class="wishlist-btn" title="Add to Wishlist">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </form>
                    </div>
                </form>



            </div>
        </div>

        <!-- Tabs -->
        <div class="mb-16">
            <div class="border-b mb-6">
                <button class="tab-button active-tab" onclick="showTab('description')">Description</button>
                <button class="tab-button" onclick="showTab('details')">Product Details</button>
                <button class="tab-button" onclick="showTab('shipping')">Shipping & Returns</button>
            </div>

            <div class="tab-content" id="tab-description">
                <p>{{ $product->description }}</p>
                <p>
                    Each piece is meticulously crafted with quality and precision.
                    The result is a unique item that adds character and elegance to any space.
                </p>
            </div>

            <div class="tab-content" id="tab-details" style="display:none">
                <ul>
                    <li><strong>Category:</strong> {{ $product->category->name }}</li>

                    <li>Handcrafted with care</li>
                    <li>Unique variations in each piece</li>
                    <li>Wipe clean with a damp cloth</li>
                </ul>
            </div>

            <div class="tab-content" id="tab-shipping" style="display:none">
                <h3>Shipping Information</h3>
                <p>All products are shipped within 2-3 business days of order confirmation.</p>
                <h3>Return Policy</h3>
                <p>
                    You may return it within 30 days of delivery for a full refund or exchange.
                    Items must be in original condition and packaging.
                </p>
                <p>
                    For full policy, visit our
                    <a href="" class="text-[#C4A35A] hover:underline">Shipping & Returns
                        page</a>.
                </p>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabId) {
            ['description', 'details', 'shipping'].forEach(id => {
                document.getElementById('tab-' + id).style.display = id === tabId ? 'block' : 'none';
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active-tab'));
                document.querySelector(`.tab-button[onclick="showTab('${tabId}')"]`).classList.add('active-tab');
            });
        }
    </script>
</body>

</html>

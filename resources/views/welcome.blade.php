<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Merath Navbar</title>
    <link rel="preload" href="background1.jpg" as="image">
    <link rel="preload" href="background2.jpg" as="image">
    <link rel="preload" href="background33.jpg" as="image">
    <link rel="preload" href="background4.jpg" as="image">
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
            font-family: "Playfair Display", serif;
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

        .overlay2 {
            position: absolute;
            inset: 0;

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

        .cont {
            background: #b3c2d84f;
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


            text-align: center;
            overflow: hidden;
            scroll-snap-align: start;

        }

        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }


        .product-card .info {
            padding: 1rem;
        }

        .product-card .info h3 {
            font-family: "Playfair Display", serif;

            font-size: 1.1rem;

        }

        .product-card .info p {
            font-size: 0.95rem;
            font-family: "Playfair Display", serif;
        }

        .info .getcolorOfprice {
            color: #b3934f
        }

        .info .categoryname {
            color: #4a4a4a;
        }

        .product-card1 {
            position: relative;
        }

        .product-card1::after {
            content: "New";
            position: absolute;
            top: 5px;
            left: 0;
            background: #000;
            color: #fff;
            padding: 5px 30px;
            font-size: 13px;
        }

        .product-card2 {
            position: relative;
        }

        .product-image-container {
            position: relative;
            width: 100%;
            height: auto;
        }

        .icon-overlay {
            position: absolute;
            top: 8px;
            right: 8px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .icon-btn {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            padding: 6px;
            font-size: 18px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .icon-btn:hover {
            transform: scale(1.1);
        }

        .product-card2::after {
            content: "Best Seller";
            position: absolute;
            top: 5px;
            left: 0;
            background: #C4A35A;
            color: #fff;
            padding: 5px 30px;
            font-size: 13px;
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
            padding: 15px 1rem;

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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .form-wrapper p {
            font-size: 15px;
            border: 1px solid;
            padding: 0 30px;

        }

        .form-wrapper a {
            margin-top: 15px;
        }

        .form-wrapper a button {
            background-color: #c4a35a;
            color: white;
            padding: 5px 30px;
            margin-left: 5px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-wrapper a button:hover {
            opacity: 50%;
            background: pink;
            color: #4a4a4a;
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

        .h2title {
            margin: 20px auto;
            font-family: "Playfair Display", serif;

        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            animation: backgroundSlideshow 16s infinite;
        }

        @keyframes backgroundSlideshow {
            0% {
                background-image: url('/images/background1.jpg');

            }

            25% {
                background-image: url('/images/background2.jpg');

            }

            50% {
                background-image: url('/images/background22.jpg');
            }

            75% {
                background-image: url('/images/background4.jpg');
            }

            100% {
                background-image: url('/images/background1.jpg');
            }
        }


        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #cdc7be98;
        }

        .overlay2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #cdc7be50;
        }
    </style>
    <style>
        #scrollToTop {
            position: fixed;
            bottom: 20px;
            left: 20px;
            display: none;
            background-color: #b3934f;
            color: white;
            padding: 10px 12px;
            border-radius: 50%;
            font-size: 18px;
            z-index: 9999;
            transition: all 0.3s ease;
            text-align: center;
        }

        #scrollToTop:hover {
            background-color: #555;
        }

        #scrollToTop2 {
            position: fixed;
            bottom: 25px;
            left: 20px;
            display: none;
            background-color: #b3934f;
            color: white;
            padding: 10px 12px;
            border-radius: 50%;
            font-size: 18px;
            z-index: 9999;
            transition: all 0.3s ease;
            text-align: center;
        }

        #scrollToTop2:hover {
            background-color: #555;
        }
    </style>

</head>

<a href="#" id="scrollToTop" title="Back to Top">
    <i class="fa-solid fa-arrow-up"></i>
</a>

<body>


    <!--Start NavBar-->
    <header>
        <div class="container">
            <!-- Logo -->
            <a href="#" class="logo">Merath</a>

            <!-- Desktop Navigation -->
            <nav class="desktop">
                <a href="/" style="color: #b3934f;">Home</a>
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
                    <a href="/cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-badge" id="cart-count">{{ $cartItems->count() }}</span>
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
    <!--Start Hero-->
    <div class="hero-container">
        <div class="background"></div>
        <div class="overlay"></div>
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Discover Artistry<br>for Your Home</h1>
                <p>
                    Exquisite ceramic and sculptural pieces that blend modern design with timeless craftsmanship
                </p>
                <div class="button-group">
                    <a href="{{ url('/shop') }}" class="btn btn-primary">Shop Collection</a>
                    <a href="{{ url('/about') }}" class="btn btn-outline">Discover Our Story</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Hero-->
    <div class="section">
        <div class="container">
            <div class="section-title">
                <h2>Crafted with Excellence</h2>
                <p>
                    Each piece in our collection is meticulously crafted by skilled artisans,
                    bringing together contemporary design and traditional craftsmanship.
                </p>
            </div>

            <div class="features">
                <div class="feature">
                    <div class="icon-circle">
                        <span class="step-number">01</span>
                    </div>
                    <h3>Curated Selection</h3>
                    <p>Our collection features handpicked pieces that blend artistry with functionality</p>
                </div>

                <div class="feature">
                    <div class="icon-circle">
                        <span class="step-number">02</span>
                    </div>
                    <h3>Artisan Crafted</h3>
                    <p>Each piece is meticulously handcrafted by skilled artisans who honor traditional techniques</p>
                </div>

                <div class="feature">
                    <div class="icon-circle">
                        <span class="step-number">03</span>
                    </div>
                    <h3>Timeless Design</h3>
                    <p>Our designs transcend trends, creating pieces that will be cherished for generations</p>
                </div>
            </div>
        </div>
    </div>
    <!---->


    <div class="containerb">
        <h2 class="title">Shop by Category</h2>

        <div class="grid">
            @foreach ($categories->take(4) as $category)
                <a href="{{ url('/shop?category=' . $category->name) }}" class="category">

                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
                    <div class="overlay2">
                        <h3>{{ $category->name }}</h3>
                        <p>{{ $category->description }}</p>
                        <span class="shop-now">Shop Now <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="py-16 cont">
        <div class="containerc">
            <div class="slider-wrapper">
                <div class="slider-header">
                    <h2 class="h2title title">New Arrivals</h2>
                    <div class="slider-buttons">
                        <button onclick="scrollSlider('left')">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button onclick="scrollSlider('right')">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="slider" id="productSlider">
                    @foreach ($products as $product)
                        <div class="product-card product-card1">
                            <div class="product-image-container">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

                                <!-- Overlay Icons -->
                                <div class="icon-overlay">
                                    <form action="{{ route('wishlist.add', $product->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <button type="submit" class="icon-btn">
                                            <i class="fa-regular fa-heart" style="color: #b3934f"></i>
                                            <!-- outline -->
                                        </button>
                                    </form>
                                    <form action="/cart/add" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="icon-btn">

                                            <i class="fa-solid fa-cart-shopping" style="color: #b3934f"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="info">
                                <h3>{{ $product->name }}</h3>
                                <p class="categoryname">{{ $product->category->name }}</p>
                                <p class="getcolorOfprice">{{ $product->price }} JD</p>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
        <hr>
        <div class="essence-section">
            <div class="essence-container">
                <div class="essence-grid">
                    <div>
                        <img src="{{ asset('storage/' . $randomProduct->image) }}" alt="{{ $randomProduct->name }}"
                            alt="Featured Collection" class="essence-image" />
                    </div>
                    <div class="essence-text">
                        <h2 class="essence-title">The Essence Collection</h2>
                        <p class="essence-paragraph">
                            Inspired by the natural world, our Essence Collection brings organic forms and
                            textures into your home. Each piece tells a story of craftsmanship and connection
                            to the earth.
                        </p>
                        <p class="essence-paragraph mb-8">
                            Discover vessels, sculptures, and decorative objects that celebrate the beauty
                            of imperfection and the warmth of handmade artistry.
                        </p>
                        <a href="/shop" class="essence-button">
                            Explore Collection
                        </a>
                    </div>
                </div>

                <!-- Product Slider Include -->

            </div>
        </div>
        <hr>
        <div class="py-16">
            <div class="containerc">
                <div class="slider-wrapper">
                    <div class="slider-header">
                        <h2 class="title h2title">Best Sellers</h2>
                        <div class="slider-buttons">
                            <button onclick="scrollSlider('left')">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button onclick="scrollSlider('right')">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="slider" id="productSlider">

                        @forelse ($bestSellers as $product)
                            <div class="product-card product-card2">
                                <div class="product-image-container">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

                                    <!-- Overlay Icons -->
                                    <div class="icon-overlay">
                                        <form action="{{ route('wishlist.add', $product->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="icon-btn">
                                                <i class="fa-regular fa-heart" style="color: #b3934f"></i>
                                                <!-- outline -->
                                            </button>
                                        </form>
                                        <form action="/cart/add" method="POST" style="display:inline;">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit" class="icon-btn">
                                                <i class="fa-solid fa-cart-shopping" style="color: #b3934f"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="info">
                                    <h3>{{ $product->name }}</h3>
                                    <h5 class="categoryname">{{ $product->category->name }}</h5>
                                    <p class="getcolorOfprice">JD{{ $product->price }}</p>
                                </div>
                            </div>
                        @empty
                            <p>No best sellers available yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="featured-section">
            <div class="featured-container">
                <div class="featured-header">
                    <h2 class="featured-title">Featured Products</h2>
                    <p class="featured-description">
                        Discover our most distinctive pieces, selected for their exceptional design and craftsmanship
                    </p>
                </div>

                <div class="featured-grid">

                    @foreach ($featuredProducts as $product)
                        <div class="featured-card group">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="featured-image group-hover-scale">
                            <div class="featured-overlay">
                                <h3 class="featured-name">{{ $product->name }}</h3>
                                <p class="featured-price">JOD {{ $product->price }}</p>
                                <a href="/product/{{ $product->id }}" class="featured-button">View Details</a>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="newsletter-section">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="newsletter-title">Join Our Family on Instagram</h2>
                    <p class="newsletter-subtitle">
                        Stay updated on new collections, exclusive offers, and design inspiration
                    </p>
                </div>
                <div class="form-wrapper">
                    <h4>Follow Us on Instagram</h4>


                    <img src="{{ asset('images/1.png') }}" width="70px" alt="">


                    <a href="https://www.instagram.com/merathart/" target="_blank">
                        <button style="margin-top:5px">Merath Art</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <!--footer-->
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-grid">
                    <!-- Brand Column -->
                    <div>
                        <h2 class="footer-title">Merath</h2>
                        <p class="footer-desc">
                            Discover exquisite art pieces for your home that blend timeless craftsmanship with modern
                            aesthetics.
                        </p>
                        <div class="footer-icons">
                            <a href="#" class="footer-icon">📸</a>
                            <a href="#" class="footer-icon">📘</a>
                            <a href="#" class="footer-icon">🐦</a>
                            <a href="#" class="footer-icon">✉️</a>
                        </div>
                    </div>

                    <!-- Shop Column -->
                    <div>
                        <h3 class="footer-heading">Shop</h3>
                        <ul class="footer-links">
                            <li><a href="/shop">All Products</a></li>
                            @foreach ($categories as $category)
                                <li><a href="/shop">{{ $category->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>

                    <!-- Info Column -->
                    <div>
                        <h3 class="footer-heading">Information</h3>
                        <ul class="footer-links">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/shipping">Shipping & Returns</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/terms">Terms & Conditions</a></li>
                            <li><a href="/faq">FAQ</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter Column -->
                    <div>
                        <h3 class="footer-heading">Join Our Family on Instagram</h3>
                        <p class="footer-desc">Follow to track updates on new collections and special offers.</p>

                        @csrf
                        <div class="footer-form">
                            <a href="https://www.instagram.com/merathart/" target="_blank">
                                <button type="submit" class="footer-button">Follow Us</button>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="footer-bottom">
                    <p>&copy; {{ date('Y') }} Merath. All rights reserved.</p>
                </div>
            </div>
        </footer>


        <!-- Scroll Logic -->
        <script>
            function scrollSlider(direction) {
                const slider = document.getElementById('slider');
                const scrollAmount = direction === 'left' ? -slider.offsetWidth / 2 : slider.offsetWidth / 2;
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        </script>
        <script>
            function scrollSlider(direction) {
                const slider = document.getElementById('slider');
                const scrollAmount = direction === 'left' ? -slider.offsetWidth / 2 : slider.offsetWidth / 2;
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        </script>

        <script>
            /*Start NavBar*/
            function toggleMenu() {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('open');
            }

            function toggleCart() {
                alert('Cart dropdown would appear here.');
            }
            /*End NavBar*/
            function scrollSlider(direction) {
                const slider = document.getElementById('productSlider');
                const scrollAmount = slider.offsetWidth / 2;
                slider.scrollBy({
                    left: direction === 'left' ? -scrollAmount : scrollAmount,
                    behavior: 'smooth'
                });
            }
        </script>


        <script>
            const scrollToTopBtn = document.getElementById("scrollToTop");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            });

            scrollToTopBtn.addEventListener("click", (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @once
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endonce
    <title>Shop Collection</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 1rem;
        }

        .shop-header {
            background-color: #f3f4f6;
            padding: 3rem 0;
            text-align: center;
        }

        .shop-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .shop-wrapper {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 2rem 0;
        }

        @media (min-width: 768px) {
            .shop-wrapper {
                flex-direction: row;
            }
        }

        .sidebar {
            width: 260px;
            flex-shrink: 0;
            display: none;
        }

        @media (min-width: 768px) {
            .sidebar {
                display: block;
            }
        }

        .filter-header {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .filter-group {
            margin-bottom: 2rem;
        }

        .product-section {
            flex: 1;
        }

        .top-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .sort-dropdown {
            position: relative;
        }

        .sort-menu {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            z-index: 10;
        }

        .sort-menu.active {
            display: block;
        }

        .sort-menu button {
            width: 100%;
            text-align: left;
            padding: 0.75rem 1rem;
            border: none;
            background: none;
            cursor: pointer;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: white;
            padding: 1rem;
            border: 1px solid #ddd;
            text-align: center;
        }

        /* Mobile Filters */
        .mobile-filters {
            display: none;
            padding: 1rem;
        }

        .filter-toggle-btn {
            background: none;
            border: 1px solid #ccc;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        @media (max-width: 767px) {
            .mobile-filters {
                display: block;
            }
        }

        .hidden {
            display: none;
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
        .product-card {
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            border-radius: 10px;
        }

        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            color: white;
            font-size: 12px;
            border-radius: 3px;
            z-index: 2;
        }

        .badge-new {
            background-color: black;
        }

        .badge-best-seller {
            top: 35px;
            /* pushes it below the "New" label */
            background-color: goldenrod;
        }

        .btn-wishlist {
            margin-top: 10px;
            background-color: transparent;
            border: 1px solid #ff4081;
            color: #ff4081;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-wishlist:hover {
            background-color: #ff4081;
            color: white;
        }
    </style>

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
                <a href="#">Collections</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>

            <!-- Icons -->
            <div class="icons">
                <span class="icon"><i class="fas fa-search"></i></span>
                <a href="/register" class="icon"><i class="fas fa-user"></i></a>
                <a href="#" class="icon"><i class="fas fa-heart"></i></a>
                <div class="icon cart-icon" onclick="toggleCart()">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-badge" id="cart-count">2</span>
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
    <div class="shop-header">
        <div class="container">
            <h1 style="margin:0 auto;font-family: 'Playfair Display', serif;">Shop Collection</h1>
        </div>
    </div>

    <div class="container shop-wrapper" style="display: flex; align-items: flex-start;">
        <!-- Sidebar -->
        <aside class="sidebar" id="filterSidebar">
            <div class="filter-group">
                <button id="resetFiltersBtn" style="margin-top: 10px;">Reset All</button>

                <div class="filter-header">
                    <h3 style="font-family: 'Playfair Display', serif;">Categories</h3>
                </div>
                @foreach ($categories as $category)
                    <label style="font-family: 'Playfair Display', serif;"><input type="checkbox"
                            class="filter-category" value="{{ $category->name }}" /> {{ $category->name }}</label>
                    <br /> <br> <br>
                @endforeach
            </div>



            <div class="filter-group">
                <div class="filter-header">
                    <h3 style="font-family: 'Playfair Display', serif;">Price Range</h3>
                </div>
                <input type="range" id="priceMin" min="0" max="1000" value="0" />
                <input type="range" id="priceMax" min="0" max="1000" value="1000" />
                <p>JD<span id="minPriceLabel">0</span> - JD<span id="maxPriceLabel">1000</span></p>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="product-section">
            <div class="mobile-filters">
                <button class="filter-toggle-btn" onclick="toggleMobileFilters()">Show Filters</button>
                <div id="mobileFilterContent" class="hidden">
                    <!-- Filter HTML can be cloned from Sidebar -->
                </div>
            </div>

            <div class="top-controls">
                <p><span id="productCount">0</span> products</p>
                <div class="sort-dropdown">
                    <button onclick="toggleSortMenu()">Sort By</button>
                    <div class="sort-menu" id="sortMenu">
                        <button onclick="sortProducts('newest')">Newest</button>
                        <button onclick="sortProducts('price-low-high')">Price: Low to High</button>
                        <button onclick="sortProducts('price-high-low')">Price: High to Low</button>
                        <button onclick="sortProducts('popularity')">Popularity</button>
                    </div>
                </div>
            </div>

            <div class="grid" id="productGrid">

            </div>
        </main>


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
                        <li><a href="/shop?category=Vases">Vases</a></li>
                        <li><a href="/shop?category=Sculptures">Sculptures</a></li>
                        <li><a href="/shop?category=Bowls">Bowls</a></li>
                        <li><a href="/shop?category=Home Accessories">Home Accessories</a></li>
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
                    <form method="POST" action="#">
                        @csrf
                        <div class="footer-form">
                            <input type="email" name="email" placeholder="Merath" required value="@Merath"
                                class="footer-input" />
                            <button type="submit" class="footer-button">Follow</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Merath. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script>
        const csrfToken = '{{ csrf_token() }}'; // server renders this value

        let minPrice = 0;
        let maxPrice = 1000;
        const sampleProducts = @json($products);
        console.log(sampleProducts);

        function renderProducts(products) {
            const grid = document.getElementById('productGrid');
            grid.innerHTML = '';

            products.forEach(product => {
                const imageUrl = `/storage/${product.image}`;
                const card = document.createElement('div');
                card.className = 'product-card';
                card.innerHTML = `<h4 class="product-title">${product.name}</h4>
                <img src="${imageUrl}" alt="${product.name}" class="product-image">
                <p class="product-category>${product.category.name}</p>
                <p class="product-price">${product.price} JD</p>
                <form action="/wishlist/add/${product.id}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn-wishlist">Add to Wishlist ❤️</button>
    </form>                
                `;

                grid.appendChild(card);
            });

            document.getElementById('productCount').innerText = products.length;
        }

        function toggleSortMenu() {
            document.getElementById('sortMenu').classList.toggle('active');
        }

        function toggleMobileFilters() {
            document.getElementById('mobileFilterContent').classList.toggle('hidden');
        }

        function sortProducts(type) {
            let sorted = [...sampleProducts];
            if (type === 'price-low-high') {
                sorted.sort((a, b) => a.price - b.price);
            } else if (type === 'price-high-low') {
                sorted.sort((a, b) => b.price - a.price);
            } else if (type === 'newest') {
                sorted.reverse(); // assuming newest is last
            }
            renderProducts(sorted);
            toggleSortMenu();
        }

        window.onload = () => {
            renderProducts(sampleProducts);
            document.getElementById('priceMin').addEventListener('input', (e) => {
                document.getElementById('minPriceLabel').innerText = e.target.value;
            });

            document.getElementById('priceMax').addEventListener('input', (e) => {
                document.getElementById('maxPriceLabel').innerText = e.target.value;
            });
        };
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/price-range')
                .then(response => response.json())
                .then(data => {
                    const min = data.min;
                    const max = data.max;

                    const priceMin = document.getElementById('priceMin');
                    const priceMax = document.getElementById('priceMax');
                    const minPriceLabel = document.getElementById('minPriceLabel');
                    const maxPriceLabel = document.getElementById('maxPriceLabel');

                    priceMin.min = min;
                    priceMin.max = max;
                    priceMin.value = min;

                    priceMax.min = min;
                    priceMax.max = max;
                    priceMax.value = max;

                    minPriceLabel.textContent = min;
                    maxPriceLabel.textContent = max;

                    // Optional: add event listeners to update labels on input
                    priceMin.addEventListener('input', () => {
                        minPriceLabel.textContent = priceMin.value;
                    });

                    priceMax.addEventListener('input', () => {
                        maxPriceLabel.textContent = priceMax.value;
                    });
                });
        });
    </script>
    <script>
        fetch('/price-range')
            .then(response => response.json())
            .then(data => {
                minPrice = data.min;
                maxPrice = data.max;

                const priceMin = document.getElementById('priceMin');
                const priceMax = document.getElementById('priceMax');
                const minPriceLabel = document.getElementById('minPriceLabel');
                const maxPriceLabel = document.getElementById('maxPriceLabel');

                priceMin.min = minPrice;
                priceMin.max = maxPrice;
                priceMin.value = minPrice;

                priceMax.min = minPrice;
                priceMax.max = maxPrice;
                priceMax.value = maxPrice;

                minPriceLabel.textContent = minPrice;
                maxPriceLabel.textContent = maxPrice;
            });

        function getSelectedCategories() {
            const checkboxes = document.querySelectorAll('.filter-category:checked');
            return Array.from(checkboxes).map(cb => cb.value);
        }

        function getSelectedPriceRange() {
            const min = parseFloat(document.getElementById('priceMin').value);
            const max = parseFloat(document.getElementById('priceMax').value);
            return {
                min,
                max
            };
        }

        function filterProducts() {
            const selectedCategories = getSelectedCategories();
            const {
                min,
                max
            } = getSelectedPriceRange();

            const filtered = sampleProducts.filter(product => {
                const inCategory = selectedCategories.length === 0 || selectedCategories.includes(product.category
                    .name);
                const inPrice = product.price >= min && product.price <= max;
                return inCategory && inPrice;
            });

            renderProducts(filtered);
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Apply filtering when category checkboxes change
            document.querySelectorAll('.filter-category').forEach(cb => {
                cb.addEventListener('change', filterProducts);
            });

            // Apply filtering when price range changes
            document.getElementById('priceMin').addEventListener('input', filterProducts);
            document.getElementById('priceMax').addEventListener('input', filterProducts);
        });
        document.getElementById('resetFiltersBtn').addEventListener('click', function() {
            // Reset all category checkboxes
            document.querySelectorAll('.filter-category').forEach(cb => {
                cb.checked = false;
            });

            // Reset price range to min and max
            document.getElementById('priceMin').value = minPrice; // Use dynamic minPrice
            document.getElementById('priceMax').value = maxPrice; // Use dynamic maxPrice
            document.getElementById('minPriceLabel').innerText = minPrice;
            document.getElementById('maxPriceLabel').innerText = maxPrice;

            // Re-filter to show all products
            filterProducts();
        });
    </script>
</body>

</html>

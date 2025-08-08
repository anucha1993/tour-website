<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#f97316">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Performance hints -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">

    <title>{{ config('app.name', 'Tour Booking') }} - @yield('title', 'จองทัวร์ออนไลน์')</title>

    <!-- Performance Optimization -->
    <link rel="preconnect" href="https://nexttripholiday.b-cdn.net">
    <link rel="dns-prefetch" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Critical CSS Inline -->
    <style>
        /* Critical Above-the-fold styles */
        .hero-slide {
            background-attachment: scroll !important;
            background-size: cover !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
            will-change: transform, opacity;
            transform: scale(1.05);
            transition: all 1000ms cubic-bezier(0.25, 0.46, 0.45, 0.94)
        }

        .hero-slide.active {
            opacity: 1 !important;
            transform: scale(1) !important
        }

        @media (max-width:768px) {
            .hero-slide {
                background-attachment: scroll !important;
                transform: scale(1.02)
            }

            .hero-slide.active {
                transform: scale(1) !important
            }
        }
    </style>

    <!-- Fonts with display=swap for better performance -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=prompt:300,400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="font-thai bg-gray-50 antialiased">

    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    
    <!-- Header Section - 15% ของความสูงหน้าจอ -->
    <header class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-200">
        @include('layouts.partials.header')
    </header>

    <!-- Main Content Area - 75% ของความสูงหน้าจอ -->
    <main class="min-h-[75vh] flex-1">
        @yield('content')
    </main>

    <!-- Footer Section - 10% ของความสูงหน้าจอ -->
    <footer class="bg-gray-900 text-white">
        @include('layouts.partials.footer')
    </footer>


    <!-- Scripts -->
    @stack('scripts')
</body>

</html>

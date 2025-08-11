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

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'จองทัวร์ออนไลน์ แพ็คเกจทัวร์คุณภาพในราคาดีที่สุด ทัวร์ในประเทศและต่างประเทศ')">
    <meta name="keywords" content="ทัวร์, จองทัวร์, แพ็คเกจทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ">
    <meta name="author" content="{{ config('app.name') }}">
    <meta property="og:title" content="@yield('title', 'จองทัวร์ออนไลน์')">
    <meta property="og:description" content="@yield('description', 'จองทัวร์ออนไลน์ แพ็คเกจทัวร์คุณภาพในราคาดีที่สุด')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('images/hero/bandner_สำรวจโลกกว้างกับเรา.webp') }}">

    <!-- Performance Optimization -->
    <link rel="preconnect" href="https://nexttripholiday.b-cdn.net" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    
    <!-- Preload critical resources -->
    @stack('preload')

    <!-- Critical CSS Inline -->
    <style>
        /* Critical Above-the-fold styles - Minimal */
        body { font-family: 'Kanit', sans-serif; }
        
        .hero-slide {
            background-attachment: scroll;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        /* Essential layout */
        .relative { position: relative; }
        .absolute { position: absolute; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .bg-black { background-color: rgb(0 0 0); }
        .bg-opacity-30 { background-opacity: 0.3; }
        .text-white { color: rgb(255 255 255); }
        .text-center { text-align: center; }
        .font-bold { font-weight: 700; }
        .grid { display: grid; }
        .place-items-center { place-items: center; }
        .px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
    </style>

    <!-- Optimized font loading - Single weight -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Add cache-busting meta tag -->
    <meta name="build-version" content="{{ filemtime(public_path('build/manifest.json')) }}">

    @stack('styles')
</head>

<body class="font-thai bg-gray-50 antialiased" style="font-family: 'Kanit', sans-serif;">
    
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

    <!-- Service Worker Registration -->
    <script>
        // Remove any old CSS references that might be cached
        document.addEventListener('DOMContentLoaded', function() {
            // Remove any link tags that reference non-existent CSS files
            const badLinks = document.querySelectorAll('link[href*="/css/app.css"]');
            badLinks.forEach(link => link.remove());
        });

        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then((registration) => {
                        // SW registered successfully
                    })
                    .catch((registrationError) => {
                        // SW registration failed
                    });
            });
        }
    </script>
</body>

</html>

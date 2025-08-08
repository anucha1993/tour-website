<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tour Booking') }} - @yield('title', 'จองทัวร์ออนไลน์')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=prompt:300,400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-thai bg-gray-50 antialiased">
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

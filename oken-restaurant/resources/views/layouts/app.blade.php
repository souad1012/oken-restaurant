<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OKEN Restaurant') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        .bg-primary-dark {
            background-color: #4A3F35;
        }
        .bg-primary-light {
            background-color: #6B5D4D;
        }
        .text-primary-dark {
            color: #4A3F35;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        
        @include('layouts.footer')
    </div>
</body>
</html>

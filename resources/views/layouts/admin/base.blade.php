<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin Portfolio Website</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/unicons/css/line.css') }}">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        @include('layouts.admin.header')
        @include('layouts.admin.sidebar')
        <main>

        @yield('content')
            
        </main>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('assets/js/admin.js') }}"></script>
    </body>

</html>
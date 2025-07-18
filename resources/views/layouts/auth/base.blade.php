<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Portfolio Website</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/unicons/css/line.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
    <body >
        <main>
            @yield('content')
        </main>
    </body>
</html>
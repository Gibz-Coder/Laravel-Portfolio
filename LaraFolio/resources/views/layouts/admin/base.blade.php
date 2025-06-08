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
        <script src="{{ asset('assets/js/admin.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');
        
            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
            });
        </script>
    </body>

</html>
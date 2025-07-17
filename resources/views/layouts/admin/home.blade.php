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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');

            function dynamicColors() {
                const r = Math.floor(Math.random() * 255);
                const g = Math.floor(Math.random() * 255);
                const b = Math.floor(Math.random() * 255);
                return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
            }

            function poolColors(a) {
                const pool = [];
                for (let i = 0; i < a; i++) {
                    pool.push(dynamicColors());
                }
                return pool;
            }
        
            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($skills as $skill)
                        '{{ $skill->name }}',
                    @endforeach
                ],
                datasets: [{
                label: '# of Skills(%)',
                backgroundColor: poolColors({{ count($skills) }}),
                borderColor: poolColors({{ count($skills) }}),
                data: [
                    @foreach ($skills as $skill)
                        '{{ $skill->proficiency }}',
                    @endforeach
                ],
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
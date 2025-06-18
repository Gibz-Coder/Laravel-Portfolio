@if (session('flash_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: '{{ session('flash_message') }}',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: true,
                allowOutsideClick: true,
                allowEscapeKey: true
            });
        });
    </script>
@endif

@if (session('flash_error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Error!',
                text: '{{ session('flash_error') }}',
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#d33',
                showConfirmButton: true,
                allowOutsideClick: true,
                allowEscapeKey: true
            });
        });
    </script>
@endif

@if (session('flash_warning'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Warning!',
                text: '{{ session('flash_warning') }}',
                icon: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#f39c12',
                showConfirmButton: true,
                allowOutsideClick: true,
                allowEscapeKey: true
            });
        });
    </script>
@endif

@if (session('flash_info'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Info!',
                text: '{{ session('flash_info') }}',
                icon: 'info',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: true,
                allowOutsideClick: true,
                allowEscapeKey: true
            });
        });
    </script>
@endif
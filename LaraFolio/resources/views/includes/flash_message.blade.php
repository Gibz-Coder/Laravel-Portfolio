@if (session('flash_message'))
    <p class="flash_message">
        {{ session('flash_message') }}
    </p>
@endif
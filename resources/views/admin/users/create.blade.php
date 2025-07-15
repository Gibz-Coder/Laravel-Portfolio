<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf
    @include('admin.users.form', ['formMode' => 'create'])
</form>
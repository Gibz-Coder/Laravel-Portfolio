<form method="POST" action="{{ route('admin.skills.store') }}">
    @csrf
    @include('admin.skills.form', ['formMode' => 'create'])
</form>

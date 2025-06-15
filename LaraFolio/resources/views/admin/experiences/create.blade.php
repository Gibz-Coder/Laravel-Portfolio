
<form method="POST" action="{{ route('admin.experiences.store') }}">
    @csrf()
    @method('POST')
    @include('admin.experiences.form', ['formMode' => 'create'])
</form>

<form method="POST" action="{{ route('admin.skills.update', $skill->id) }}" id="edit-skill-form">
    @csrf
    @method('PATCH')
    @include('admin.skills.form', ['formMode' => 'edit'])
</form>
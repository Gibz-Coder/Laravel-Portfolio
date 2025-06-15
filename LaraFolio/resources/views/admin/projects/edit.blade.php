@extends('layouts.admin.base')
@section('content')
    <form method="POST" action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('admin.projects.form', ['formMode' => 'edit'])
    </form>
@endsection
@extends('layouts.admin.base')
@section('content')
    <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.projects.form', ['formMode' => 'create'])
    </form>
@endsection
@extends('layouts.admin.base')
@section('content')
<form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.testimonials.form', ['formMode' => 'create'])
</form>
@endsection
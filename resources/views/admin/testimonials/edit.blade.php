@extends('layouts.admin.base')
@section('content')
<form method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @include('admin.testimonials.form', ['formMode' => 'edit'])
</form>
@endsection
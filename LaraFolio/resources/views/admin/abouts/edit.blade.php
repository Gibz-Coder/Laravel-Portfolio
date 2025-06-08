@extends('layouts.admin.base')
@section('content')
<section class="setting" id="setting">
    <div class="setting-wrapper">
        @include('layouts.admin.nav')
        <div class="setting_content">
            <section class="about" id="about">
                <form method="POST" action="{{ route('admin.abouts.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @include('admin.abouts.form', ['formMode' => 'edit'])
                </form>
            </section>
        </div>
    </div>
</section>
@endsection
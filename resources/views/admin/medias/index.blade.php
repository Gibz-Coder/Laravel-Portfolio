@extends('layouts.admin.base')
@section('content')
<section class="setting" id="setting1">
    <div class="setting-wrapper">
        @include('layouts.admin.nav')
        <div class="setting_content">
            <section class="about" id="about">
                <div class="titlebar">
                    <h1>Social Medias</h1>
                </div>
                @include('includes.flash_message')
                <div class="social-wrapper">
                        <div class="card">
                            <div class="social_table-heading">
                                <p>Link</p>
                                <p>Icon</p>
                                <p></p>
                            </div>

                            @foreach ($medias as $media)
                            <div class="social_table-items">
                                <p>{{ $media->link }}</p>
                                <button class="service_table-icon">
                                    <i class="fab {{ $media->icon }}"></i>
                                </button>
                                <form method="POST" action="{{ route('admin.medias.destroy', $media->id) }}" style="display: inline;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn-icon danger delete-btn" data-experience-name="{{ $media->link }}">
                                        Delete &nbsp;
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                <!-- <form method="POST" action="{{ route('admin.medias.destroy', $media->id) }}" style="display: inline-block;">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button type="submit" class="danger" onclick="return confirm('Are you sure you want to delete this media?')">
                                        Delete
                                    </button>
                                </form> -->
                            </div> 
                            @endforeach
                            <br>
                            @include('admin.medias.form')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
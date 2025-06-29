@extends('layouts.admin.base')
@section('content')
<section class="testimonials" id="projects">
    <div class="titlebar">
        <h1>Testimonials </h1>
        <a href="{{ route('admin.testimonials.create') }}" class="open-modal">
            <button class="btn-icon success open--modal success">New Testimonial</button>            
        </a>
    </div>
    @include('includes.flash_message')
    <div class="table">

        <div class="table-filter">
            <div>
                <ul class="table-filter-list">
                    <li>
                        <p class="table-filter-link link-active">All</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-search">
            <div>
                <select class="search-select" name="" id="">
                    <option value="">Filter Project</option>
                </select>
            </div>
            <div class="relative">
                <input class="search-input" type="text" name="search" placeholder="Search Project...">
            </div>
        </div>

        <div class="testimonial_table-heading">
            <p>Photo</p> 
            <p>name</p>
            <p>Function</p>
            <p>Testimony</p>
            <p>Rating</p>
            <p>Actions</p>
        </div>
        <!-- item 1 -->
         @foreach ($testimonials as $testimonial)
            <div class="testimonial_table-items">
                <p>
                    @if ($testimonial->image)
                        <img src="{{ asset('assets/img/' . $testimonial->image) }}" alt="" class="testimonial_img-list">
                    @else
                        <img src="{{ asset('assets/img/no-image.png') }}" alt="" class="testimonial_img-list">
                    @endif
                </p>
                <p>{{ $testimonial->name }}</p>
                <p>{{ $testimonial->function }}</p>
                <p>{{ $testimonial->testimony }}</p>
                <p>{{ $testimonial->rating }}/5</p>
                <div>
                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="open-modal">
                    <button class="btn-icon success edit-experience-btn"
                            data-id="{{ $testimonial->id }}"
                            data-name="{{ $testimonial->name }}"
                            data-function="{{ $testimonial->function }}"
                            data-testimony="{{ $testimonial->testimony }}"
                            data-rating="{{ $testimonial->rating }}">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    </a>                    
                    <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" style="display: inline;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-icon danger delete-btn" data-experience-name="{{ $testimonial->name }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
         @endforeach
        
        <div class="table-paginate">
            <div class="pagination">
                <a href="#" class="btn">&laquo;</a>
                <a href="#" class="btn active">1</a>
                <a href="#" class="btn">2</a>
                <a href="#" class="btn">3</a>
                <a href="#" class="btn">&raquo;</a>
            </div>
        </div>
    </div>
</section>
@endsection
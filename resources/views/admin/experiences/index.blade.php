@extends('layouts.admin.base')
@section('content')
<section class="experiences" id="experiences">
    <div class="titlebar">
        <h1>Experiences </h1>
        <button class="btn-icon success open-modal">New Experience</button>
    </div>
    @include('admin.experiences.create')
    @include('includes.flash_message')

    <!-- Hidden input to detect validation errors for create form -->
    @if ($errors->any() && !request()->has('edit'))
        <input type="hidden" id="has-create-errors" value="1">
    @endif
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
                    <option value="">Filter Experience</option>
                </select>
            </div>
            <div class="relative">
                <input class="search-input" type="text" name="search" placeholder="Search Experience...">
            </div>
        </div>
        <div class="experience_table-heading">
            <p>Company</p> 
            <p>Period</p>
            <p>Position</p>
            <p>Actions</p>
        </div>
        <!-- item 1 -->
         @foreach ($experiences as $experience)
            <div class="experience_table-items">
                <p>{{ $experience->company }}</p>
                <p>{{ $experience->period }}</p>
                <p>{{ $experience->position }}</p>
                <div>
                    <button class="btn-icon success edit-experience-btn"
                            data-id="{{ $experience->id }}"
                            data-company="{{ $experience->company }}"
                            data-period="{{ $experience->period }}"
                            data-position="{{ $experience->position }}">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <form method="POST" action="{{ route('admin.experiences.destroy', $experience->id) }}" style="display: inline;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-icon danger delete-btn" data-experience-name="{{ $experience->company }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
            @include('admin.experiences.edit')
         @endforeach

    </div>
</section>

<!-- Edit Experience Modal -->
<div id="edit-experience-modal" style="display: none;">
    @php
        $editExperience = new App\Models\Experience();
        $editExperience->id = 0; // Placeholder ID that will be updated by JavaScript
    @endphp
    @include('admin.experiences.edit', ['experience' => $editExperience])
</div>

@endsection

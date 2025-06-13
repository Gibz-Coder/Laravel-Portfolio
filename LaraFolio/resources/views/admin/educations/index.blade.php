@extends('layouts.admin.base')
@section('content')
<section class="educations" id="educations">
    <div class="titlebar">
        <h1>Educations </h1>
        <button class="open-modal">New Education</button>
    </div>
    @include('admin.educations.create')
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
                    <option value="">Filter Service</option>
                </select>
            </div>
            <div class="relative">
                <input class="search-input" type="text" name="search" placeholder="Search Service...">
            </div>
        </div>

        <div class="education_table-heading">
            <p>Institution</p> 
            <p>Period</p>
            <p>Degree</p>
            <p>Department</p>
            <p>Actions</p>
        </div>
        <!-- item 1 -->
         @foreach ($educations as $education)
            <div class="education_table-items">
                <p>{{ $education->institution }}</p>
                <p>{{ $education->period }}</p>
                <p>{{ $education->degree }}</p>
                <p>{{ $education->department }}</p>
                <div>
                    <button class="btn-icon success edit-education-btn"
                            data-id="{{ $education->id }}"
                            data-institution="{{ $education->institution }}"
                            data-period="{{ $education->period }}"
                            data-degree="{{ $education->degree }}"
                            data-department="{{ $education->department }}">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <form method="POST" action="{{ route('admin.educations.destroy', $education->id) }}" style="display: inline;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-icon danger delete-btn" data-education-name="{{ $education->institution }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
            @include('admin.educations.edit')
         @endforeach
    </div>
</section>
@endsection

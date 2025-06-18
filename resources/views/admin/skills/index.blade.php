@extends('layouts.admin.base')
@section('content')
<section class="skills" id="skills">
    <div class="titlebar">
        <h1>Skills </h1>
        <button class="btn-icon success open-modal">New Skill</button>
    </div>
    @include('admin.skills.create')
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
        <form method="GET" action="{{ route('admin.skills.index') }}" >
            @csrf
            <div class="table-search">
                <div>
                    <select class="search-select" name="" id="">
                        <option value="">Filter Skills</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search Skill..." value="{{ request('search') }}">
                </div>
            </div>
        </form>

        <div class="skill_table-heading">
            <p>Name</p>
            <p>Proficiency</p>
            <p>Service</p>
            <p>Actions</p>
        </div>
        <!-- item 1 -->
        @foreach ($skills as $skill)
        <div class="skill_table-items">
            <p>{{ $skill->name }}</p>
            <div class="table_skills-bar">
                <span class="table_skills-percentage" style="width: {{ $skill->proficiency }}%;"></span>
                <strong>{{ $skill->proficiency }}%</strong>
            </div>
            @if ($skill->service)
                <p>{{ $skill->service->name }}</p>
            @else
                <p></p>
            @endif
            
            <div>
                <button class="btn-icon success edit-skill-btn"
                        data-skill-id="{{ $skill->id }}"
                        data-skill-name="{{ $skill->name }}"
                        data-skill-proficiency="{{ $skill->proficiency }}"
                        data-skill-service-id="{{ $skill->service_id ?? '' }}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                    <form method="POST" action="{{ route('admin.skills.destroy', $skill->id) }}" style="display: inline;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-icon danger delete-btn" data-skill-name="{{ $skill->name }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
            </div>
        </div>
        @endforeach
        <div class="table-paginate">
            {{ $skills->links('includes.pagination') }}
        </div>
    </div>
</section>

<!-- Edit Skill Modal -->
<div id="edit-skill-modal" style="display: none;">
    @php
        $editSkill = new App\Models\Skill();
        $editSkill->id = 0; // Placeholder ID that will be updated by JavaScript
    @endphp
    @include('admin.skills.edit', ['skill' => $editSkill])
</div>

@endsection

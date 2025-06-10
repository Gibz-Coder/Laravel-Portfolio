@extends('layouts.admin.base')
@section('content')
<section class="services" id="services">
    <div class="titlebar">
        <h1>Services</h1>
        <button class="open-modal">New Service</button>
    </div>
    @include('admin.services.create')
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
                    <option value="">Filter Service</option>
                </select>
            </div>
            <div class="relative">
                <input class="search-input" type="text" name="search" placeholder="Search Service...">
            </div>
        </div>
        <div class="service_table-heading">
            <p>Title</p>
            <p>Icon</p>
            <p>Description</p>
            <p>Actions</p>
        </div>
        <!-- item 1 -->
        @foreach ($services as $service)
        <div class="service_table-items">
            <p>{{ $service->name }}</p>
            <button class="service_table-icon">
                <i class="fas {{ $service->icon }}"></i>
            </button>
            <p>{{ $service->description }}</p>
            <div>
                <button class="btn-icon success edit-service-btn" data-id="{{ $service->id }}" data-name="{{ $service->name }}" data-icon="{{ $service->icon }}" data-description="{{ $service->description }}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}" style="display: inline;">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="danger" onclick="return confirm('Are you sure you want to delete this service?')">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach

    </div>

    <!-- Edit Service Modal -->
    <form method="POST" action="" id="edit-service-form">
        @csrf
        @method('PATCH')
        <div class="modal" id="edit-service-modal">
            <div class="modal-content">
                <h2>Edit Service</h2>
                <span class="close-modal">×</span>
                <hr>
                <div>
                    <label>Service Name</label>
                    <input type="text" name='name' id="edit-service-name" value=""/>

                    <label>Icon Class <span style="color:#006fbb;">(Find your suitable icon: <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>)</span></label>
                    <small style="color:#666;">Examples: fa-code, fa-server, fa-laptop-code, fa-paint-brush, fa-mobile-alt</small>
                    <input type="text" name='icon' id="edit-service-icon" value="" placeholder="fa-code"/>

                    <label>Description</label>
                    <textarea cols="10" rows="5" name='description' id="edit-service-description"></textarea>
                </div>
                <hr>
                <div class="modal-footer">
                    <button type="button" class="close-modal">
                        Cancel
                    </button>
                    <button type="submit" class="secondary">
                        <span><i class="fa fa-spinner fa-spin"></i></span>
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

</section>

@if ($errors->any())
    <div id="validation-errors" style="display: none;" data-has-errors="true" data-is-create="{{ !old('service_id') ? 'true' : 'false' }}"></div>
@endif

@endsection

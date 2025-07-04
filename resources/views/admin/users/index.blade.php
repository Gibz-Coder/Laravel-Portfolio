@extends('layouts.admin.base')
@section('content')
<section class="users" id="users">
    <div class="titlebar">
        <h1>Users </h1>
        <button class="btn-icon success open-modal">New User</button>
    </div>
    @include('includes.flash_message')
    @include('admin.users.create')
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
                    <option value="">Filter User</option>
                </select>
            </div>
            <div class="relative">
                <input class="search-input" type="text" name="search" placeholder="Search User...">
            </div>
        </div>
        <div class="user_table-heading">
            <p>Photo</p>
            <p>Name</p>
            <p>Email</p>
            <p>Role</p>
            <p>Actions</p>
        </div>
        <!-- item 1 -->
        @foreach ($users as $user)
            <div class="user_table-items">
                <p>
                    @if ($user->image)
                        <img src="{{ asset('assets/img/' . $user->image) }}" alt="" class="user_img-list">
                    @else
                        <img src="{{ asset('assets/img/no-image.jpg') }}" alt="" class="user_img-list">
                    @endif
                </p>
                <p>{{ $user->name }}</p>
                <p>{{ $user->email }}</p>
                <p>{{ $user->role }}</p>
                <div>
                    <button class="btn-icon success edit-user-btn" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-bio="{{ $user->bio }}" data-role="{{ $user->role }}">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" style="display: inline;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-icon danger delete-btn" data-user-name="{{ $user->name }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection

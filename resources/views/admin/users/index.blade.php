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
                    <button class="btn-icon success open-modal edit-user-btn" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-bio="{{ $user->bio }}" data-role="{{ $user->role }}">
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

    <!-- Edit User Modal -->
    <form method="POST" action="" id="edit-user-form">
        @csrf
        @method('PATCH')
        <div class="modal" id="edit-user-modal">
            <div class="modal-content">
                <h2>Edit User</h2>
                <span class="close-modal">×</span>
                <hr>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" id="edit-user-name" value=""/>

                    <label>Email</label>
                    <input type="text" name="email" id="edit-user-email" value=""/>
                    
                    <label>Bio</label>
                    <textarea cols="20" rows="3" name="bio" id="edit-user-bio"></textarea>
                    
                    <p>Type</p>
                    <select name="role" id="edit-user-role">
                        <option disabled selected>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">Standard User</option>
                    </select>

                    <label>Password</label>
                    <input type="password" name="password" id="edit-user-password" placeholder="Leave blank to keep current password">
                </div>
                <hr>
                <div class="modal-footer">
                    <button type="button" class="close-modal">
                        Cancel
                    </button>
                    <button type="submit" class="secondary">
                        <span><i class="fa fa-spinner fa-spin"></i></span>
                        Update User
                    </button>
                </div>
            </div>
        </div>
    </form>

</section>

    <!-- Hidden input to detect validation errors for create form -->
    @if ($errors->any() && !request()->has('edit'))
        <input type="hidden" id="has-create-errors" value="1">
    @endif

@endsection

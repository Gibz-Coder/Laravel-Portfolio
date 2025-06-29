@extends('layouts.admin.base')
@section('content')
<section class="messages">
    <div class="messages_container">
        <div class="titlebar">
            <h1>Messages </h1>
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
                        <option value="">Filter Message</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search Message...">
                </div>
            </div>

            <div class="message_table-heading">
                <p>Name</p> 
                <p>Email</p>
                <p>Subject</p>
                <p>Description</p>
                <p>Status</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
             @foreach ($messages as $message)
                <div class="message_table-items">
                    <p>
                        <a href="{{ route('admin.messages.edit', $message->id) }}" class="link" style="text-decoration: none; color:blue">
                            {{ $message->name }}
                        </a>
                    </p> 
                    <p>{{ $message->email }}</p>
                    <p>{{ $message->subject }}</p>
                    <p>{{ $message->description }}</p>
                    <p>
                        @if ($message->status === 1) 
                            <span class="badge_read">
                                Read
                            </span>
                        @else
                            <span class="badge_unread">
                                Unread
                            </span>
                        @endif
                    </p>
                    <div>
                        <form method="POST" action="{{ route('admin.messages.destroy', $message->id) }}" style="display: inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn-icon danger delete-btn" data-service-name="{{ $message->name }}">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
             @endforeach

        </div>   
    </div>
</section>
@endsection

@extends('layouts.auth.base')
@section('content')
<div class="account-container">
    <div class="account-card">
        <header>
            <h1 class="">Connect to a Portfolio account</h1>
            <p>Log into your account to post skills</p>
        </header>
        <form method="POST" action="{{ route('authenticate') }}">
            @csrf
            <label>Email</label>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <input id="email" type="email" name="email" value="" />

            <label for="password">Password</label>
            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <input id="password" type="password" name="password"value="" />

            <button type="submit">Sign In</button> 
            <br><br>
            <p>Don't have an account? <a href="#" class="text-laravel">Register</a></p>
        </form>
    </div>
</div>
@endsection
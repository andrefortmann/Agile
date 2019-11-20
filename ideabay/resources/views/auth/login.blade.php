@extends('layouts.app')

@section('content')
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-5">
            <h2>Welcome</h2>
            <h2>Sign in to Ideabay</h2>
        </div>
        <div class="mb-3">
            <span>Enter Details</span>
        </div>
        <div class="form-label-group required">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
            <label for="email">Email</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-label-group required">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
        <p class="mt-5">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <form class="form-signin" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-5">
            <h2>Welcome</h2>
            <h2>Sign up to Ideabay</h2>
        </div>
        <div class="mb-3">
            <span>Enter Details</span>
        </div>
        <div class="form-label-group required">
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required>
            <label for="name">Name</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
        <div class="form-label-group">
            <input type="text" id="company" class="form-control" placeholder="Company">
            <label for="company">Company</label>
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
        <div class="form-label-group required">
            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            <label for="password-confirm">Confirm Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="mt-5">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
    </form>
@endsection
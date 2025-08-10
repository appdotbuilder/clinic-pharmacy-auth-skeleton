@extends('layouts.guest')

@section('content')
<div class="card card-auth shadow-sm">
    <div class="card-header bg-white">
        <h4 class="card-title text-center mb-0">{{ __('Register') }}</h4>
    </div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" class="form-control @error('name') is-invalid @enderror" 
                       type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror" 
                       type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control @error('password') is-invalid @enderror"
                       type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                       type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
    <div class="card-footer bg-light text-center">
        <small class="text-muted">
            {{ __('Already registered?') }}
            <a href="{{ route('login') }}" class="link-primary">{{ __('Sign in') }}</a>
        </small>
    </div>
</div>
@endsection
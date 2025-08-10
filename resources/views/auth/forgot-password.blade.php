@extends('layouts.guest')

@section('content')
<div class="card card-auth shadow-sm">
    <div class="card-header bg-white">
        <h4 class="card-title text-center mb-0">{{ __('Forgot Password') }}</h4>
    </div>
    <div class="card-body p-4">
        <div class="mb-4 text-muted small">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror" 
                       type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
    <div class="card-footer bg-light text-center">
        <small class="text-muted">
            <a href="{{ route('login') }}" class="link-primary">{{ __('Back to login') }}</a>
        </small>
    </div>
</div>
@endsection
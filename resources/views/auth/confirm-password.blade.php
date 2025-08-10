@extends('layouts.guest')

@section('content')
<div class="card card-auth shadow-sm">
    <div class="card-header bg-white">
        <h4 class="card-title text-center mb-0">{{ __('Confirm Password') }}</h4>
    </div>
    <div class="card-body p-4">
        <div class="mb-4 text-muted small">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control @error('password') is-invalid @enderror"
                       type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
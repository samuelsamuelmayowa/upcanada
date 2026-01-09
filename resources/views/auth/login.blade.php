@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')

<section class="py-5 bg-light" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-6 col-lg-5">

                {{-- Session Status Message --}}
           
                @if (session('status'))
                    <div class="alert alert-success mb-4 text-center">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Login Card --}}
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h3 class="mb-0 fw-bold py-2">Welcome Back</h3>
                        <small class="opacity-75">Sign in to your account</small>
                    </div>

                    <div class="card-body p-4">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">
                                    Email Address
                                </label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus
                                    autocomplete="email"
                                >
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            {{-- Password --}}
<div class="mb-3">
    <label for="password" class="form-label fw-semibold">
        Password
    </label>

    <div class="input-group">
        <input
            id="password"
            type="password"
            class="form-control form-control-lg @error('password') is-invalid @enderror"
            name="password"
            required
            autocomplete="current-password"
        >

        <span class="input-group-text bg-white" style="cursor: pointer;"
              onclick="togglePassword()">
            <i id="toggleIcon" class="bi bi-eye"></i>
        </span>
    </div>

    @error('password')
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
    @enderror
</div>

                            {{-- Remember Me --}}
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none small text-primary fw-semibold"
                                       href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                @endif
                            </div>

                            {{-- Submit --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg fw-semibold">
                                    Log In
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- Register Prompt --}}
                <div class="text-center mt-4">
                    <p class="small mb-1">
                        Don’t have an account?
                        <a href="{{ route('register') }}" class="fw-semibold">
                            Register
                        </a>
                    </p>

                    <p class="small">
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            ← Back to Home
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById("password");
        const icon = document.getElementById("toggleIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }
</script>


@endsection


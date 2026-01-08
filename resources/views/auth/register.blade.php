@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')

<section class="py-5 bg-light" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-6 col-lg-5">

                {{-- Register Card --}}
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-success text-white text-center rounded-top-4">
                        <h3 class="mb-0 fw-bold py-2">Create Account</h3>
                        <small class="opacity-75">Join UPU Canada</small>
                    </div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    Full Name
                                </label>
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autofocus
                                >
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Email -->
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
                                >
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">
                                    Password
                                </label>
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                >
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-semibold">
                                    Confirm Password
                                </label>
                                <input
                                    id="password_confirmation"
                                    type="password"
                                    class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation"
                                    required
                                >
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit -->
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('login') }}" class="small text-decoration-none fw-semibold">
                                    Already registered?
                                </a>

                                <button type="submit" class="btn btn-success btn-lg fw-semibold">
                                    Register
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Extra Link -->
                <div class="text-center mt-4">
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

@endsection

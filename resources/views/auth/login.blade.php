@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')


<section class="py-5 main" style="margin-top: 10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                {{-- Session Status Message --}}
                @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Login Card --}}
                <div class="card shadow-sm">
                    <div class="card-headertext-white">
                        <h2 class="mb-0 font-bold p-2">Login</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Remember Me --}}
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>

                            {{-- Submit & Forgot --}}
                            <div class="d-flex justify-content-between align-items-center">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none small" href="{{ route('password.request') }}">
                                        Forgot your password?
                                    </a>
                                @endif

                                <button type="submit" class="btn btn-primary">
                                    Log in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Register Prompt --}}
                <div class="text-center mt-3">
                    <p class="small">
                        Don't have an account?
                        <a href="{{ route('register') }}">Register</a>
                    </p>
                </div>


                  <div class="text-center mt-3">
                    <p class="small  font-semibold">
                        <a href="{{ route('home') }}">Home</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
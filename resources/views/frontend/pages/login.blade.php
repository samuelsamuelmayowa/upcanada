@extends('frontend.layouts.master')

@section('title','CANADA PROJECT || Login Page')

@section('main-content')
<!-- Breadcrumbs -->
<!-- <div class="bg-light py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home <i class="ti-arrow-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>
</div> -->
<!-- End Breadcrumbs -->

<!-- Login Section -->
<section class="py-5" style="margin-top: 140px;">  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <!-- <h3 class="card-title mb-4">Login</h3> -->
                        <p class="mb-4">Please login to continue</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @error('password')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->
@endsection

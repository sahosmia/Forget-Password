@extends('layouts.auth_layouts')

@section('title')
Login
@endsection

@section('content')
<div class="card">

    <!-- Logo -->
    <div class="card-header pt-4 pb-4 text-center bg-primary">
        <a href="index.html">
            <span><img src="{{ asset('assets/images/logo.png') }}" alt="" height="18"></span>
        </a>
    </div>

    <div class="card-body p-4">

        <div class="text-center w-75 m-auto">
            <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email address</label>
                <input name="email" value="{{ old('email') }}" class="form-control" type="text" id="emailaddress" placeholder="Enter your email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-muted float-end"><small>Forgot your password?</small></a>
                @endif

                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" value="{{ old('password') }}" name="password" id="password" class="form-control" placeholder="Enter your password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-3 mb-0 text-center">
                <button class="btn btn-primary" type="submit"> Log In </button>
            </div>

        </form>
    </div> <!-- end card-body -->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Sign Up</b></a></p>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

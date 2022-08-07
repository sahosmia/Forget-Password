@extends('layouts.auth_layouts')

@section('title')
Register
@endsection

@section('content')


<div class="card">
    <!-- Logo-->
    <div class="card-header pt-4 pb-4 text-center bg-primary">
        <a href="index.html">
            <span><img src="{{ asset('assets/images/logo.png') }}" alt="" height="18"></span>
        </a>
    </div>

    <div class="card-body p-4">

        <div class="text-center w-75 m-auto">
            <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
            <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" name="name" value="{{ old('name') }}" type="text" id="name" placeholder="Enter your name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email address</label>
                <input class="form-control" name="email" value="{{ old('email') }}" type="email" id="emailaddress" placeholder="Enter your email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control" placeholder="Enter your password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Conform Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Enter your password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 text-center">
                <button class="btn btn-primary" type="submit"> Sign Up </button>
            </div>

        </form>
    </div> <!-- end card-body -->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted ms-1"><b>Log In</b></a></p>
    </div> <!-- end col-->
</div>
<!-- end row -->
@endsection

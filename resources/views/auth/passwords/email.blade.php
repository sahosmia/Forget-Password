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
            <h4 class="text-dark-50 text-center pb-0 fw-bold">Reset Link</h4>
            <p class="text-muted mb-4">Enter your email address to send reset link.</p>
        </div>

        <form method="POST" action="{{ url('/send-mail') }}">
            @csrf

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email address</label>
                <input name="email" value="{{ old('email') }}" class="form-control" type="text" id="emailaddress" placeholder="Enter your email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>




            <div class="mb-3 mb-0 text-center">
                <button class="btn btn-primary" type="submit"> Send Password Reset Link </button>
            </div>

        </form>
    </div> <!-- end card-body -->
</div>
<!-- end card -->


@endsection

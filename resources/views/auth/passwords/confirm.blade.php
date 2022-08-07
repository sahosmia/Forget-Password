@extends('layouts.auth_layouts')

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
            <h4 class="text-dark-50 text-center pb-0 fw-bold">Confirm Password</h4>
            <p class="text-muted mb-4">Please confirm your password before continuing.</p>
        </div>

        <form method="POST" action="{{ url('/password-confirm') }}">
            @csrf

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

              <div class="mb-3">

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-muted float-end"><small>Forgot your password?</small></a>
                @endif

                <input type="hidden" value="{{ $email }}">
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
                <button class="btn btn-primary" type="submit"> Confirm Password </button>
            </div>

        </form>
    </div> <!-- end card-body -->
</div>
<!-- end card -->
@endsection

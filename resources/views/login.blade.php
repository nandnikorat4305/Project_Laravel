@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center"
     style="min-height: calc(100vh - 40px);">

    <div class="card border-0 shadow-lg p-4 text-center"
         style="max-width:420px; width:100%; border-radius:18px;">

        <!-- Icon -->
        <div class="mb-3">
            <div class="d-inline-flex align-items-center justify-content-center"
                 style="width:72px; height:72px; background:#e8f5e9; border-radius:50%;">
                <span style="font-size:34px;">🔐</span>
            </div>
        </div>

        <h4 class="fw-bold mb-1">Welcome</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
            Login to manage and add delicious recipes
        </p>

        {{-- ERROR MESSAGE --}}
        @if(session('error'))
            <div class="alert alert-danger small text-center">
                {{ session('error') }}
            </div>
        @endif

        {{-- LOGIN FORM --}}
        @if(!session()->has('logged_in'))

            <form method="POST" action="/login">
                @csrf

                <div class="mb-3 text-start">
                    <label class="form-label small">Email Address</label>
                    <input type="email" name="email"
                           class="form-control form-control-lg"
                           placeholder="Enter your email" required>
                </div>

                <div class="mb-3 text-start">
                    <label class="form-label small">Password</label>
                    <input type="password" name="password"
                           class="form-control form-control-lg"
                           placeholder="Enter your password" required>
                </div>

                <button class="btn btn-success btn-lg w-100 mt-2"
                        style="border-radius:12px;">
                    🔓 Login
                </button>
            </form>

        @else
        {{-- LOGOUT VIEW --}}

            <div class="mb-3">
                <div class="d-inline-flex align-items-center justify-content-center"
                     style="width:64px; height:64px; background:#fff3e0; border-radius:50%;">
                    <span style="font-size:30px;">👋</span>
                </div>
            </div>

            <div class="alert alert-success small mb-3"
                 style="border-radius:12px;">
                You are already logged in ✅
            </div>

            <a href="/logout"
               class="btn btn-success btn-lg w-100 mt-2"
               style="border-radius:12px;">
                🚪 Logout
            </a>

        @endif

        <div class="mt-4">
            <small class="text-muted">
                Secure login • NH Recipes
            </small>
        </div>

    </div>
</div>
@endsection

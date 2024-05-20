@extends('auth.app')

@section('page_title','Login')

@section('content')
    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="#" class="auth-cover-brand d-flex align-items-center gap-2">
            <b>GN TEX</b>
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">
            <!-- /Left Section -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-5 pb-2">
                <img
                    src                 = "{{ asset('theme/img/illustrations/auth-login-illustration-light.png') }}"
                    class               = "auth-cover-illustration w-100" alt="auth-illustration"
                    data-app-light-img  = "illustrations/auth-login-illustration-light.png"
                    data-app-dark-img   = "illustrations/auth-login-illustration-dark.png" />
                <img
                    src                 = "{{ asset('theme/img/illustrations/auth-cover-login-mask-light.png') }}"
                    class               = "authentication-image" alt="mask"
                    data-app-light-img  = "illustrations/auth-cover-login-mask-light.png"
                    data-app-dark-img   = "illustrations/auth-cover-login-mask-dark.png" />
            </div>
            <!-- /Left Section -->
            <!-- Login -->
            <div
                class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
                <div class="w-px-400 mx-auto pt-5 pt-lg-0">
                    <h4 class="mb-2 fw-semibold">Welcome to GN TEX! 👋</h4>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>
                    @if (session('status'))
                        <p>{{ session('status') }}</p>
                    @endif
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating form-floating-outline mb-3">
                            <input
                                type        ="email"
                                class       ="form-control"
                                type        ="email"
                                name        ="email"
                                value       ="{{ old('email') }}"
                                autocomplete="email"
                                required
                                autofocus/>
                            <label for="email">Email</label>
                            @if ($messages = $errors->get('email'))
                                <ul class="text-danger">
                                    @foreach ((array) $messages as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="form-password-toggle mb-3">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                    <input
                                        type            ="password"
                                        id              ="password"
                                        class           ="form-control" name="password"
                                        placeholder     ="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                        autocomplete    ="current-password" />
                                    <label for="password">Password</label>
                                </div>
                                <span class="input-group-text cursor-pointer">
                                <i class="mdi mdi-eye-off-outline"></i>
                            </span>
                            </div>
                            @if ($messages = $errors->get('password'))
                                <ul class="text-danger">
                                    @foreach ((array) $messages as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="float-end mb-1">
                                    <span>Forgot Password?</span>
                                </a>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
@endsection

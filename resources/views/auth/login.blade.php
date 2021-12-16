@extends('layouts.site.auth')

@section('page-title', 'Login')

@section('page-style', 'auth/auth.min.css')

@section('content')
    <main class="main-page auth-page">
        <div class="container">
            <div class="auth-form login-section">
                <div class="heading-page center">
                    <div class="branding-logo">
                        <a href="{!! Url('/') !!}" class="logo-panel center">
                            <span><img width="125px" src="{{ asset('public/assets/site/images/base/udai-black.png') }}"></span>
                        </a>
                    </div>
                    <div class="page-title">Login</div>
                </div>

                <div class="form-body">
                    <div class="form-title">Complete your user information</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group form-field">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group form-field">
                            <label for="password">{{ __('Password') }}</label>

                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        {{--                        <div class="form-group row">--}}
                        {{--                            <div class="col-md-6 offset-md-4">--}}
                        {{--                                <div class="form-check">--}}
                                                            <input class="form-check-input d-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        {{--                                    <label class="form-check-label" for="remember">--}}
                        {{--                                        {{ __('Remember Me') }}--}}
                        {{--                                    </label>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="form-group center">
                            <div class="submit-form">
                                <button type="submit" class="submit-form">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="links">
                                <div><a href="{{ url('register') }}">Are you not a member?</a></div>

                                @if (Route::has('password.request'))
                                    <div><a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a></div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

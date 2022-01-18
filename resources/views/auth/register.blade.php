@extends('layouts.site.auth')

@section('page-title', 'Login')

@section('page-style', 'auth/auth.min.css')

@section('content')
    <main class="main-page auth-page">
        <div class="container">
            <div class="auth-form register-section">
                <div class="heading-page center">
                    <div class="branding-logo">
                        <a href="{!! Url('/') !!}" class="logo-panel center">
                            <span><img width="125px" src="{{ asset('public/assets/site/images/base/udai-black.png') }}"></span>
                        </a>
                    </div>
                    <div class="page-title">Register</div>
                </div>

                <div class="form-body">
                    <div class="form-title">A few details about you...</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="first_name">{{ __('First Name') }}</label>

                                    <input id="first_name" type="text" class="@error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="name">{{ __('Last Name') }}</label>

                                    <input id="last_name" type="text" class="@error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="phone">{{ __('Phone') }}</label>

                                    <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="address">{{ __('1st line of address') }}</label>

                                    <input id="address" type="text" class="@error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="postcode">{{ __('Project postcode') }}</label>

                                    <input id="postcode" type="text" class="@error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode">

                                    @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="password">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-field">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group center">
                            <div class="submit-form">
                                <button type="submit" class="submit-form">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="links">
                                <div><a href="{{ url('login') }}">Are you a member?</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

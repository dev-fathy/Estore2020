@extends('layouts.app')

@section('content')
    <div class="container loginPage">
        <div class="row justify-content-center loginPage">
            <div class="col-md-6">
                <center>
                    <h3 class="login-address"> Login </h3>
                </center>
                <br />
                <form class="log  center-block signform" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-right login-text">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="exampleInputEmail1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputPassword1" class="col-md-4 col-form-label text-md-right login-text">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="exampleInputPassword1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label login-text" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="forgotpassword">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link login-text" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>

                    <button type="submit"class="btn btn-primary col-lg-12">
                    {{ __('Login') }}
            </button>
                </form>
            </div>
            <div class="col-md-6 ph">
                <img src="{{ config('app.asset_url') }}img/12.jpg" class="loginph" alt="Login">
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Login')

@section('content')
<!-- UI Start from here-->
<div class="page-single">
  <div class="container">
    <div class="row">
      <div class="col col-login mx-auto px-6 my-lg-3">
        <h3 class="h5 font-weight-normal px-2 py-3 mb-3">
          <span class="text-dark font-weight-bold">Login</span>
        </h3>
        <form class="mb-3 py-4 px-4 bg-white rounded" method="POST" action="{{ route('login') }}" id="account-form">
          @csrf

          <div class="py-1">
            <div id="form-wrap">
              <div class="form-group">
                <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="hello@world.com" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label class="form-label" for="password">
                  {{ __('Password') }}
                </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" data-parsley-multiple="remember_me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </label>
              </div>

              <div class="form-footer d-flex">
                <button type="submit" class="btn btn-primary btn-block">
                  {{ __('Login') }}
                </button>
              </div>
            </div>
        </div>
      </form>

        <div class="text-center">
          <span class="d-block mb-3">Are you want to donate blood ?</span>
          <a href="/register" class="btn btn-tertiary">Register As Blood Donor</a>
          <hr/>
          <span class="d-block mb-3">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
          @endif
          </span>
        </div>

      </div>
    </div>
  </div>
</div>
<!--UI End here -->
@endsection

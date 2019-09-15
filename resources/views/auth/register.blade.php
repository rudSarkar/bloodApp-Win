@extends('layouts.app')

@section('title', 'Register')

@section('content')
<!-- Reg UI Start Here -->
<div class="page-single">
  <div class="container">
    <div class="row">
      <div class="w-100 mx-2 px-6 my-lg-3 my-3">
        <h3 class="h5 font-weight-normal px-2 py-3 mb-3">
          <span class="text-dark font-weight-bold">Register As Blood Donor</span>
        </h3>

        <form class="mb-3 py-4 px-4 bg-white rounded" method="POST" action="{{ route('register') }}" id="account-form">
        @csrf

        <div class="py-1">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="form-label" for="email">Email</label>
              <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="" placeholder="Hello@world.com" required type="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="password">Password</label>
              <input name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your Password" required type="password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-12">
              <label class="form-label" for="password-confirm">Confirm Password</label>
              <input name="password_confirmation" id="password-confirm" class="form-control" placeholder="Your Password" required type="password">
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="full_name">{{ __('Name') }}</label>
              <input id="full_name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required type="text">

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label class="form-label" for="blood_group">Blood Group</label>
              <select name="blood_group" id="blood_group" class="form-control @error('blood_group') is-invalid @enderror" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>

              @error('blood_group')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            <span class="form-text text-muted">
              <i class="fa fa-exclamation-triangle" style="color: #f00;"></i>
              Carefully select the right blood group
            </span>
          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="mobile">Mobile Number</label>
            <input name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="01712345678" value="" min="1" minlength="8" maxlength="20" required type="number">

            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <span class="form-text text-muted">
              <i class="fa fa-key" style="color: #00c759;"></i>
              We have perfect security to keep safe you from harassment.
            </span>
          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="address">Division</label>
            <select name="division" class="form-control @error('division') is-invalid @enderror" id="division" required>
              <option disabled="" selected="">Choose Division</option>
              @foreach($divisions as $division)
              <option value="{{ $division->id }}">
                {{ $division->name }}
              </option>
              @endforeach
            </select>

            @error('division')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="district">District</label>
            <select name="district" class="form-control @error('district') is-invalid @enderror" id="district" required>
              <option disabled="" selected="">Choose District</option>
            </select>

            @error('district')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="upazila">Upazila</label>
            <select name="upazila" class="form-control @error('upazila') is-invalid @enderror" id="upazila" required>
              <option disabled="" selected="">Choose Upazila</option>
            </select>

            @error('upazila')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>

        </div>

        <div class="form-footer mt-3 text-center">
          <p class="small">
            By joining as a blood donor, I am agreeing with our policy
          </p>
          <div class="w-50 mx-auto">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
          </div>
        </div>
    </div>
  </form>

        <div class="text-center">
          <span class="d-block mb-3">Do you have account?</span>
            <a href="/login" class="btn btn-tertiary">Login To Your Account</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Reg UI End here -->
@endsection

@extends('layouts.app')

@section('content')
<div class="page-single">
  <div class="container">
    <div class="row">
      <div class="w-100 mx-2 px-6 my-lg-3 my-3">
        <h3 class="h5 font-weight-normal px-2 py-3 mb-3">
          <span class="text-dark font-weight-bold">Update Info</span>
        </h3>

        <div class="mb-3 py-4 px-4 bg-white rounded">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ url('user/' . $user->id) }}" aria-label="{{ __('update') }}" id="account-form">
                @csrf
                @method('PUT')
                <div class="py-1">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="email">Email</label>
                      <input class="form-control" id="email" name="email" value="{{ $user->email }}" required type="email">
                    </div>

                    <div class="form-group col-md-6">
                      <label class="form-label" for="full_name">{{ __('Name') }}</label>
                      <input id="full_name" class="form-control" name="name" value="{{ $user->name }}" required type="text">

                    </div>

                    <div class="form-group col-md-6">
                      <label class="form-label" for="blood_group">Blood Group</label>
                      <input type="text" name="blood_group" id="blood_group" value="{{ $user->blood_group }}" class="form-control" required readonly>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="form-label" for="mobile">Mobile Number</label>
                    <input name="mobile" id="mobile" class="form-control" value="{{ $user->mobile }}" min="1" minlength="8" maxlength="20" required type="number">
                  </div>

                  <div class="form-group col-md-6">
                    <label class="form-label" for="address">Division</label>
                    <select name="address" class="form-control" id="address">
                      <option selected="" value="{{ $user->address }}">{{ $user->address }}</option>
                      <option value="Dhaka">
                        Dhaka
                      </option>
                      <option value="Rajshahi">
                        Rajshahi
                      </option>
                      <option value="Rajshahi">
                        Rangpur
                      </option>
                      <option value="Khulna">
                        Khulna
                      </option>
                      <option value="Mymensingh">
                        Mymensingh
                      </option>
                      <option value="Chittagong">
                        Chittagong
                      </option>
                      <option value="Barishal">
                        Barishal
                      </option>
                      <option value="Sylhet">
                        Sylhet
                      </option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="isAdmin">Last Blood Donated</label>
                    <input type="date" class="form-control" name="last_donate_date" value="{{$user->last_donate_date}}">
                  </div>
                </div>
                <div class="w-50 mx-auto">
                  <button type="submit" class="btn btn-warning btn-block">Update Info</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
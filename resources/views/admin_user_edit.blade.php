@extends('layouts.app')

@section('title', 'Donor Info Edit')

@section('content')
<div class="page-single">
  <div class="container">
    <div class="row">
      <div class="w-100 mx-2 px-6 my-lg-3 my-3">
        <h3 class="h5 font-weight-normal px-2 py-3 mb-3">
          <span class="text-dark font-weight-bold">Edit Donor Info</span>
        </h3>

        <form class="mb-3 py-4 px-4 bg-white rounded" method="POST" action="{{ url('dashboard/' . $user->id) }}" aria-label="{{ __('update') }}" id="account-form">
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
            <label class="form-label" for="division">Division</label>
            <select name="division" class="form-control" id="division">
              <option selected="" value="{{ $user->division }}">{{ $user->getDivName()}}</option>
              @foreach($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="district">District</label>
            <select name="district" class="form-control" id="district">
              <option selected="" value="{{ $user->district }}">{{ $user->getDisName()}}</option>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="upazila">Division</label>
            <select name="upazila" class="form-control" id="upazila">
              <option selected="" value="{{ $user->upazila }}">{{ $user->getUpaName()}}</option>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label class="form-label" for="isAdmin">Admin</label>
            <select name="isAdmin" class="form-control" id="isAdmin">
              <option value="{{$user->isAdmin}}">
                {{$user->isAdmin}}
              </option>
              <option value="">
                0 - Member
              </option>
              <option value="1">
                1 - Admin
              </option>
              <option value="2">
                2 - Writer
              </option>
            </select>
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
@endsection

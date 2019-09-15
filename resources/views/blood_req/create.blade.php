@extends('layouts.app')

@section('title', 'Request For Blood')

@section('content')
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="w-100 mx-2 px-6 my-lg-3 my-3">
				<h3 class="h5 font-weight-normal px-2 py-3 mb-3">
					<span class="text-dark font-weight-bold">Create Request For Blood</span>
				</h3>

				<form class="mb-3 py-4 px-4 bg-white rounded" method="POST" action="{{ route('request_blood.store') }}" id="request-form">
        @csrf

        <div class="py-1">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="form-label" for="name">Name</label>
              <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" required type="text">

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

						<div class="form-group col-md-6">
              <label class="form-label" for="mobile">Mobile</label>
              <input class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" placeholder="01712345678" required type="text">

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

						<div class="form-group col-md-12">
              <label class="form-label" for="date">When Blood Need</label>
              <input class="form-control @error('date') is-invalid @enderror" id="date" name="when_need" required type="date">

              @error('date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

					</div>

					<div class="form-footer mt-3 text-center">
	          <div class="w-50 mx-auto">
	            <button type="submit" class="btn btn-primary btn-block">Create Request</button>
	          </div>
	        </div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
@endsection

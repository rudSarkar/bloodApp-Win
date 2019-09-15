@extends('layouts.app')

@section('content')

      <!-- lists and search -->
				<div class="container">
					<div class="row">
						<div class="col-md-12 mt-3 bg-white border-right p-3">
							<div class="p-2">
		              <span class="text-dark font-weight-bold">Search Donor</span>
									<hr/>
									<div class="py-3">
                    <form action="/" method="POST" role="search" class="col-md-12">
											<div class="form-row">
				              {{ csrf_field() }}

				              			<select name="b_group" class="form-control input-group-responsive col-md-3">
												<option disabled="" selected="">Search Blood Donor</option>
												<option value="A+">A+</option>
				                <option value="A-">A-</option>
				                <option value="AB+">AB+</option>
				                <option value="AB-">AB-</option>
				                <option value="B+">B+</option>
				                <option value="B-">B-</option>
				                <option value="O+">O+</option>
				                <option value="O-">O-</option>
  										</select>
											<select name="division" class="form-control input-group-responsive col-md-3" id="division">
												<option disabled="" selected="">Choose Division</option>
					              @foreach($divisions as $division)
					              <option value="{{ $division->id }}">
					                {{ $division->name }}
					              </option>
					              @endforeach
											</select>

											<select name="district" id="district" class="form-control input-group-responsive col-md-3">
												<option disabled="" selected="">Choose District</option>
											</select>

											<select name="upazila" id="upazila" class="form-control input-group-responsive col-md-3">
												<option disabled="" selected="">Choose Upazila</option>
											</select>



										</div>

    									<div class="py-1 d-flex justify-content-center mt-2">
    										<button type="submit" class="btn btn-secondary">
													<i class="fa fa-search" aria-hidden="true"></i>
													Search
												</button>
												<a href="/" class="btn btn-tertiary ml-2">
													<i class="fa fa-refresh" aria-hidden="true"></i>
													Refresh
												</a>
											</div>
                    </form>
		          </div>
						</div>
					</div>

						<div class="col-md-12 mt-3 bg-white p-3">
		          <div class="p-2">
		              <span class="text-dark font-weight-bold">Lists Of Donors</span>
									<hr/>
		          </div>

              @if(isset($donors))

              @forelse($donors as $user)
		          <div class="py-3 px-2 my-1 d-block rounded donor-list">
		            <div class="row row-align-items-center">
		                <div class="col-md-9 col-12">
		                    <div class="d-flex align-items-center">

		                        <span class="avatar avatar-lg bg-gray">
		                            <span class="lead">{{ $user->blood_group }}</span>
		                        </span>
		                        <div class="avatar-content">
		                            <h5 class="mb-1 text-primary donor-title">
		                                {{ $user->name }}
																</h5>
		                            <span class="d-block text-muted">
																	<i class="fa fa-map-marker" style="color: green;"></i>
																		<span class="text-dark font-weight-bold">
																			{{ $user->getUpaName() }},
																			{{ $user->getDisName() }},
																			{{ $user->getDivName() }}</span> ,
 																	<i class="fa fa-tint" style="color: red;"></i>
																		<span class="text-dark font-weight-bold">Last Donated: {{ $user->last_donate_date }}</span>
																</span>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-md-3 py-2 text-right d-sm-block">
												@guest
													<span class="btn btn-sm btn-num phonenumber">{{ $user->mobile }}</span>
												@else
													<a href="tel:{{ htmlentities($user->mobile) }}" class="btn btn-sm btn-num phonenumber">{{ htmlentities($user->mobile) }}</a>
										    @endguest
		                </div>
		            </div>
		          </div>
							@empty
								No Donor Found!
              @endforelse

              {{ $donors->links() }}
				      @else
                  No Donor Found!
              @endif
		        </div>
					</div>
				</div>
@endsection

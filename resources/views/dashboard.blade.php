@extends('layouts.app')

@section('content')
<div class="page-single">
  <div class="container">
    <div class="row">
      @if(Auth::check() && Auth::user()->id == 1)
        <div class="w-100 mx-2 px-6 my-lg-3 my-3">
            <h3 class="h5 font-weight-normal px-2 py-3 mb-3">
              <span class="text-dark font-weight-bold">Dashboard</span>
            </h3>

            <div class="mb-3 py-4 px-4 bg-white rounded">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

              @if(isset($users))
							<table class="table table-striped table-hover table-responsive">
						        <thead>
						            <tr>
						                <th>ID</th>
						                <th>Name</th>
						                <th>Blood Group</th>
						                <th>Address</th>
                            <th>Email</th>
						                <th>Mobile</th>
						                <th>Last Donate Date</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						        <tbody>
						            @foreach($users as $user)
						            <tr>
						                <td>#{{ $user->id }}</td>
						                <td>{{ htmlentities( $user->name ) }}</td>
						                <td>{{ htmlentities( $user->blood_group ) }}</td>
						                <td>{{ $user->getUpaName() }},
                                      {{ $user->getDisName() }},
                                      {{ $user->getDivName() }}</td>
                            <td>{{ htmlentities( $user->email) }}</td>
                            <td>{{ htmlentities( $user->mobile ) }}</td>
						                <td>{{ htmlentities( $user->last_donate_date) }}</td>
						                <td>
                              <span class="btn-group">
						                		<a href="dashboard/{{ $user->id }}/edit" class="btn btn-secondary mt-2">
						                			<i class="fa fa-fw fa-edit"></i>
						                		</a>
                                <form method="POST" action="{{ url('dashboard/' . $user->id) }}" aria-label="{{ __('delete') }}" class="mt-2">
												          @csrf
												          @method('DELETE')
							                		<button type="submit" onclick="return confirm ('Are you sure you want to delete this User?')" class="btn btn-tertiary ml-2" data-toggle="tooltip" title="Delete">
							                			<i class="fa fa-fw fa-trash"></i>
							                		</button>
						                		</form>
                              </span>
						                </td>
						            </tr>
						            @endforeach
						        </tbody>
						    </table>
						    @endif

          </div>
        </div>
      @elseif(Auth::check() && Auth::user()->isAdmin == 2)
      <div class="w-100 mx-2 px-6 my-lg-3 my-3">
          <h3 class="h5 font-weight-normal px-2 py-3 mb-3">
            <span class="text-dark font-weight-bold">Dashboard</span>
          </h3>

          <div class="mb-3 py-4 px-4 bg-white rounded">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if(isset($users))
            <table class="table table-striped table-hover table-responsive">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Blood Group</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Last Donate Date</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                      <tr>
                          <td>#{{ $user->id }}</td>
                          <td>{{ htmlentities($user->name) }}</td>
                          <td>{{ htmlentities($user->blood_group) }}</td>
                          <td>{{ htmlentities($user->address) }}</td>
                          <td>{{ htmlentities($user->email) }}</td>
                          <td>{{ htmlentities($user->mobile) }}</td>
                          <td>{{ htmlentities($user->last_donate_date) }}</td>
                          <td>
                            <span class="btn-group">
                              <a href="dashboard/{{ $user->id }}/edit" class="btn btn-secondary mt-2">
                                <i class="fa fa-fw fa-edit"></i>
                              </a>
                            </span>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              @endif

        </div>
      </div>
      @else
        <script>window.location = "/user/edit";</script>
      @endif
  </div>
</div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Requests List')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 bg-white p-3">

      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      <div class="p-2">
          <span class="text-dark font-weight-bold">Blood Request</span>
          <a href="{{ route('request_blood.create') }}">
            <button class="btn btn-sm btn-tertiary" style="float: right;">Request For Blood</button>
          </a>
          <hr/>
      </div>

      @foreach($requested as $request)
      <div class="py-3 px-2 my-1 d-block rounded donor-list">
        <div class="row row-align-items-center">
            <div class="col-md-9 col-12">
                <div class="d-flex align-items-center">

                    <span class="avatar avatar-lg bg-gray">
                        <span class="lead">A+</span>
                    </span>
                    <div class="avatar-content">
                        <h5 class="mb-1 text-primary donor-title">
                            {{ $request->name }}
                        </h5>
                        <span class="d-block text-muted">
                          <i class="fa fa-map-marker" style="color: green;"></i>
                            <span class="text-dark font-weight-bold">
                              {{ $request->getUpaName() }},
                              {{ $request->getDisName() }},
                              {{ $request->getDivName() }}
                            </span> ,
                          <i class="fa fa-tint" style="color: red;"></i>
                            <span class="text-dark font-weight-bold">When Need: {{ $request->when_need }}</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-2 text-right d-sm-block">
                @guest
                  <span class="btn btn-sm btn-num phonenumber">{{ $request->mobile }}</span>
                @else
                  <a href="tel:01712345678" class="btn btn-sm btn-num phonenumber">{{ $request->mobile }}</a>
                @endguest
            </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | BloodApp</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @guest
    <script src="{{ asset('js/main.js') }}" defer></script>
    @else
    @endguest
    <script src="{{ asset('js/ajax.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Jura&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('blood_drop.png') }}" />
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark bg-red">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" class="navbar-logo"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              @guest
                  <li class="nav-item p-1">
                      <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Login
                      </a>
                  </li>
                  <li class="nav-item p-1">
                    <a class="nav-link {{ request()->is('request_blood') ? 'active' : '' }}" href="{{ url('request_blood') }}">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i>
                      Request Blood
                    </a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item p-1">
                    <a class="btn btn-reg btn-block" href="{{ route('register') }}">
                      Register as Blood Donor
                    </a>
                  </li>
                  @endif
              @else
                  <li class="nav-item p-1">
                    <a href="/" class="nav-link">
                      <i class="fa fa-search" aria-hidden="true"></i>
                      Search Blood
                    </a>
                  </li>
                  <li class="nav-item p-1">
                    <a class="nav-link {{ request()->is('request_blood') ? 'active' : '' }}" href="{{ url('request_blood') }}">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i>
                      Request Blood
                    </a>
                  </li>
                  <li class="nav-item p-1 dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          @if(Auth::check() && Auth::user()->id == 1)
                            <a class="dropdown-item" href="dashboard">Dashboard</a>
                            <a class="dropdown-item" href="user/edit">Update info</a>
                          @elseif(Auth::check() && Auth::user()->isAdmin == 2)
                            <a class="dropdown-item" href="dashboard">Dashboard</a>
                            <a class="dropdown-item" href="user/edit">Update info</a>
                          @else
                            <a class="dropdown-item" href="user/edit">Update info</a>
                          @endif
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>

      <main class="py-4">
          @yield('content')
      </main>

      <footer class="pt-4 pb-3 footer footer-light bg-lighter mt-4 border-red" style="border-top:5px solid">
        <div class="container">
          <div class="py-2">
              © Copyright 2019 Blood App, All Right Reserve
          </div>
        </div>
      </footer>
    </div>
</body>
</html>

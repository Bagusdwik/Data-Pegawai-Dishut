<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">

    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
</head>
<body class="vertical light">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
            <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            
            <ul class="nav">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
            </li>
            </ul>
        </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>
              </a>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Daftar Menu</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Master Pegawai</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabeldishut') }}"><span class="ml-1 item-text">Dinas Kehutanan</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelpttpk') }}"><span class="ml-1 item-text">PTT-PK</span></a>
                </li>
              </ul>
            </li>
            
            <li class="nav-item dropdown">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-credit-card fe-16"></i>
                <span class="ml-3 item-text">Input Data</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('formdishut') }}"><span class="ml-1 item-text">Dinas Kehutanan</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('formpttpk') }}"><span class="ml-1 item-text">PTT-PK</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Jabatan</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelstruktural') }}"><span class="ml-1 item-text">Struktural</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelfungsional') }}"><span class="ml-1 item-text">Fungsional</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelpelaksana') }}"><span class="ml-1 item-text">Pelaksana</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-pie-chart fe-16"></i>
                <span class="ml-3 item-text">Anggota</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelpns') }}"><span class="ml-1 item-text">PNS</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelcpns') }}"><span class="ml-1 item-text">CPNS</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#slack" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-slack fe-16"></i>
                <span class="ml-3 item-text">UPT</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="slack">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelpphh') }}"><span class="ml-1 item-text">PPHH</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabeltahura') }}"><span class="ml-1 item-text">Tahura</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{ route('tabelpth') }}"><span class="ml-1 item-text">PTH</span></a>
                </li>
              </ul>
            </li>
          </ul>
          
        </nav>
      </aside>
    </div>
    <main class="py-4">
      @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}"defer></script>
    <script src="{{ asset('js/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/simplebar.min.js') }}" defer></script>
    <script src='{{ asset('js/daterangepicker.js') }}' defer></script>
    <script src='{{ asset('js/jquery.stickOnScroll.js') }}' defer></script>
    <script src="{{ asset('js/tinycolor-min.js') }}" defer></script>
    <script src="{{ asset('js/config.js') }}" defer></script>
    <script src="{{ asset('js/apps.js') }}" defer></script>

    <script src="{{ asset('js/d3.min.js') }}" defer></script>
    <script src="{{ asset('js/topojson.min.js') }}" defer></script>
    <script src="{{ asset('js/datamaps.all.min.js') }}" defer></script>
    <script src="{{ asset('js/datamaps-zoomto.js') }}" defer></script>
    <script src="{{ asset('js/datamaps.custom.js') }}" defer></script>
    <script src="{{ asset('js/Chart.min.js') }}" defer></script>
    <script src="{{ asset('js/gauge.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}" defer></script>
    <script src="{{ asset('js/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}" defer></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
</body>
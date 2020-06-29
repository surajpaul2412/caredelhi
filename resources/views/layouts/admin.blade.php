<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  @yield('meta')
  <title>@yield('title', 'Auricular Therapy Software')</title>
  <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/feather/style.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/pace.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/unslider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/meteocons/style.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/morris.css') }}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/app.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.min.css') }}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/colors/palette-gradient.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/simple-line-icons/style.min.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/validation/form-validation.css') }}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
  <!-- END Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/forms/icheck/icheck.css')}}">
  <!-- cloud zoom -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="cloud-zoom.js"></script>
    <link rel="stylesheet" href="cloud-zoom.css" type="text/css">
  @yield('headscripts')
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
  <!-- - var navbarShadow = true-->
  <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-light bg-gradient-x-grey-blue">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a href="" class="navbar-brand">
              <h2 class="brand-text">Auricular</h2>
            </a>
          </li>
          <li class="nav-item hidden-md-up float-xs-right">
            <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-xs-right">
            <li class="dropdown dropdown-user nav-item">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                <span class="user-name">{{ Auth::user()->name }}</span>
              </a>
              
              <div class="dropdown-menu dropdown-menu-right"><a href="{{ route('logout') }}" class="dropdown-item"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="ft-power"></i>
             Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
            </form>
                <div class="dropdown-divider"></div>
          
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
    <div class="main-menu-content">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

          <li class="nav-item {{ \Request::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
          </li>

          <li class="nav-item {{ \Request::is('point') || \Request::is('point/*') ? 'active' : '' }}"><a href="{{ route('point.index') }}"><i class="ft-map-pin"></i><span data-i18n="" class="menu-title">Point</span></a>
          </li>

          <li class="nav-item {{ \Request::is('disease') || \Request::is('disease/*') ? 'active' : '' }}"><a href="{{ route('disease.index') }}"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Disease</span></a>
          </li>

          <li class="nav-item {{ \Request::is('package') || \Request::is('package/*') ? 'active' : '' }}"><a href="{{ route('package.index') }}"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Packages</span></a>
          </li>

          <li class="nav-item {{ \Request::is('user') || \Request::is('user/*') ? 'active' : '' }}"><a href="{{ route('user.index') }}"><i class="ft-user"></i><span data-i18n="" class="menu-title">User</span></a>
          </li>

          <li class="nav-item {{ \Request::is('tax') || \Request::is('tax/*') ? 'active' : '' }}"><a href="{{ route('tax.index') }}"><i class="ft-hash"></i><span data-i18n="" class="menu-title">Taxes</span></a>
          </li>

          <li class="nav-item {{ \Request::is('order') || \Request::is('order/*') ? 'active' : '' }}"><a href="{{ route('order.index') }}"><i class="ft-grid"></i><span data-i18n="" class="menu-title">Orders</span></a>
          </li>

          <li class="nav-item {{ \Request::is('invoice') || \Request::is('invoice/*') ? 'active' : '' }}"><a href="{{ route('invoice.index') }}"><i class="ft-printer"></i><span data-i18n="" class="menu-title">Invoices</span></a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="ft-power"></i>
             Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
            </form>
          </li>
                                
      </ul>
    </div>
  </div>

  @yield ('content')
        
  <footer class="footer footer-static footer-dark navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-xs-block d-md-inline-block">Copyright &copy; 2019, All rights
        reserved. </span>
      <span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted &amp; Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
      
  <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN STACK JS-->
  <script src="{{ asset('backend/app-assets/js/core/app-menu.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('backend/app-assets/js/core/app.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('backend/app-assets/js/scripts/customizer.min.js') }}" type="text/javascript"></script>
  <!-- END STACK JS-->
 
<script src="{{ asset('backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}" type="text/javascript"></script>
  
<script src="{{ asset('backend/app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>

  <script src="{{ asset('backend/app-assets/js/scripts/forms/validation/form-validation.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  @yield('scripts')
</body>
</html>
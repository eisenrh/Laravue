
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Indo Convert | Starter</title>

  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">

{{-- wrapper --}}
<div class="wrapper" id="app">

  {{-- navbar --}}
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
    </ul>

    {{-- search form --}}
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    {{-- ./search form --}}

    {{-- right navbar links --}}
    <ul class="navbar-nav ml-auto">

      {{-- messages dropdown menu --}}
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            {{-- message start --}}
            <div class="media">
              <img src="./img/rocket.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            {{-- ./message end --}}
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            {{-- message start --}}
            <div class="media">
              <img src="./img/profile.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            {{-- ./message end --}}
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            {{-- message start --}}
            <div class="media">
              <img src="./img/profile.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            {{-- ./message end --}}
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

      {{-- notifications dropdown menu --}}
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      {{-- ./notifications dropdown menu --}}


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  {{-- ./navbar --}}

  {{-- main sidebar container --}}
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- brand logo --}}
    <a href="{{ url('home') }}" class="brand-link">
      <img 
      src="./img/rocket.png" 
      alt="Indo Convert Logo" 
      class="brand-image img-circle elevation-3" 
      style="opacity: .8">

      <span class="brand-text font-weight-light">Indo Convert</span>
    </a>
    {{-- ./brand logo --}}

    {{-- sidebar --}}
    <div class="sidebar">
      {{-- sidebar user panel --}}
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
          <router-link to="/profile" class="d-block nav-link">
            {{ Auth::user()->name }}
          </router-link>
        
      </div>

      {{-- sidebar menu --}}
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
        data-widget="treeview" 
        role="menu" 
        data-accordion="false">

          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt cyan"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog green"></i>
              <p>
                Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/user" class="nav-link">
                  <i class="fa fa-users-cog nav-icon fa-fw orange"></i>
                  <p>Users</p>
                </router-link>
              </li> 
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" 
            onclick="event.preventDefault(); 
                          document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p> 
                      {{ __('Logout') }} 
                    </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>

        </ul>
      </nav>
      {{-- ./sidebar menu --}}
    </div>
    {{-- ./sidebar --}}
  </aside>

  {{-- content wrapper. contains page content --}}
  <div class="content-wrapper">

    {{-- content header (page header) --}} {{-- ./content header --}}


    {{-- main content --}}
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>
        
      </div>
    </div> {{-- ./main content --}}
  </div> {{-- ./content wrapper --}}
  

  {{-- control sidebar --}}
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  {{-- ./control sidebar --}}

  {{-- main footer --}}
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
{{-- ./wrapper --}}

<!-- REQUIRED SCRIPTS -->

<script src="/js/app.js"></script>
</body>
</html>

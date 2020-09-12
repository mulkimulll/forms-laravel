<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
      <div class="sidebar-brand-icon">
        <img src="{{asset('image/logo.jpg')}}" height="60px" width="60px"> Admin Forms
      </div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= $data == 'dashboard' ? 'active' : '' ?>">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li><hr class="sidebar-divider">

    <div class="sidebar-heading">
        Master
    </div>

    <li class="nav-item <?= $data == 'ask' ? 'active' : '' ?>">
      <a class="nav-link" href="{{ route('ask') }}">
        <i class="fas fa-fw fa-columns"></i>
        <span>Kuesioner</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
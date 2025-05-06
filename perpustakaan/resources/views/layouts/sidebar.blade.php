<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Daftar Buku -->
    <li class="nav-item {{ request()->routeIs('buku') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('buku') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Daftar Buku</span>
        </a>
    </li>

    <!-- Nav Item - Daftar Staff -->
    <li class="nav-item {{ request()->routeIs('staff') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('staff') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Daftar Staff</span>
        </a>
    </li>

    <!-- Nav Item - Daftar Member -->
    <li class="nav-item {{ request()->routeIs('member') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('member') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Daftar Member</span>
        </a>
    </li>

    <!-- Nav Item - Kategori Buku -->
    <li class="nav-item {{ request()->routeIs('kategori') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Kategori Buku</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

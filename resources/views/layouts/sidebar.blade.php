<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('images/home.png') }}" alt="Logo" style="width: 40px; height: 40px;">
        </div>
        <div class="sidebar-brand-text mx-3">INDEKOS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kamar') }}">
            <i class="fas fa-fw fa-building"></i>
            <span>Room</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('transaksi') }}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Transaksi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Customer</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/adminprofile">
            <i class="fas fa-fw fa-male"></i>
            <span>Profile</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>

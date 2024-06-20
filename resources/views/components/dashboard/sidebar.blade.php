<!-- Sidebar -->
<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-file-invoice fa-xl"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Arsip</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (request()->routeIs('dashboard')) active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fa-solid fa-chart-line fa-lg"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item @if (request()->routeIs('disposisi.index')) active @endif">
        <a class="nav-link" href="{{ route('disposisi.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Disposisi</span></a>
    </li>

    <li class="nav-item @if (request()->routeIs('arsip.index')) active @endif">
        <a class="nav-link" href="{{ route('arsip.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Arsip</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item @if (request()->routeIs('pemusnahan.index')) active @endif">
        <a class="nav-link" href="{{ route('pemusnahan.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pemusnahan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

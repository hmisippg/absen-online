<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-smile"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ABSENSI HIMA/UKM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Management
    </div>
    <!-- Nav Item - list admin account -->
    <li class="nav-item">
        <a class="nav-link" href=/admin-profile">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin Profile</span></a>
    </li>

    <!-- Nav Item - list admin account -->
    <li class="nav-item">
        <a class="nav-link" href="/admin-list">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>List Admin Account</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Input Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span>
        </a>
        <div id="collapsePages" class="collapse hide" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Absensi:</h6>
                <a class="collapse-item" href="/absen">Absen HIMA/UKM</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Input:</h6>
                <a class="collapse-item" href="">Input Proker</a>
                <a class="collapse-item" href="">Input Berita</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - logout account -->
    <li class="nav-item">
        <a class="nav-link" href="/logout" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

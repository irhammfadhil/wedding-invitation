<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #b55b5b">
    <!-- Brand Logo -->
    <a href="/admin/index" class="brand-link" style="font-family: 'Great Vibes', cursive;
            font-size: 24px;">
        Irham & Rosy Wedding
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('index-admin')}}" class="nav-link {{ request()->routeIs('index-admin') ? ' nav-active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('index-invitation')}}" class="nav-link{{ request()->routeIs('index-invitation') ? ' nav-active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Daftar Tamu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('index-rsvp')}}" class="nav-link{{ request()->routeIs('index-rsvp') ? ' nav-active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Daftar Konfirmasi Kehadiran Tamu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('index-attendance')}}" class="nav-link{{ request()->routeIs('index-attendance') ? ' nav-active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Daftar Kehadiran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('display-attendance')}}" class="nav-link{{ request()->routeIs('display-attendance') ? ' nav-active' : '' }}">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>Layar Sapa</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<style>
    .nav-link:hover {
        background-color: #fcfafa;
    }
    .nav-active {
        background-color: #e5c6c6;
    }
    .nav-active:hover {
        background-color: #e5c6c6;
    }
    .nav-active i {
        color: #000;
    }
    .nav-active p {
        color: #000;
    }
    .content-wrapper {
        background-color: #f4f4f4;
    }
    .bg-1 {
        background-color: #FFE7E7;
    }
    .bg-2 {
        background-color: #CAA6A6;
    }
    .bg-3 {
        background-color: #adbc9f;
    }
    .bg-4 {
        background-color: #fbfada;
    }
    .bg-5 {
        background-color: #B47B84;
    }
    .bg-6 {
        background-color: #C9D7DD;
    }
    .bg-7 {
        background-color: #637A9F;
    }
    .bg-8 {
        background-color: #E8C872;
    }
    .page-item.active .page-link {
        background-color: #b55b5b;
        border-color: #b55b5b;
    }
    .breadcrumb-item a {
        color: #b55b5b;
    }
</style>
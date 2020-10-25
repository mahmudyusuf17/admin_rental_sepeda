<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link navbar-light">
    <img src="{{asset('template')}}/dist/img/logo/favicon.png" alt="Logo Rental Sepeda" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-dark text-dark">Rental Sepeda</span> -->
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2 mt-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @if(Auth::user()->role === "1")
        <sup class="text-sm text-light">Admin</sup>
        @elseif(Auth::user()->role === "2")
        <sup class="text-sm text-light">User</sup>
        @endif
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-header">
        <a href="{{route('dashboard')}}" class="nav-link {{ Request::is('admin/dashboard')? 'active':'' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-header">TRANSAKSI</li>
        <li class="nav-item">
        <a href="{{route('rent')}}" class="nav-link {{ Request::is('admin/penyewaan')? 'active':'' }}">
            <i class="nav-icon fas fa-upload"></i>
            <p>
            Penyewaan
            <span class="badge badge-info right">2</span>
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('returns')}}" class="nav-link {{ Request::is('admin/pengembalian')? 'active':'' }}">
            <i class="nav-icon fas fa-download"></i>
            <p>
            Pengembalian
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link {{ Request::is('admin/laporan')? 'active':'' }}">
            <i class="nav-icon far fa-chart-bar"></i>
            <p>
            Laporan
            </p>
        </a>
        </li>
        <li class="nav-header">DATA MASTER</li>
        <li class="nav-item">
        <a href="{{route('customer')}}" class="nav-link {{ Request::is('admin/pelanggan')? 'active':'' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>Pelanggan</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('employee')}}" class="nav-link {{ Request::is('admin/pegawai')? 'active':'' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>Pegawai</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('sepeda')}}" class="nav-link {{ Request::is('admin/sepeda')? 'active':'' }}">
            <i class="nav-icon fas fa-bicycle"></i>
            <p>Sepeda</p>
        </a>
        </li><hr>
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link {{ Request::is('admin/pengaturan')? 'active':'' }}">
            <i class="nav-icon fas fa-cog"></i>
            <p>
            PENGATURAN
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account</p>
            </a>
            </li>
            <li class="nav-item">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Forget Password</p>
            </a>
            @endif
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
            Logout
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </form>
        </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
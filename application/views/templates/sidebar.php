<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background-color: #FF89BF;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Looping Menu-->
    <div class="sidebar-heading">
        Home
    </div>
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Dashboard</span></a>
    </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('service'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Data service</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('service/kategori'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Kategori service</span></a>
    </li>
   

    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Data Anggota</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->

    <div class="sidebar-heading">
        Transaksi
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span>Data Antrian</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span>Data Booking</span></a>
    </li>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">


    <!-- Heading -->

    <div class="sidebar-heading">
        Laporan
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
            <i class="fa fa-fw fa-address-book"></i>
            <span>Laporan Booking</span></a>
    </li>
        <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_service'); ?>">
            <i class="fa fa-fw fa-address-book"></i>
            <span>Laporan Pendapatan </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
            <i class="fa fa-fw fa-address-book"></i>
            <span>Laporan Data Anggota</span></a>
    </li>
    
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar --   > 
        
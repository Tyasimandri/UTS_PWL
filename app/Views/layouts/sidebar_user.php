<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Logo dan Judul -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Trijaya</div>
    </a>

    <!-- Garis Pemisah -->
    <hr class="sidebar-divider my-0">

    <!-- Menu Dashboard -->
    <li class="nav-item <?= service('uri')->getSegment(1) === 'user' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Menu Transaksi Saya -->
    <li class="nav-item <?= service('uri')->getSegment(2) === 'transaksi' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('user/transaksi') ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Transaksi Saya</span></a>
    </li>

    <!-- Garis Pemisah -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/logout') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>

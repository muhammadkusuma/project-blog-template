<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('/dashbor') ?>" class="brand-link">
        <img src="assets/img/<?= $detail['0']['logo'] ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="<?= base_url('dashbor') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Konten
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/unduh') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-download"></i>
                        <p>
                            Unduh
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/menu') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/link') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-link"></i>
                        <p>
                            Link
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/struktur') ?>" class="nav-link ">
                        <i class="nav-icon fas  fa-sitemap"></i>
                        <p>
                            Struktur Organisasi
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/detail') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Detail Website
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/developer') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Developer
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/users') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashboard/akun') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Akun
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
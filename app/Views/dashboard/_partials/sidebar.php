<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('/dashbor') ?>" class="brand-link">
        <img src="<?= base_url('uploads/img/') ?><?= $detail['0']['logo'] ?>" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= $detail['0']['nama_website'] ?></span>
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
                <!-- <li class="nav-item ">
                    <a href="<?= base_url('dashboard/unduh') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-download"></i>
                        <p>
                            Unduh
                        </p>
                    </a>
                </li> -->
                <li class="nav-item ">
                    <a href="<?= base_url('dashbor/page') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Page
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashbor/link') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-link"></i>
                        <p>
                            Link
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item ">
                    <a href="<?= base_url('dashboard/struktur') ?>" class="nav-link ">
                        <i class="nav-icon fas  fa-sitemap"></i>
                        <p>
                            Struktur Organisasi
                        </p>
                    </a>
                </li> -->
                <li class="nav-item ">
                    <a href="<?= base_url('dashbor/detail/' . $detail['0']['id_detail']) ?>" class="nav-link ">

                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Detail Website
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item ">
                    <a href="<?= base_url('dashboard/developer') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Developer
                        </p>
                    </a>
                </li> -->
                <li class="nav-item ">
                    <a href="<?= base_url('dashbor/users') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url('dashbor/akun') ?>" class="nav-link ">
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
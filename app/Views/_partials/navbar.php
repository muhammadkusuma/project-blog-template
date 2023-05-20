<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
            <img src="<?= base_url('uploads/img/') ?><?= $detail['0']['logo'] ?>" alt="logo">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar">
            <ul>
                <?php foreach ($menu as $m) : ?>
                    <?php if ($m['submenu'] == 'tidak') : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url($m['menu']) ?>"><?= ucfirst($m['menu']) ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if ($m['submenu'] == 'ya') : ?>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?= $m['id_menu'] ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= ucfirst($m['menu']) ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown<?= $m['id_menu'] ?>">
                                <?php foreach ($artikel as $sub) : ?>
                                    <?php if ($sub['id_menu'] == $m['id_menu']) : ?>
                                        <li><a class="dropdown-item" href="<?= base_url($sub['slug']) ?>"><?= ucwords($sub['judul']) ?></a></li>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php endif ?>
                <?php endforeach ?>
            </ul>
        </nav><!-- .navbar -->
        <?php if (session()->has('email')) : ?>
            <div class="row">
                <div class="col">
                    <!-- Tombol Dashbor -->
                    <a href="<?= base_url('dashbor') ?>" class="btn btn-primary">Dashboard</a>
                </div>
                <div class="col">
                    <!-- Tombol Logout -->
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</header><!-- End Header -->
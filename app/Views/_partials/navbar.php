 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="index.html" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.png" alt=""> -->
             <h1 class="d-flex align-items-center">Labor SIF</h1>
         </a>

         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a href="<?= base_url() ?>">Beranda</a></li>
                 <?php foreach ($menu as $m) : ?>
                     <?php if ($m['submenu']) : ?>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <?= $m['menu'] ?>
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <?php foreach ($m['submenu'] as $sub) : ?>
                                     <li><a class="dropdown-item" href="<?= base_url($sub['slug']) ?>"><?= $sub['judul'] ?></a></li>
                                 <?php endforeach ?>
                             </ul>
                         </li>
                     <?php else : ?>
                         <li class="nav-item">
                             <a class="nav-link" href="#"><?= $m['menu'] ?></a>
                         </li>
                     <?php endif ?>
                 <?php endforeach ?>
                 <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                 <li><a href="<?= base_url('dokumentasi') ?>">Dokumentasi</a></li>
                 <li><a href="<?= base_url('unduh') ?>">Unduh</a></li>
                 <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
             </ul>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
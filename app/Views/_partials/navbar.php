 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="index.html" class="logo d-flex align-items-center">
             <img src="<?= base_url('uploads/img/') ?><?= $detail['0']['logo'] ?>" alt="logo">
             <!-- <h1 class="d-flex align-items-center"><?= $detail['0']['nama_website'] ?></h1> -->
         </a>

         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

         <nav id="navbar" class="navbar">
             <ul>
                 <li class="nav-item">
                     <a class="nav-link" href="#">hhhh</a>
                 </li>
                 <?php foreach ($menu as $m) : ?>
                     <li class="nav-item dropdown">

                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?= $m['id_menu'] ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             <?= $m['menu'] ?>
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown<?= $m['id_menu'] ?>">
                             <?php foreach ($artikel as $sub) : ?>
                                 <?php if ($sub['id_menu'] == $m['id_menu']) : ?>
                                     <li><a class="dropdown-item" href="<?= base_url($sub['slug']) ?>"><?= $sub['judul'] ?></a></li>
                                 <?php endif ?>
                             <?php endforeach ?>
                         </ul>
                     </li>
                 <?php endforeach ?>
             </ul>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
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
                 <?php foreach ($menu as $m) : ?>
                     <?php if ($m['parent_id']) : ?>
                         <li class="nav-item dropdown">
                             <?php if (str_word_count($m['nama']) == 1 && !(preg_match_all('/\d/', $m['nama']))) : ?>
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     <?= $m['nama'] ?>
                                 </a>
                             <?php endif; ?>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <?php foreach ($menu as $sm) : ?>
                                     <?php if ($sm['parent_id'] === $m['id']) : ?>
                                         <li><a class="dropdown-item" href="<?= base_url($sm['slug']) ?>"><?= $sm['nama'] ?></a></li>
                                     <?php endif; ?>
                                 <?php endforeach ?>
                             </ul>


                         </li>
                     <?php else : ?>
                         <li class="nav-item">
                             <a class="nav-link" href="#"><?= $m['nama'] ?></a>
                         </li>
                     <?php endif ?>
                 <?php endforeach ?>
             </ul>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->


 <?php foreach ($menu as $m) : ?>
     <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?php echo $m['id_menu']; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <?php echo $m['menu']; ?>
         </a>
         <ul class="dropdown-m" aria-labelledby="navbarDropdown<?php echo $m['id_menu']; ?>">
             <?php foreach ($artikel as $sub) {
                    if (empty($sub['id_menu'] == $m['id_menu'])) {
                        // if ($sub['id_menu'] == $m['id_menu']) { 
                ?>
                     <li><a class="dropdown-item" href="<?= base_url('' . $sub['slug']) ?>"><?php echo $sub['judul']; ?></a></li>
                 <?php } else {
                        echo "";
                    } ?>
             <?php } ?>
         </ul>
     </li>
 <?php endforeach ?>
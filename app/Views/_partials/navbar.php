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
                 <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>
                         <li><a href="#">Kata Sambutan</a></li>
                         <li><a href="#">Visi & Misi</a></li>
                         <li><a href="#">Tujuan</a></li>
                         <li><a href="#">Struktur Organisasi</a></li>
                     </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Laboratorium</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>
                         <li><a href="#">Rekayasa Sistem Informasi</a></li>
                         <li><a href="#">Internet</a></li>
                         <li><a href="#">Software Engineering</a></li>
                     </ul>
                 </li>
                 <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                 <li><a href="#">Dokumentasi</a></li>
                 <li><a href="#">Unduh</a></li>
                 <li><a href="contact.html">Kontak</a></li>
             </ul>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="footer-content">
         <div class="container">
             <div class="row gy-4">
                 <div class="col-lg-5 col-md-12 footer-info">
                     <a href="index.html" class="logo d-flex align-items-center">
                         <span>Logo</span>
                     </a>
                     <p>Laboratorium Program Studi Sistem Informasi Fakultas Sains dan Teknologi Universitas Islam Negeri Sultan
                         Syarif Kasim Riau</p>
                 </div>

                 <div class="col-lg-2 col-6 footer-links">
                     <h4>Tautan Berguna</h4>
                     <ul>
                         <li><i class="bi bi-dash"></i> <a href="#">UIN Suska Riau</a></li>
                         <li><i class="bi bi-dash"></i> <a href="#">Fakultas Sains dan Teknologi</a></li>
                         <li><i class="bi bi-dash"></i> <a href="#">Prodi Sistem Informasi</a></li>
                         <li><i class="bi bi-dash"></i> <a href="#">iRaise</a></li>
                         <li><i class="bi bi-dash"></i> <a href="#">E-Learning</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-2 col-6 footer-links">
                     <h4>Produk Mahasiswa</h4>
                     <ul>
                         <li><i class="bi bi-dash"></i> <a href="#">SITASI</a></li>
                         <li><i class="bi bi-dash"></i> <a href="#">SIKAPE</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                     <h4>Hubungi Kami</h4>
                     <p>
                         Jl HR. Soebrantas Panam, Simpang Baru, Tampan, Kota Pekanbaru, Riau 28293
                         <br>
                         <strong>Email:</strong> lab-si@uin-suska.ac.id<br>
                     </p>

                 </div>

             </div>
         </div>
     </div>

     <div class="footer-legal">
         <div class="container">
             <div class="copyright">
                 Copyright &copy; <span id="tahun"></span> <strong><span>Laboratorium Program Studi Sistem
                         Informasi</span></strong>
             </div>
         </div>
     </div>
 </footer><!-- End Footer -->
 <!-- End Footer -->

 <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <div id="preloader"></div>

 <!-- Vendor JS Files -->
 <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

 <!-- Template Main JS File -->
 <script src="<?= base_url('assets/js/main.js') ?>"></script>

 <!-- Script Year Copyright -->
 <script>
     var tahun = new Date().getFullYear();
     document.getElementById("tahun").innerHTML = tahun;
 </script>
 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="footer-content">
         <div class="container">
             <div class="row gy-4">
                 <div class="col-lg-5 col-md-12 footer-info">
                     <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
                         <span> <img src="<?= base_url('uploads/img/') ?><?= $detail['0']['logo'] ?>" alt="logo"></span>
                     </a>
                     <p>Laboratorium Program Studi Sistem Informasi Fakultas Sains dan Teknologi Universitas Islam Negeri Sultan
                         Syarif Kasim Riau</p>
                 </div>

                 <div class="col-lg-2 col-6 footer-links">
                     <h4>Tautan Berguna</h4>
                     <ul>
                         <?php
                            foreach ($link as $l) {
                                if ($l['tipe_link'] == 'uin') {
                                    echo '<li><i class="bi bi-dash"></i> <a href="' . $l['link'] . '">' . $l['nama_link'] . '</a></li>';
                                }
                            }
                            ?>
                     </ul>
                 </div>

                 <div class="col-lg-2 col-6 footer-links">
                     <h4>Produk Mahasiswa</h4>
                     <ul>
                         <?php
                            foreach ($link as $l) {
                                if ($l['tipe_link'] == 'produk_mahasiswa') {
                                    echo '<li><i class="bi bi-dash"></i> <a href="' . $l['link'] . '">' . $l['nama_link'] . '</a></li>';
                                }
                            }
                            ?>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                     <h4>Hubungi Kami</h4>
                     <p>
                         <?= $detail['0']['alamat'] ?>
                         <br>
                         <strong>Email:</strong> <?= $detail['0']['email'] ?><br>
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

     // search konten
     $(document).ready(function() {
         $('#searchInput').on('keyup', function() {
             var value = $(this).val().toLowerCase();
             $('#searchTable tr').filter(function() {
                 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
             });
         });
     });
 </script>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('_partials/head') ?>
</head>

<body class="page-index">

    <?= $this->include('_partials/navbar') ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Laboratorium Program Studi Sistem Informasi</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Selamat Datang di Website Laboratorium Program Studi Sistem Informasi Fakultas Sains dan Teknologi
                            Universitas Islam Negeri Sultan Syarif Kasim Riau</p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#recent-posts" class="btn-get-started">Lebih Lanjut</a>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Postingan Terbaru</h2>
                </div>

                <div class="row gy-5 mx-auto">
                    <?php foreach ($menu as $item) : ?>
                        <?php
                        $blogMenuId = '';

                        foreach ($menu as $item) {
                            if ($item['menu'] === 'blog') {
                                $blogMenuId = $item['id_menu'];
                                break; // Keluar dari perulangan jika sudah ditemukan menu 'blog'
                            }
                        }
                        ?>
                    <?php endforeach; ?>
                    <!-- Kode Postingan terbaru -->
                    <?php foreach (array_slice($artikel, 0, 10) as $art) : ?>

                        <?php if ($art['id_menu'] ===  $blogMenuId) : ?>
                            <div class="col-xl-3 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                                <div class="post-box">
                                    <div class="post-img"><img src="<?= base_url() . 'uploads/img/' . $art['gambar']; ?>" class="img-fluid" alt=""></div>
                                    <div class="meta">
                                        <span class="post-date"><?php echo date("D, F j, Y", strtotime($art['created_at'])); ?></span>
                                    </div>
                                    <h3 class="post-title"><?= $art['judul']; ?></h3>
                                    <a href="<?= $art['slug']; ?>" class="readmore stretched-link"><span>Lihat Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>


            </div>
        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->

    <?= $this->include('_partials/footer') ?>

</body>

</html>
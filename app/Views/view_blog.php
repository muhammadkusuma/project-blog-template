<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('_partials/head') ?>
</head>

<body class="page-blog">

    <?= $this->include('_partials/navbar') ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/Perpustakaan-1050x525.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2><?= $blog ?></h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><?= $blog ?></li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5 mx-auto">

                    <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="200">

                        <div class="row gy-5 posts-list mx-auto">
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
                            <?php foreach ($artikel as $a) : ?>
                                <?php if ($a['id_menu'] ===  $blogMenuId) : ?>
                                    <div class="col-lg-6 mx-auto">
                                        <article class="d-flex flex-column">

                                            <div class="post-img">
                                                <img src="<?= base_url() . 'uploads/img/' . $a['gambar']; ?>" alt="" class="img-fluid">
                                            </div>

                                            <h2 class="title">
                                                <a href="<?= $a['slug']; ?>"><?= $a['judul']; ?></a>
                                            </h2>

                                            <div class="meta-top">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?= $a['slug'] ?>"><time datetime="<?php echo date('Y-m-d', strtotime($a['created_at'])); ?>"><?php echo date("D, F j, Y", strtotime($a['created_at'])); ?></time></a></li>
                                                </ul>
                                            </div>

                                            <div class="read-more mt-auto align-self-end">
                                                <a href="<?= $a['slug']; ?>">Lihat Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
                                            </div>

                                        </article>
                                    </div><!-- End post list item -->
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </div><!-- End blog posts list -->

                    </div>


                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->


    <?= $this->include('_partials/footer') ?>

</body>

</html>
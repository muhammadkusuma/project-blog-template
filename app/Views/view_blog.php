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

                <h2>Blog</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li>Blog</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="row gy-5 posts-list">
                            <?php foreach ($artikel as $a) : ?>
                                <?php if ($a['id_menu'] === null) : ?>
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

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div><!-- End blog pagination -->

                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

                        <div class="sidebar ps-lg-4">

                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Cari Berita</h3>
                                <input type="text" id="searchInput" class="form-control pd-2">
                            </div><!-- End sidebar search formn-->

                        </div><!-- End Blog Sidebar -->

                    </div>

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->


    <?= $this->include('_partials/footer') ?>

</body>

</html>
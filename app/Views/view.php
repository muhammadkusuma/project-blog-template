<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('_partials/head') ?>
</head>

<body class="page-index">
    <?= $this->include('_partials/navbar') ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url('assets/img/Perpustakaan-1050x525.jpg') ?>');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2><?= ucwords($artikels->judul); ?></h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5 mx-auto">

                    <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="200">

                        <article class="blog-details">

                            <div class="post-img mx-auto">
                                <?php
                                if (!empty($artikels->gambar)) {
                                    echo '<img src="' . base_url("uploads/img/$artikels->gambar") . '" class="img-fluid">';
                                }
                                ?>
                            </div>


                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= $artikels->created_at; ?></time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <?php echo $artikels->isi; ?>

                            </div><!-- End post content -->

                        </article><!-- End blog post -->

                    </div>

                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->


    <?= $this->include('_partials/footer') ?>

</body>

</html>
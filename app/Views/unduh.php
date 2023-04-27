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

                <h2>
                    <?= $blog ?>
                </h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><?= $blog ?></li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container mx-auto" data-aos="fade-up">

                <div class="portfolio-isotope mx-auto" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                    <div class="row gy-4 portfolio-container mx-auto" data-aos="fade-up" data-aos-delay="300">
                        <?php foreach ($unduhan as $item) : ?>
                            <?php if ($item['kategori_dokumentasi'] == 'Dokumen') : ?>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-app mx-auto">
                                    <img src="<?= $item['upload_dokumentasi'] ?>" class="img-fluid" alt="<?= $item['nama_dokumentasi'] ?>">
                                    <div class="portfolio-info">
                                        <h4><?= $item['nama_dokumentasi'] ?></h4>
                                        <p><?= $item['deskripsi'] ?></p>
                                        <a href="<?= $item['upload_dokumentasi'] ?>" title="<?= $item['nama_dokumentasi'] ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->


    <?= $this->include('_partials/footer') ?>

</body>

</html>
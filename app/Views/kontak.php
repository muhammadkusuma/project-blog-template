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


                    <?= dd($kontak) ?>

                    <div class="row gy-4 portfolio-container mx-auto" data-aos="fade-up" data-aos-delay="300">
                        <?php foreach ($kontak as $item) : ?>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app mx-auto">
                                <div class="portfolio-info">
                                    <h4><?= $item['nama_website'] ?></h4>
                                    <p><?= $item['alamat'] ?></p>
                                    <p><?= $item['email'] ?></p>
                                    <p><?= $item['favicon'] ?></p>
                                    <p><?= $item['logo'] ?></p>
                                </div>
                            </div><!-- End Portfolio Item -->
                        <?php endforeach; ?>
                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->


    <?= $this->include('_partials/footer') ?>

</body>

</html>
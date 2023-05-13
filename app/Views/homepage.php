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
                    <!-- Kode Postingan terbaru -->
                </div>

            </div>
        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->

    <?= $this->include('_partials/footer') ?>

</body>

</html>
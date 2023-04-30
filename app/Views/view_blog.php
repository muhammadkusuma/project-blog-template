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

                <div class="row g-5 mx-auto">

                    <div class="col-8 mx-auto" data-aos="fade-up" data-aos-delay="200">

                        <div class="row gy-5 posts-list mx-auto">

                            <?php foreach ($artikel as $row) : ?>
                                <div class="col-6">
                                    <article class="d-flex flex-column">

                                        <div class="post-img">
                                            <?php
                                            if (!empty($row["gambar"])) {
                                                echo '<img src="' . base_url("uploads/img/$row[gambar]") . '"class="img-fluid">';
                                            }
                                            ?>
                                        </div>

                                        <h2 class="title">
                                            <a href="blog/view/<?= $row['slug']; ?>"><?= $row['judul']; ?></a>
                                        </h2>

                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01"><?= $row['created_at']; ?></time></a></li>
                                            </ul>
                                        </div>

                                        <!-- <div class="content">
                                            <p>
                                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                            </p>
                                        </div> -->

                                        <div class="read-more mt-auto align-self-end">
                                            <a href="blog/view/<?= $row['slug']; ?>">Read More <i class="bi bi-arrow-right"></i></a>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->
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


                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->


    <?= $this->include('_partials/footer') ?>

</body>

</html>
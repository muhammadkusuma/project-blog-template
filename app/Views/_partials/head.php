<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>
    <?php
    if (!empty($artikel->judul)) {
        echo $artikel->judul . ' | ';
    }elseif (!empty($blog)) {
        echo $blog . ' | ';
    }
    ?>Labor SIF
</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?= base_url('assets/img/Himasi.ico') ?>" rel="icon">
<link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/vendor/aos/aos.css" rel="stylesheet') ?>">
<link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">

<!-- Main CSS File -->
<link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
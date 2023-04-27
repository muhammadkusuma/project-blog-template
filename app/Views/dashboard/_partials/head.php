<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
    <?php
    if (!empty($artikel->judul)) {
        echo $artikel->judul . ' | ';
    } elseif (!empty($blog)) {
        echo $blog . ' | ';
    }
    ?><?= $detail['0']['nama_website'] ?>
</title>
<meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">

<!-- Favicons -->
<link href="<?= base_url('assets/img/' . $detail['0']['favicon']) ?>" rel="icon">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/fontawesome-free/css/all.min.css') ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
<!-- iCheck -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<!-- JQVMap -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/jqvmap/jqvmap.min.css') ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url('dashboard/dist/css/adminlte.min.css') ?>">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/daterangepicker/daterangepicker.css') ?>">
<!-- summernote -->
<link rel="stylesheet" href="<?= base_url('dashboard/plugins/summernote/summernote-bs4.min.css') ?>">

<!-- Required Stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

<!-- Required JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('dashboard/_partials/head') ?>
</head>

<body>
    <?= $this->include('dashboard/_partials/sidebar') ?>

    <?= $this->include('dashboard/_partials/navbar') ?>

    <!-- Content -->
    <?= $this->renderSection('content') ?>
    <!-- /.Content -->


    <?= $this->include('dashboard/_partials/footer') ?>
    <?= $this->renderSection('extra-js') ?>
</body>

</html>
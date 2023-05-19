<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('dashboard/_partials/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?= $this->include('dashboard/_partials/navbar') ?>

    <?= $this->include('dashboard/_partials/sidebar') ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $blog ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashbor') ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?= $blog ?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('post/store'); ?>" method="post" enctype="multipart/form-data" onsubmit="return validateFormTest()">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="menu">Menu</label>
                                        <select class="form-control" name="menu" required>
                                            <option value="">Pilih Menu</option>
                                            <?php foreach ($menus as $menu) : ?>
                                                <option value="<?php echo $menu['id_menu']; ?>"><?php echo ucfirst($menu['menu']); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea name="isi" id="post_content" class="form-control" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="gambar">Gambar Thumbnail</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*" onchange="previewImage()">
                                            <label class="custom-file-label" for="gambar">Pilih gambar</label>
                                        </div>
                                        <!-- Preview gambar -->
                                        <div class="mt-2" id="preview-container" style="display: none;">
                                            <img id="preview" src="" alt="Preview Gambar" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Datetime picker input -->
                                    <div class="form-group">
                                        <label for="datetimepicker">Terbit</label>
                                        <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                            <input type="datetime-local" name="terbit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('dashbor') ?>" class="btn btn-link">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?= $this->include('dashboard/_partials/footer') ?>

</body>

</html>
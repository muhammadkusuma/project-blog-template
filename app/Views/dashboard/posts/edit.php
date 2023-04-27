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
                        <h1>Ubah Konten</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashbor') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Ubah Konten</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <?php if (session()->getFlashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php } ?>

                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php } ?>

                        <?= form_open('post/update/' . $post['id']); ?>
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" value="<?= $post['judul']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Isi</label>
                            <textarea name="content" id="post_content" class="form-control" required><?= $post['isi']; ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="gambar">Gambar Thumbnail</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*" onchange="previewImage(event)">
                                        <label class="custom-file-label" for="gambar">Pilih gambar</label>
                                    </div>
                                    <?php if ($post['gambar']) : ?>
                                        <div class="mt-2">
                                            <img id="preview" src="<?= $post['gambar']; ?>" alt="Gambar Lama" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Datetime picker input -->
                                <div class="form-group">
                                    <label for="datetimepicker">Terbit</label>
                                    <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker" value="<?php echo $post['created_at']; ?>" />
                                        <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="<?= base_url('dashbor') ?>" class="btn btn-link">Back</a>
                        </div>
                        <?= form_close(); ?>

                    </div>

                </div>
            </div>
        </section>
    </div>

    <?= $this->include('dashboard/_partials/footer') ?>

</body>

</html>
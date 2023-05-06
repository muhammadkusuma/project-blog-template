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

                        <form action="<?= base_url('link/store'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tipe_link">Tipe Link</label>
                                        <select name="tipe_link" id="tipe_link" class="form-control">
                                            <option value="default">Pilih Tipe Link</option>
                                            <option value="uin">UIN</option>
                                            <option value="produk_mahasiswa">Produk Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jenis_link">Jenis Link</label>
                                        <select name="jenis_link" id="jenis_link" class="form-control">
                                            <option value="default">Pilih Jenis Link</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="youtube">Youtube</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="linkedin">LinkedIn</option>
                                            <option value="github">GitHub</option>
                                            <option value="website">Website</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" id="link" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_link">Nama Link</label>
                                <input type="text" name="nama_link" id="nama_link" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('dashbor/link') ?>" class="btn btn-link">Kembali</a>
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
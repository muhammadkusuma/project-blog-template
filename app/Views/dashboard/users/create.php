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

                        <form action="<?= base_url('users/store'); ?>" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" required>
                                        <div class="invalid-feedback">Email tidak valid. Hanya menerima email dengan domain @gmail.com, @students.uin-suska.ac.id, atau @uin-suska.ac.id.</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- <div class="form-group">
                                        <label for="role">Level Akun</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="default">Pilih Level</option>
                                            <option value="admin">Admin</option>
                                            <option value="kaprodi">Kaprodi</option>
                                            <option value="sekprodi">Sekprodi</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url('dashbor/users') ?>" class="btn btn-link">Kembali</a>
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
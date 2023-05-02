<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('dashboard/_partials/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?= $this->include('dashboard/_partials/navbar') ?>

    <?= $this->include('dashboard/_partials/sidebar') ?>


    <!-- Content Wrapper. Contains page content -->
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?= $blog ?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-12">
                <div class="card">
                    <form class="card-body">
                        <div class="row">
                            <input type="hidden" value="<?php ?>" name="id_detail">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nama_website">Nama Website</label>
                                    <input type="text" class="form-control" id="nama_website" value="<?php ?>" name="nama_website" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="<?php ?>" name="email" maxlength="100" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" value="<?php ?>" name="alamat" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" class="form-control-file" id="favicon" name="favicon" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control-file" id="logo" name="logo" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>



            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Website</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Website</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Favicon</th>
                                    <th>Logo</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?= $this->include('dashboard/_partials/footer') ?>

</body>

</html>
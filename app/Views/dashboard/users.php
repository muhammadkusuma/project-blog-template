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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari Email">
                                </div>
                            </div>
                            <div class="col-12 col-md-auto text-md-right">
                                <a href="<?php echo base_url('users/create'); ?>" class="btn btn-success">Tambah</a>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-header -->
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
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Alamat Email</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="searchTable">
                                <?php if (!empty($users) && is_array($users)) : ?>
                                    <?php foreach ($users as $row) : ?>
                                        <tr>
                                            <td><?= $row->email; ?></td>
                                            <td><?= $row->role_user; ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" onclick="hapusUsers('<?= $row->id_user; ?>')">Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="3" class="text-center">No users found.</td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Alamat Email</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?= $this->include('dashboard/_partials/footer') ?>

</body>

</html>
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
                        <h1>Konten</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Konten</li>
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
                        <a href="<?php echo base_url('post/create'); ?>" class="btn btn-success btn-sm float-right">Konten Baru</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Terbit</th>
                                    <th>Memperbarui</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($posts) && is_array($posts)) { ?>
                                    <?php foreach ($posts as $row) { ?>
                                        <?php if ($row['id_menu'] === null) { ?>
                                            <tr>
                                                <td><?php echo $row['judul']; ?></td>
                                                <td><?php echo $row['slug']; ?></td>
                                                <td><?php echo $row['created_at']; ?></td>
                                                <td><?php echo $row['updated_at']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('post/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm">Ubah</a>
                                                    <a href="<?php echo base_url('post/destroy/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin ingin menghapus <?= $row['judul']; ?> ?');">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No post found.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Terbit</th>
                                    <th>Memperbarui</th>
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
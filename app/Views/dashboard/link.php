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
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari Link">
                                </div>
                            </div>
                            <div class="col-12 col-md-auto text-md-right">
                                <a href="<?php echo base_url('link/create'); ?>" class="btn btn-success">Link Baru</a>
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
                                    <th>Tipe Link</th>
                                    <th>Jenis Link</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="searchTable">
                                <?php if (!empty($link) && is_array($link)) { ?>
                                    <?php foreach ($link as $row) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $tipe_link = ucwords(str_replace('_', ' ', $row['tipe_link']));
                                                echo ($tipe_link == 'Uin') ? 'UIN' : $tipe_link;
                                                ?>
                                            </td>
                                            <td><?php echo ucfirst($row['jenis_link']); ?></td>
                                            <td><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nama_link']; ?></a></td>
                                            <td>
                                                <a href="<?php echo base_url('link/edit/' . $row['id_link']); ?>" class="btn btn-primary btn-sm">Ubah</a>
                                                <button class="btn btn-danger btn-sm" onclick="hapusLink(<?= $row['id_link']; ?>)">Hapus</button>
                                                
                                                <!-- <a href="<?php echo base_url('link/destroy/' . $row['id_link']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin ingin menghapus <?= $row['nama_link']; ?> ?');">Hapus</a> -->
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No link found.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tipe Link</th>
                                    <th>Jenis Link</th>
                                    <th>Link</th>
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
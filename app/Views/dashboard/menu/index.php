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
                                        <label for="nama_menu">Nama Menu</label>
                                        <input type="text" name="nama_menu" id="nama_menu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="sub_menu">Termasuk Sub Menu</label>
                                        <select name="sub_menu" id="sub_menu" class="form-control">
                                            <option value="default">Pilih</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('dashbor/link') ?>" class="btn btn-link">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Menu</th>
                                    <th>Sub Menu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="searchTable">
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
                                                    <a href="<?php echo base_url('post/destroy/' . $row['id']); ?>" class="btn btn-danger btn-sm delete-post" data-judul="<?= $row['judul']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No Menu found.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Menu</th>
                                    <th>Sub Menu</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?= $this->include('dashboard/_partials/footer') ?>


</body>

</html>
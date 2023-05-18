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
                        <form action="<?= base_url('menu/store'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="menu">Nama Menu</label>
                                        <input type="text" name="menu" id="menu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="submenu">Termasuk Sub Menu</label>
                                        <select name="submenu" id="submenu" class="form-control">
                                            <option value="default">Pilih</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah Menu</button>
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
                                <?php if (!empty($menu) && is_array($menu)) { ?>
                                    <?php foreach ($menu as $row) { ?>
                                        <tr>
                                            <td><?php echo ucfirst($row['menu']); ?></td>
                                            <td><?php echo ucfirst($row['submenu']); ?></td>
                                            <td>
                                                <a href="<?php echo base_url('menu/destroy/' . $row['id_menu']); ?>" class="btn btn-danger btn-sm delete-menu" data-judul="<?= ucfirst($row['menu']); ?>" onclick="confirmDeleteMenu(event)">Hapus</a>
                                            </td>
                                        </tr>
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
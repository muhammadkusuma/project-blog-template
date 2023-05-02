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
                        <form action="<?= base_url('detail/update/' . $detail['0']['id_detail']); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?= $detail['0']['id_detail'] ?>" name="id_detail">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_website">Nama Website</label>
                                        <input type="text" class="form-control" id="nama_website" value="<?= $detail['0']['nama_website']; ?>" name="nama_website" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="<?= $detail['0']['email']; ?>" name="email" maxlength="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3" name="alamat" required><?= $detail['0']['alamat']; ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="favicon">Favicon</label>
                                        <input type="file" class="form-control-file" id="favicon" name="favicon" onchange="previewImage(event, 'favicon-preview')" required>
                                    </div>
                                    <img id="favicon-preview" src="uploads/img/<?= $detail['0']['favicon']; ?>" alt="Preview Favicon" style="max-width: 100px; max-height: 100px;">
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="file" class="form-control-file" id="logo" name="logo" onchange="previewImage(event, 'logo-preview')" required>
                                    </div>
                                    <img id="logo-preview" src="uploads/img/<?= $detail['0']['logo']; ?>" alt="Preview Logo" style="max-width: 100px; max-height: 100px;">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>


                </div>
            </div>





        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?= $this->include('dashboard/_partials/footer') ?>

</body>

</html>
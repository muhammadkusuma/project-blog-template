<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('dashboard/_partials/head') ?>
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>"><b>Login</b>Page</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-google mr-2"></i> Google Single Sign-On
                </a>
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
    </div>
    <!-- /.login-box -->

    <?= $this->include('dashboard/_partials/footer') ?>

</body>

</html>
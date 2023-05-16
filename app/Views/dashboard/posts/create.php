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

                       

                        <form action="<?= base_url('post/store'); ?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea name="isi" id="post_content" class="form-control" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="gambar">Gambar Thumbnail</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*" onchange="previewImage()">
                                            <label class="custom-file-label" for="gambar">Pilih gambar</label>
                                        </div>
                                        <!-- Preview gambar -->
                                        <!-- <div class="mt-2">
                                            <img id="preview" src="" alt="Preview Gambar" style="max-width: 200px; max-height: 200px;">
                                        </div> -->
                                        <div class="mt-2" id="preview-container" style="display: none;">
                                            <img id="preview" src="" alt="Preview Gambar" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Datetime picker input -->
                                    <div class="form-group">
                                        <label for="datetimepicker">Terbit</label>
                                        <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                            <input type="datetime-local" name="terbit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('dashbor') ?>" class="btn btn-link">Back</a>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </section>
    </div>




    <?= $this->include('dashboard/_partials/footer') ?>



    <script>
        function validateForm() {
            // Mendapatkan input gambar
            var inputFile = document.getElementById('gambar');

            // Mendapatkan file yang diunggah
            var file = inputFile.files[0];

            // Mendapatkan ukuran file dalam bytes
            var fileSize = file.size;

            // Mendapatkan ekstensi file
            var fileExtension = file.name.split('.').pop().toLowerCase();

            // Mengecek ukuran file (1MB = 1048576 bytes)
            if (fileSize > 1048576) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ukuran file terlalu besar',
                    text: 'Ukuran file harus kurang dari 1MB.',
                });
                return false;
            }

            // Mengecek format file
            var allowedExtensions = ['jpeg', 'jpg', 'png'];
            if (!allowedExtensions.includes(fileExtension)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Format file tidak didukung',
                    text: 'Hanya file dengan format JPEG, JPG, dan PNG yang diperbolehkan.',
                });
                return false;
            }

            // Mengecek apakah tanggal dan waktu telah dipilih
            var terbit = document.getElementsByName('terbit')[0].value;
            if (terbit === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Harap pilih tanggal dan waktu',
                    text: 'Mohon pilih tanggal dan waktu terbit.',
                });
                return false;
            }

            return true;
        }

        // Memunculkan preview gambar saat dipilih
        function previewImage() {
            var fileInput = document.getElementById('gambar');
            var previewElement = document.getElementById('preview');
            var file = fileInput.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                previewElement.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                previewElement.src = "";
            }
        }
    </script>

    <script>
        function previewImage() {
            var fileInput = document.getElementById('gambar');
            var previewContainer = document.getElementById('preview-container');
            var previewImage = document.getElementById('preview');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.setAttribute('src', e.target.result);
                    previewContainer.style.display = 'block';
                }

                reader.readAsDataURL(fileInput.files[0]);
            } else {
                previewImage.setAttribute('src', '');
                previewContainer.style.display = 'none';
            }
        }
    </script>

</body>

</html>
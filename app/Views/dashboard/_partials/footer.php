<!-- Propper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="<?= base_url('dashboard/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('dashboard/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('dashboard/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('dashboard/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('dashboard/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('dashboard/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('dashboard/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('dashboard/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dashboard/dist/js/adminlte.js') ?>"></script>
<!-- CodeMirror -->
<script src="<?= base_url('dashboard/plugins/codemirror/codemirror.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/codemirror/mode/css/css.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/codemirror/mode/xml/xml.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/codemirror/mode/htmlmixed/htmlmixed.js') ?>"></script>
<!-- Sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<!-- Summernote script -->
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('dashboard/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- Datatables script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="<?= base_url('dashboard/build/js/bootstrap-datetimepicker.min.js') ?>"></script>
<script type="text/javascript">
    $(function() {
        $('#datetimepicker1').datetimepicker();
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- pagination -->
<script>
    $(document).ready(function() {
        $('ul.pagination').addClass('justify-content-center'); // menambahkan class justify-content-center ke ul.pagination
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    });
</script>
<!-- Copyright -->
<footer class="main-footer">
    Copyright &copy; <span id="tahun"></span> <strong><span>Laboratorium Program Studi Sistem
            Informasi</span></strong>
</footer>
<!-- Script Year Copyright -->
<script>
    var tahun = new Date().getFullYear();
    document.getElementById("tahun").innerHTML = tahun;
</script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#post_content').summernote({
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]

        });
    })

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    // Initialization of datetime picker
    $(function() {
        $('#datetimepicker').datetimepicker({
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-calendar-check-o',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            },
            format: 'YYYY-MM-DD HH:mm:ss',
            sideBySide: true, // Show timepicker next to datepicker
            useCurrent: false // Do not set the current date/time as the default value
        });
    });

    // Fungsi untuk menampilkan preview gambar saat mengunggah gambar
    function previewImage() {
        var preview = document.querySelector('#preview');
        var file = document.querySelector('#gambar').files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function() {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    // search konten
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#searchTable tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    // preview detail
    function previewImage(event, previewId) {
        var reader = new FileReader();
        var previewImage = document.getElementById(previewId);

        reader.onload = function() {
            if (reader.readyState == 2) {
                previewImage.src = reader.result;
            }
        }

        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>


<script>
    // default jenis link 
    document.querySelector('form').addEventListener('submit', function(e) {
        var jenisLink = document.getElementById('jenis_link').value;
        if (jenisLink === 'default') {
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Harap pilih Jenis Link',
            });
        }
    });

    // default tipe link
    document.querySelector('form').addEventListener('submit', function(e) {
        var tipeLink = document.getElementById('tipe_link').value;
        if (tipeLink === 'default') {
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Harap pilih Tipe Link',
            });
        }
    });


    // validasi link
    const linkInput = document.getElementById("link");
    linkInput.addEventListener("input", () => {
        const linkValue = linkInput.value.trim();
        const regex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i; // Regex untuk validasi link

        if (linkValue && !regex.test(linkValue)) {
            linkInput.setCustomValidity("Input yang dimasukkan bukan link!");
        } else {
            linkInput.setCustomValidity("");
        }
    });

    //  delete link 
    function hapusLink(id) {
        Swal.fire({
            title: 'Konfirmasi Hapus',
            text: "Kamu yakin ingin menghapus link ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo base_url('link/destroy/'); ?>" + id;
            }
        })
    }
</script>
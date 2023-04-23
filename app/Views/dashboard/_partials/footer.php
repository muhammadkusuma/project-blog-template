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
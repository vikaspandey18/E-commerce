 <footer class="main-footer">
     <strong>Copyright &copy; <?php date("Y") ?> <a href="dashboard.php">Social</a>.</strong>
     All rights reserved.
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="js/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Sparkline -->
 <script src="js/plugins/sparklines/sparkline.js"></script>
 <!-- DataTables  & Plugins -->
<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="js/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="js/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="js/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="js/plugins/jszip/jszip.min.js"></script>
<script src="js/plugins/pdfmake/pdfmake.min.js"></script>
<script src="js/plugins/pdfmake/vfs_fonts.js"></script>
<script src="js/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="js/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="js/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- JQVMap -->
 <script src="js/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="js/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="js/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="js/plugins/moment/moment.min.js"></script>
 <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="js/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="js/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="js/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="js/dist/js/adminlte.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="js/dist/js/pages/dashboard.js"></script>
 <!-- bs-custom-file-input -->
<script src="js/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
<script>
$(function () {
  bsCustomFileInput.init();
});
 </body>

 </html>
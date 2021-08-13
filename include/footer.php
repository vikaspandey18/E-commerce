<div class="container-fluid py-5 bg-dark">
    <div class="container">
        <div class="row">
          <div class="col-sm-3">
                <ul style="list-style-type: none;">
                  <li class="text-gray">About</li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Careers</a></li>
                  <li><a href="">Press</a></li>
                </ul>
          </div>
          <!-- ./col -->
          <div class="col-sm-3">
                <ul style="list-style-type: none;">
                  <li class="text-gray">Help</li>
                  <li><a href="">Payment</a></li>
                  <li><a href="">Shipping</a></li>
                  <li><a href="">Return Policy</a></li>
                  <li><a href="">FAQ</a></li>
                </ul>
          </div>
            <!-- /.card -->
          
          <!-- ./col -->
          <div class="col-sm-3">
                <ul style="list-style-type: none;">
                  <li class="text-gray">Policy</li>
                  <li><a href="">Term Of Use</a></li>
                  <li><a href="">Security</a></li>
                  <li><a href="">Sitemap</a></li>
                </ul>
          </div>
          <div class="col-sm-3">
              <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search" style="color:white;"></i>
                          </button>
                        </div>
                    </div>
                </form>
                <br>
                  <img src="js/dist/img/credit/visa.png" alt="Visa">
                  <img src="js/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="js/dist/img/credit/american-express.png" alt="American Express">
                  <img src="js/dist/img/credit/paypal2.png" alt="Paypal">
          </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</div>


<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>

<footer class="main-footer bg-dark text-center">
    <strong>Copyright &copy; <?php echo date("Y") ?></strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="js/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>
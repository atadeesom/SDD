      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Alexander Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('styles/plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('styles/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('styles/plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('styles/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('styles/plugins/fastclick/fastclick.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('styles/dist/js/app.min.js')?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('styles/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('styles/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script src="<?php echo base_url('styles/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url('styles/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url('styles/plugins/chartjs/Chart.min.js')?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('styles/dist/js/pages/dashboard2.js')?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('styles/dist/js/demo.js')?>"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>

<!-- jQuery 3 -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/bower_components/select2/dist/js/select2.full.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/plugins/input-mask/jquery.inputmask.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/plugins/input-mask/jquery.inputmask.date.extensions.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/plugins/input-mask/jquery.inputmask.extensions.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('asset/asset_lte/plugins/iCheck/icheck.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/asset_lte/dist/js/adminlte.min.js')?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/bower_components/morris.js/morris.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('asset/asset_lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/jquery-knob/dist/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/moment/min/moment.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_lte/bower_components/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.datepicker').datepicker({
      autoclose: true,
      format:'d M yyyy'
    });
    $('.select2').select2()
  });

  $( document ).ready(function() {
    // Handler for .ready() called.
    $("#checkAll").click(function(){
      $('input:checkbox').not(this).prop('checked', this.checked);
    });
  });
</script>
<?php
    $total_product_gallery = 0;
    if(isset($product_gallery)){
      if($product_gallery!=FALSE){
        $total_product_gallery = sizeof($product_gallery);
      }
    }
 ?>
      <script type="text/javascript">
      $(document).ready(function () {

          // Denotes total number of rows
          var rowIdx = 0;

          // jQuery button click event to add a row
          $('#addBtn').on('click', function () {

            // Adding a row inside the tbody.
            $('#tbody').append(`<tr id="R${++rowIdx}">
                 <td class="row-index">
                 ${rowIdx+<?php echo $total_product_gallery;?>}
                 </td>
                 <td>
                 <label><small>max file: 2Mb</small></label>
                  <input type="file" name="files[]" required>
                 </td>
                 <td>
                  <input type="text" name="caption[]" placeholder="masukkan keterangan" style="width:200px" required>
                 </td>
                   <td><input type="number" name="sort_order[]" style="width:50px;" min=1 required></td>
                  <td class="text-left">
                    <button class="btn btn-danger remove"
                      type="button"><i class="fa fa-close"></i></button>
                    </td>
                  </tr>`);
          });

          // jQuery button click event to remove a row.
          $('#tbody').on('click', '.remove', function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('tr').nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {

              // Getting <tr> id.
              var id = $(this).attr('id');

              // Getting the <p> inside the .row-index class.
              var idx = $(this).children('.row-index').children('p');

              // Gets the row number from <tr> id.
              var dig = parseInt(id.substring(1));

              // Modifying row index.
              idx.html(`Row ${dig - 1}`);

              // Modifying row id.
              $(this).attr('id', `R${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('tr').remove();

            // Decreasing total number of rows by 1.
            rowIdx--;
          });
        });
      </script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('asset/asset_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/asset_lte/bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/asset_lte/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/asset_lte/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/asset_lte/dist/js/demo.js')?>"></script>

<script src="https://cdn.tiny.cloud/1/bc6mrvoozsncl7td78zth31vvbv5xc6984q5vp7gpciq0f5e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>

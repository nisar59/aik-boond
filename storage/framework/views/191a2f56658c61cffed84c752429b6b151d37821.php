 <!-- General JS Scripts -->
  <script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/dataTables.dateTime.min.js')); ?>"></script>
  <!-- JS Libraies -->
  <script src="<?php echo e(asset('assets/bundles/apexcharts/apexcharts.min.js')); ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('assets/js/page/index.js')); ?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/bundles/datatables/datatables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/bundles/jquery-ui/jquery-ui.min.js')); ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/bundles/chartjs/chart.min.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/js/page/datatables.js')); ?>"></script>
  <script type="text/javascript">

  $(document).ready(function(){

    $(".layout-color input:radio").change(function () {
       var val=$(this).val();

       $.ajax({
        url:"<?php echo e(url('settings/theme')); ?>",
        method:"POST",
        data:{data:val, field:'layout', _token:"<?php echo e(csrf_token()); ?>"},
        success:function(data){
          console.log(data);
        }

       });
    });



    $(".sidebar-color input:radio").change(function () {
      var val=$(this).val();
       $.ajax({
        url:"<?php echo e(url('settings/theme')); ?>",
        method:"POST",
        data:{data:val, field:'sidebar', _token:"<?php echo e(csrf_token()); ?>"},
        success:function(data){
          console.log(data);
        }

       });
    });



  $(".choose-theme li").on("click", function () {
    var val=$(this).attr("title");
    $.ajax({
        url:"<?php echo e(url('settings/theme')); ?>",
        method:"POST",
        data:{data:val, field:'theme', _token:"<?php echo e(csrf_token()); ?>"},
        success:function(data){
          console.log(data);
        }

       });
  });



 $("#mini_sidebar_setting").on("change", function () {
    var val = $(this).is(":checked") ? "checked" : "unchecked";
 $.ajax({
        url:"<?php echo e(url('settings/theme')); ?>",
        method:"POST",
        data:{data:val, field:'mini', _token:"<?php echo e(csrf_token()); ?>"},
        success:function(data){
          console.log(data);
        }

       });
  });


  $("#sticky_header_setting").on("change", function () {
  var val = $(this).is(":checked") ? "checked" : "unchecked";
 $.ajax({
        url:"<?php echo e(url('settings/theme')); ?>",
        method:"POST",
        data:{data:val, field:'sticky', _token:"<?php echo e(csrf_token()); ?>"},
        success:function(data){
          console.log(data);
        }

       });

  });


  $(".btn-restore-theme").on("click", function () {
 $.ajax({
        url:"<?php echo e(url('settings/restorydefault')); ?>",
        method:"POST",
        data:{_token:"<?php echo e(csrf_token()); ?>"},
        success:function(data){
          console.log(data);
        }

       });

  });


var invc=`<?php echo Session::get('invoice'); ?>`;
console.log(invc);
if(invc!=''){
  newWin= window.open("",'print this');
   newWin.document.write(invc);
   newWin.print();
   newWin.close();
}


  });
</script><?php /**PATH /home4/lifeline/public_html/backup/resources/views/layouts/footer-js.blade.php ENDPATH**/ ?>
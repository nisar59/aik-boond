<?php $__env->startSection('title'); ?>
Doctor
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Doctor</h4>
                    <div class="col-md-6 text-right">
                    <a href="<?php echo e(url('doctor/create')); ?>" class="btn btn-success">+</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="users" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Specialists</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Upazila Name</th>
                            <th>Work Place</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    //Roles table
    $(document).ready( function(){
  var roles_table = $('#users').DataTable({
              processing: true,
              serverSide: true,
              ajax: "<?php echo e(url('doctor')); ?>",
              buttons:[],
              columns: [
              {data: 'image', name: 'image', orderable: false, searchable: false},
                {data: 'specialist_id', name: 'specialist_id'},
                {data: 'name', name: 'name'},
                {data: 'contact_number', name: 'contact_number'},
                {data: 'upazila_id', name: 'upazila_id'},
                {data: 'work_place', name: 'work_place'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
          });
      });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/Doctor\Resources/views/index.blade.php ENDPATH**/ ?>
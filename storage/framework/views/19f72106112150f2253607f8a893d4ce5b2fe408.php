<?php $__env->startSection('title'); ?>
Blood Donors
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Blood Donors</h4>
                    <div class="col-md-6 text-right">
                    <a href="<?php echo e(url('donors/create')); ?>" class="btn btn-success">+</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="users" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Upazila Name</th>
                            <th>Blood Group</th>
                            <th>Contact No</th>
                            <th>Last Donated Date</th>
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
              ajax: "<?php echo e(url('donors')); ?>",
              buttons:[],
              columns: [
                {data: 'image', name: 'image', orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'age', name: 'age'},
                {data: 'upazila_name', name: 'upazila_name'},
                {data: 'blood_group', name: 'blood_group'},
                {data: 'contact_no', name: 'contact_no'},
                {data: 'last_donate_date', name: 'last_donate_date'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
          });
      });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/lifeline/public_html/Modules/Donors/Resources/views/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
Roles & Permissions
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Roles & Permissions</h4>
                    <div class="col-md-6 text-right">
                    <a href="<?php echo e(url('roles/create')); ?>" class="btn btn-success">+</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="roles" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Name</th>
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
  var roles_table = $('#roles').DataTable({
              processing: true,
              serverSide: true,
              ajax: "<?php echo e(url('roles')); ?>",
              buttons:[],
              columnDefs: [ {
                  "targets": 1,
                  "orderable": false,
                  "searchable": false
              } ]
          });
      });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/Roles\Resources/views/index.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title'); ?>
Roles & Permissions
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            
            <form action="<?php echo e(url('roles/store')); ?>" method="post">
              <?php echo csrf_field(); ?>  
            <div class="row">  
              <div class="col-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Roles & Permissions</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Role</label>
                      <input type="text" class="form-control" name="role" placeholder="Role">
                    </div>
                    <div class="form-group row">
                      <?php $__currentLoopData = AllPermissions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name=> $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-4">
                      <label class="d-block text-capitalize"><?php echo e($name); ?></label>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="form-check">
                        <input class="form-check-input" name="permissions[]" value="<?php echo e($name.'.'.$permission); ?>" type="checkbox" id="defaultCheck<?php echo e($name.$permission); ?>">
                        <label class="form-check-label text-capitalize" for="defaultCheck<?php echo e($name.$permission); ?>">
                          <?php echo e($permission); ?>

                        </label>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </div>
                </div>
              </div>
              </div>
            </form>
          </div>
        </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/Roles\Resources/views/create.blade.php ENDPATH**/ ?>
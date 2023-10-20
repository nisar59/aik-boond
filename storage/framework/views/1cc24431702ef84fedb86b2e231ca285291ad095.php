
<?php $__env->startSection('title'); ?>
Specialists
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
  <div class="section-body">
    
    <form action="<?php echo e(url('specialists/store')); ?>" method="post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Specialists</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Specialists Name</label>
                  <input type="text" class="form-control"  name="specialists" placeholder="Enter specialists Name">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/Specialists\Resources/views/create.blade.php ENDPATH**/ ?>
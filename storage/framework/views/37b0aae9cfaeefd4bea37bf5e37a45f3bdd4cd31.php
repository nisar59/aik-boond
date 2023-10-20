
<?php $__env->startSection('title'); ?>
About
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
  <div class="section-body">
    
    <form action="<?php echo e(url('about/update/'.$about->id)); ?>" method="post" enctype="multipart/form-data" >
      <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>About</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('image-display').src = window.URL.createObjectURL(this.files[0])">
                </div>
                <div class="form-group col-md-6">
                  <img src="<?php echo e(url('public/img/about/'.$about->image)); ?>" class="image-display" id="image-display" width="100" height="100">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Our Work</label>
                  <textarea name="our_work" class="form-control"  id="" cols="68" placeholder="Enter  Our Work" rows="10"><?php echo e($about->work); ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label> Who we are</label>
                  <textarea name="who_we_are" class="form-control"  id="" cols="68" placeholder="Enter  Who we are" rows="10"><?php echo e($about->who_we_are); ?></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label> Our mission</label>
                  <textarea name="our_mission" class="form-control"  id="" cols="68" placeholder="Enter  Our mission" rows="10"><?php echo e($about->mission); ?></textarea>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/About\Resources/views/edit.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title'); ?>
Slider
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            
            <form action="<?php echo e(url('slider/update/'.$slider->id)); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>  
            <div class="row">  
              <div class="col-12 col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Slider</h4>
                  </div>
                  <div class="card-body">
                   <div class="row">
                  <div class="form-group col-md-6">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('image-display').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                  <div class="form-group col-md-6">
                    <img src="<?php echo e(url('public/img/images/'.$slider->image)); ?>" class="image-display" id="image-display" width="100" height="100">
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/lifeline/public_html/Modules/Slider/Resources/views/edit.blade.php ENDPATH**/ ?>
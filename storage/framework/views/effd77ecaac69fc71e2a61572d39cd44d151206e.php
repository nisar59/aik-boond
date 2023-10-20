
<?php $__env->startSection('title'); ?>
Blood Donor
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            
            <form action="<?php echo e(url('donors/store')); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>  
            <div class="row">  
              <div class="col-12 col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Blood Donor</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="form-group col-md-6">
                      <label>Image</label>
                      <input type="file" class="form-control" name="image" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Age</label>
                      <input type="number" class="form-control" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Upazila Name</label>
                     <select class="form-control" name="upazila_name">
                    <?php $__currentLoopData = $doner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($doners->id); ?>"><?php echo e($doners->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Blood Group</label>
                      <select name="blood_group" class="form-control">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Contact No</label>
                      <input type="number" class="form-control" name="contact_no"  placeholder="Enter Contact No">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Last Donate Date</label>
                      <input type="date" class="form-control" name="last_donate_date" placeholder="Enter Last Donate Date">
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/Donors\Resources/views/create.blade.php ENDPATH**/ ?>
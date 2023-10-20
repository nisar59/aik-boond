
<?php $__env->startSection('title'); ?>
Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="section">
          <div class="section-body">
            
            <form action="<?php echo e(url('users/update/'.$data['user']->id)); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>  
            <div class="row">  
              <div class="col-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Users</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input type="text" class="form-control" value="<?php echo e($data['user']->name); ?>" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" value="<?php echo e($data['user']->email); ?>" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group <?php if($data['user']->roles[0]->name!='super-admin'): ?> col-md-6 <?php else: ?> col-md-12 <?php endif; ?>">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <p class="text-muted">leave empty, if you don't want to update the password</p>
                    </div>
                    <?php if($data['user']->roles[0]->name!='super-admin'): ?>
                    <div class="form-group col-md-6">
                      <label>Role</label>
                      <select class="form-control" name="role">
                        <?php $__currentLoopData = $data['role']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($role->name); ?>" <?php if($data['user']->roles[0]->name==$role->name): ?> selected <?php endif; ?>><?php echo e($role->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <?php else: ?>
                    <input type="hidden" name="role" value="super-admin">
                    <?php endif; ?>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Image</label>
                      <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('image-display').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <?php
                    $image_name=$data['user']->image;
                    $image_path=public_path('img/users/'.$image_name);
                    if(file_exists($image_path) AND $image_name!=''){
                      $image_path=url('public/img/users/'.$image_name);
                    }
                    else{
                      $image_path=url('public/img/images.png');
                    }
                    ?>

                    <div class="form-group col-md-6">
                      <img src="<?php echo e($image_path); ?>" class="image-display" id="image-display" width="100" height="100">
                    </div>
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\Modules/Users\Resources/views/edit.blade.php ENDPATH**/ ?>
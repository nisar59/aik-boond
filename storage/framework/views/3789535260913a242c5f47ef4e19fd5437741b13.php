<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-content">
            <?php if(count($errors) > 0): ?>
              <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><?php echo e($error); ?></li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            <?php elseif(Session::has('warning')): ?>
            <div class="alert alert-warning"><?php echo e(Session::get('warning')); ?></div>

            <?php elseif(Session::has('success')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>

            <?php elseif(Session::has('error')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
            <?php else: ?>
            <?php endif; ?>
      <?php echo $__env->yieldContent('content'); ?>
      <?php
      $set=Settings();
      ?>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" <?php if($set->layout==1): ?> checked <?php endif; ?> value="1" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" <?php if($set->layout==2): ?> checked <?php endif; ?> value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" <?php if($set->sidebar_color==1): ?> checked <?php endif; ?> value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" <?php if($set->sidebar_color==2): ?> checked <?php endif; ?> value="2" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" <?php if($set->color_theme=='white'): ?> class="active" <?php endif; ?>>
                      <div class="white"></div>
                    </li>
                    <li title="cyan" <?php if($set->color_theme=='cyan'): ?> class="active" <?php endif; ?>>
                      <div class="cyan"></div>
                    </li>
                    <li title="black" <?php if($set->color_theme=='black'): ?> class="active" <?php endif; ?>>
                      <div class="black"></div>
                    </li>
                    <li title="purple" <?php if($set->color_theme=='purple'): ?> class="active" <?php endif; ?>>
                      <div class="purple"></div>
                    </li>
                    <li title="orange" <?php if($set->color_theme=='orange'): ?> class="active" <?php endif; ?>>
                      <div class="orange"></div>
                    </li>
                    <li title="green" <?php if($set->color_theme=='green'): ?> class="active" <?php endif; ?>>
                      <div class="green"></div>
                    </li>
                    <li title="red" <?php if($set->color_theme=='red'): ?> class="active" <?php endif; ?>>
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" <?php echo e($set->mini_sidebar); ?> name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" <?php echo e($set->sticky_header); ?> name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
      </div>
      </div>
      <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
  </div>
    <?php echo $__env->make('layouts.footer-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>


</body>
</html>
<?php /**PATH E:\system\xampp8.1\htdocs\blood\resources\views/layouts/template.blade.php ENDPATH**/ ?>
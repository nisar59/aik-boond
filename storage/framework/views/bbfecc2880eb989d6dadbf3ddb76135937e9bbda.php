<?php
$pref=Request()->route()->getPrefix();
?>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo e(url('/')); ?>"> <img alt="image" src="<?php echo e(url('public/img/settings/'.Settings()->portal_logo)); ?>" class="header-logo" /> <span
                class="logo-name"><?php echo e(Settings()->portal_name); ?></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown <?php if($pref==''): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('/')); ?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.view')): ?>
            <li class="dropdown <?php if($pref=='/users'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('users')); ?>" class="nav-link"><i class="fas fa-user-friends"></i><span>Users</span></a>
            </li>

            <li class="dropdown <?php if($pref=='/registered-people'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('registered-people')); ?>" class="nav-link"><i class="fas fa-user-friends"></i><span>Registered People</span></a>
            </li>

            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permissions.view')): ?>
            <li class="dropdown <?php if($pref=='/roles'): ?> active <?php endif; ?>"><a class="nav-link" href="<?php echo e(url('roles')); ?>"><i class="fas fa-hands-helping"></i><span>Roles & Permissions</span></a></li>
            <?php endif; ?>

            <li class="menu-header">Upazila</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('upazila.view')): ?>
            <li class="dropdown <?php if($pref=='/upazila'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('upazila')); ?>" class="nav-link"><i class="fa fa-thumbs-up"></i><span>Upazila</span></a>
            </li>
            <?php endif; ?>

            <li class="menu-header">Specialists</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('specialist.view')): ?>
            <li class="dropdown <?php if($pref=='/specialists'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('specialists')); ?>" class="nav-link"><i class="fa fa-user-md"></i><span>Specialists</span></a>
            </li>
            <?php endif; ?>

            <li class="menu-header">Blood Donors</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('donors.view')): ?>
            <li class="dropdown <?php if($pref=='/donors'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('donors')); ?>" class="nav-link"><i class="fas fa-indent"></i><span>Blood Donors</span></a>
            </li>
            <?php endif; ?>

            
            <li class="menu-header">Doctors</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('doctors.view')): ?>
            <li class="dropdown <?php if($pref=='/doctor'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('doctor')); ?>" class="nav-link"><i class="fas fa-file-export"></i><span>Doctors</span></a>
            </li>
            <?php endif; ?>

            <li class="menu-header">Slider</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider.view')): ?>
            <li class="dropdown <?php if($pref=='/slider'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('slider')); ?>" class="nav-link"><i class="fa-solid fa-image"></i><span>Slider</span></a>
            </li>
            <?php endif; ?>

             <li class="menu-header">Emergency Help</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('emergencey.view')): ?>
            <li class="dropdown <?php if($pref=='/emergencey'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('emergencey')); ?>" class="nav-link"><i class="fa fa-ambulance" aria-hidden="true"></i><span>Emergency Help</span></a>
            </li>
            <?php endif; ?>

            <li class="menu-header">About Us</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('about-us.view')): ?>
            <li class="dropdown <?php if($pref=='/about'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('about')); ?>" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i><span>About Us</span></a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings.view')): ?>
            <li class="menu-header">Panel Settings</li>
            <li class="dropdown <?php if($pref=='/settings'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('settings')); ?>" class="nav-link"><i class="fas fa-cogs"></i><span>Panel Settings</span></a>
            </li>
            <?php endif; ?>
          </ul>
        </aside>
      </div><?php /**PATH /home4/lifeline/public_html/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>
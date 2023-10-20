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


            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permissions.view')): ?>
            <li class="dropdown <?php if($pref=='/roles'): ?> active <?php endif; ?>"><a class="nav-link" href="<?php echo e(url('roles')); ?>"><i class="fas fa-hands-helping"></i><span>Roles & Permissions</span></a></li>
            <?php endif; ?>


            <li class="menu-header">Blood Donors</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('donors.view')): ?>
            <li class="dropdown <?php if($pref=='/donors'): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('donors')); ?>" class="nav-link"><i class="fas fa-indent"></i><span>Blood Donors</span></a>
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
      </div><?php /**PATH E:\system\xampp8.1\htdocs\aik-boond\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
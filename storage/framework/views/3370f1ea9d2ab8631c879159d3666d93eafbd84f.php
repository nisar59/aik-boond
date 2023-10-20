
<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
  <div class="section-body">
    <div class="row ">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
        <div class="card" style="height: 130px;">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3 m-auto">
                  <div class="card-content">
                    <h5 class="font-15">Doctors</h5>
                    <h2 class="mb-3 font-18"><?php echo e(number_format($doctor)); ?></h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 m-auto">
                  <div class="banner-img">
                    <img src="<?php echo e(asset('public/icons/maki_doctor.svg')); ?>" alt="" class="w-50">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
        <div class="card" style="height: 130px;">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3 m-auto">
                  <div class="card-content">
                    <h5 class="font-15"> Blood Donors</h5>
                    <h2 class="mb-3 font-18"><?php echo e(number_format($donor)); ?></h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 m-auto">
                  <div class="banner-img">
                    <img src="<?php echo e(asset('public/icons/homepagedonate.svg')); ?>" alt=""  class="w-50">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card" style="height: 130px;">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3 m-auto">
                  <div class="card-content">
                    <h5 class="font-15">Register People</h5>
                    <h2 class="mb-3 font-18"><?php echo e(number_format($people)); ?></h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 m-auto">
                  <div class="banner-img">
                    <img src="<?php echo e(asset('public/icons/homepageaboutus.svg')); ?>" alt=""  class="w-50">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Statistics</h4>
        </div>
        <div class="card-body">
          <canvas id="statistics"></canvas>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  $(document).ready(function() {
var ctx = document.getElementById("statistics").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        '<?php echo e($doctor); ?>',
        '<?php echo e($donor); ?>',
        '<?php echo e($people); ?>',
      ],
      backgroundColor: [
        'red',
        '#63ed7a',
        '#ffa426',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'Doctors',
      'Blood Donors',
      'Registered People',
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
  }
});

  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\system\xampp8.1\htdocs\blood\resources\views/home.blade.php ENDPATH**/ ?>
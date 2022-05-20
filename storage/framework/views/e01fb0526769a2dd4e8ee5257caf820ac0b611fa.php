

<?php $__env->startSection('content'); ?>
<div id="wrap">
  <section class="bodymain" style="min-height:540px;">
    <aside class="middle-container"> 
     <div class="clear" style="height:5px;"></div>
      <h1 style="margin:50px 0 0 270px; font-size:35px; color:#e85116;">Welcome To Admin Panel</h1>
      <?php echo e(Session::get('email')); ?> 

      </aside>
    <div class="clear"></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/admin.blade.php ENDPATH**/ ?>
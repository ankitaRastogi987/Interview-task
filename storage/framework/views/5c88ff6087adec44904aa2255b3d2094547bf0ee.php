
<?php $__env->startSection('content'); ?>
<section class="login">
  <div class="container">
   <div class="banner-content">
    <h1><i class="fa fa-smile"></i> Blogger</h1>
      
    <form method="post" class="form-signin" action="login">
      <?php echo csrf_field(); ?>
     <h3 class="form-signin-heading">Please sign in</h3>
        <?php if(Session::has("login_msg")): ?>
              <p class="alert-success"><?php echo e(Session::get("login_msg")); ?></p>
        <?php endif; ?>
     <div class="form-group">
      <input name="email" type="text" id="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email"><span style="color: red;"></span>
     </div>
     <div class="form-group">
      <input type="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control" name="password" placeholder="Password"><span style="color: red;"></span>
     </div>
  
     <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm" style="margin-bottom: 13px;">Sign in</button>
     <br/>
     
     <a class="btn btn-dark " href="" role="button">Only Auth user perform CRUD operations</a>
     <a class="btn btn-dark " href="" role="button">While Guest can only see post</a>
    </form>
    </form>
  
   </div><!--/. banner-content -->
  </div><!-- /.container -->
 </section> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/index.blade.php ENDPATH**/ ?>
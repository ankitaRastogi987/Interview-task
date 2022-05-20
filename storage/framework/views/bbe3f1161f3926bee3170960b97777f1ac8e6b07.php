
<?php $__env->startSection('content'); ?>
<div id="wrap" >
  <section class="bodymain" style="min-height:580px;">
    <aside class="middle-container">
      <div class="admin-inr"><br>

    <div class="form-outer" style="margin-left:320px; width:500px;">
            <form method="POST" action="do_change_password"> 
              <?php echo csrf_field(); ?>
              <h1>Change Password</h1>
              <div class="contact-row">
                <div class="name">Current Password</div>
                <div class="txtfld-box">
                  <input type="text" name="current_password">
                </div>
                <div class="req-field">
                <?php if($errors->has('current_password')): ?>
                      <div class="error"><?php echo e($errors->first('current_password')); ?></div>
                <?php endif; ?> 
                </div>
              </div>
              <div class="clear"></div>
              <div class="contact-row">
                <div class="name">New Password</div>
                <div class="txtfld-box">
                  <input type="text" name="new_password">
                </div>
                <div class="req-field">
                <?php if($errors->has('new_password')): ?>
                      <div class="error"><?php echo e($errors->first('new_password')); ?></div>
                <?php endif; ?> 
                </div>
              </div>
              
              <div class="clear"></div>
              <div class="contact-row">
                <div class="name">Confirm Password</div>
                <div class="txtfld-box">
                  <input type="text" name="confirm_password">
                </div>
                <div class="req-field">
                <?php if($errors->has('confirm_password')): ?>
                      <div class="error"><?php echo e($errors->first('confirm_password')); ?></div>
                <?php endif; ?> 
                </div>
              </div>
              
              <div class="clear">&nbsp;</div>
              <div class="contact-row">
                <div class="name" style="float:right; width:1px;">&nbsp;</div>
                <div style="background:none; border:none; float:left;">
                  <input type="submit" class="btn" value="Change Password">
                  <br>
                   <?php if(Session::has("password_msg")): ?>
                    <div class="alert-success"><?php echo e(Session::get("password_msg")); ?></div>
                  <?php endif; ?>
                  
                </div>
              </div>

              
            </div>  

            </form>
            <div class="clear">&nbsp;

            </div>
            
        <div class="clear"></div>
      </div>
    </aside>
    <div class="clear"></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/change_password.blade.php ENDPATH**/ ?>
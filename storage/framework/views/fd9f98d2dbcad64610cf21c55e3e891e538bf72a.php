<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Brilliance GPS Tracking</title>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

<!-- Menu start --------------->
<link href="menu/quickmenu0.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo e(URL::asset('menu/quickmenu0.js')); ?>"></script>
<!-- Menu End --------------->
</head>
<body>
<header>
  <div id="wrap">
    <div class="logo"><img src="<?php echo e(URL::asset('images/logo.png')); ?>" border="0"></div>
    
    <div class="admintxt">Admin panel</div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
<div class="clear"></div>
<div class="bodycont">
  <div id="wrap2" style="min-height:530px;">
    <form action="register_user" method="POST">
      <?php echo csrf_field(); ?>
    <div class="login-cont">
      <h1 class="loginhd">Register Here</h1>
      <div class="login-row">
        <div class="loginname">Email</div>
        <div class="admintxtfld-box">
          <input type="text" name="email" value="<?php echo e(old('email')); ?>">
        </div>        
        <div class="clear"></div>
      </div>
      <?php if($errors->has('email')): ?>
          <div class="error"><?php echo e($errors->first('email')); ?></div>
      <?php endif; ?>
<!--       <div class="loginreq-field">* This Field Required </div> -->
      
      
          <div class="login-row">
          <div class="loginname">Password</div>
          <div class="admintxtfld-box">
            <input type="text" name="password" value="<?php echo e(old('password')); ?>">
          </div>
          <div class="clear"></div>
        </div>
        <?php if($errors->has('password')): ?>
            <div class="error"><?php echo e($errors->first('password')); ?></div>
        <?php endif; ?>
        <div class="clear"></div>
        <div class="contact-row" style="width:325px;">
          <div style="background:none; border:none; margin-top:15px;">
          <a href="admin.html" style="text-decoration:none;">
            <input type="submit" class="btn" value="Register">
            </a><br>
            <?php if(Session::has("register_status")): ?>
              <p class="alert-success"><?php echo e(Session::get("register_status")); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </form>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © Brilliance GPS Tracking. All Rights Reserved.</div>      
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      
      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html><?php /**PATH F:\task\resources\views/register.blade.php ENDPATH**/ ?>
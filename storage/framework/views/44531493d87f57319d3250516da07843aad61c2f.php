

<?php $__env->startSection('content'); ?>
<section class="upload">
	  	<div class="container">
	 	 <div class="col-lg-12" style="background-color: white;">
			<div class="create-quiz-section" style="display: block;">
				<h2 style="padding-top: 32px;padding-bottom: 17px;">Create New Post</h2>
				
				<form action="upload_new_post" class="forms-sample quiz_form" name="" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<?php if(Session::has("save_post_status")): ?>
			              <p class="alert-success"><?php echo e(Session::get("save_post_status")); ?></p>
			        <?php endif; ?>
					<div class="form-group">

						<label for="exampleTextarea1" class="card-title">Post Title<span title="mendetory field" style="color: red;">*</span></label>
						<input value="<?php echo e(old('title')); ?>" name="title" type="text" class=" col-lg-6 form-control" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""><br><br>
						<span style="color: red;">
							<?php if($errors->has('title')): ?>
						          <div class="error"><?php echo e($errors->first('title')); ?></div>
						    <?php endif; ?>
						</span>
						<label for="exampleTextarea1" class="card-title">Post Description<span title="mendetory field" style="color: red;">*</span></label>
						<textarea  value="<?php echo e(old('detail')); ?>" name="detail" type="text" class=" col-lg-6 form-control detail" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""></textarea>
						<span style="color: red;">
							<?php if($errors->has('detail')): ?>
						          <div class="error"><?php echo e($errors->first('detail')); ?></div>
						    <?php endif; ?>
						</span>
						<br>
						<br>
						
					</div>
					<div class="row">
						<div class="col-md-6">
	                     	<label for="exampleTextarea1" class="card-title">Post belong to which Category<span title="mendetory field" style="color: red;">*</span></label>
	                     	<select  value="<?php echo e(old('category')); ?>" class="form-control" name="category" id="exampleTextarea1" rows="4" required="">				
								<option value="Technology">Technology</option>
								<option value="Food">Food</option>
								<option value="Social">Social</option>
								<option value="Business">Business</option>
								<option value="Music">Music</option>
								<option value="Travel">Travesl</option>
							</select>
							<span style="color: red;">
							<?php if($errors->has('category')): ?>
						          <div class="error"><?php echo e($errors->first('category')); ?></div>
						    <?php endif; ?>
						</span>
						 </div>	  
						 <div class="col-md-6">
						 	<label for="exampleTextarea1" class="card-title">Post image<span title="mendetory field" style="color: red;">*</span></label>
							<input  value="<?php echo e(old('post_img')); ?>" name="post_img" type="file" class=" col-lg-6 form-control" id="exampleTextarea1" rows="4" placeholder="Select here..." required="">
							<span style="color: red;">
							<?php if($errors->has('post_img')): ?>
						          <div class="error"><?php echo e($errors->first('post_img')); ?></div>
						    <?php endif; ?>
						</span>
							<br><br>
						 </div>              	  
                    </div>
                   <input type="submit" value="Post" id="save_post" class="btn btn-success" style="color: white;margin-bottom: 10px;">
                   <a id="cancle_btn" name="add_question" class="btn btn-success" style="color: white;margin-bottom: 10px;">Cancle</a>
			    </form>
			</div> 
		 </div>
	 	</div><!--/ container -->
	 </section><!--/ newsfeed -->
     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/new_post.blade.php ENDPATH**/ ?>
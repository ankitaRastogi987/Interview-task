

<?php $__env->startSection('content'); ?>
<section class="upload">
	  	<div class="container">
	 	 <div class="col-lg-12" style="background-color: white;">
			<div class="create-quiz-section" style="display: block;">
				<h2 style="padding-top: 32px;padding-bottom: 17px;">Update Post</h2>
				
				<form action="update" class="forms-sample quiz_form" name="" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<?php if(Session::has("save_post_status")): ?>
			              <p class="alert-success"><?php echo e(Session::get("save_post_status")); ?></p>
			        <?php endif; ?>
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo e($post->id); ?>">
						<label for="exampleTextarea1" class="card-title">Post Title<span title="mendetory field" style="color: red;">*</span></label>
						<input value="<?php echo e($post->title); ?>" name="title" type="text" class=" col-lg-6 form-control" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""><br><br>
						<span style="color: red;">
							<?php if($errors->has('title')): ?>
						          <div class="error"><?php echo e($errors->first('title')); ?></div>
						    <?php endif; ?>
						</span>
						<label for="exampleTextarea1" class="card-title">Post Description<span title="mendetory field" style="color: red;">*</span></label>
						<textarea name="detail" type="text" class=" col-lg-6 form-control detail" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""><?php echo e($post->detail); ?></textarea>
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
	                     	<select  selected="<?php echo e($post->category); ?>" class="form-control" name="category" id="exampleTextarea1" rows="4" required="">				
								<option value="Technology" <?php if($post->category=="Technology"): ?> selected <?php endif; ?>>Technology</option>
								<option value="Food" <?php if($post->category=="Food"): ?> selected <?php endif; ?>>Food</option>
								<option value="Social" <?php if($post->category=="Social"): ?> selected <?php endif; ?>>Social</option>
								<option value="Business" <?php if($post->category=="Business"): ?> selected <?php endif; ?>>Business</option>
								<option value="Music" <?php if($post->category=="Music"): ?> selected <?php endif; ?>>Music</option>
								<option value="Travell" <?php if($post->category=="Travel"): ?> selected <?php endif; ?>>Travel</option>
							</select>
							<span style="color: red;">
							<?php if($errors->has('category')): ?>
						          <div class="error"><?php echo e($errors->first('category')); ?></div>
						    <?php endif; ?>
						</span>
						 </div>	  
						 <div class="col-md-6">
						 	<div class="col-md-3">
						 		<label for="exampleTextarea1" class="card-title">Post image<span title="mendetory field" style="color: red;">*</span></label>
								<input value="<?php echo e($post->post_img); ?>" name="post_img" type="file" class=" col-lg-3 form-control" id="exampleTextarea1" rows="4" placeholder="Select here..." >
						 	</div>
						 	<div class="col-md-3">
						 		<label for="exampleTextarea1" class="card-title">Old Image</label>
						 		<img src="<?php echo e(Storage::url($post->post_img)); ?>" height="50px" width="120px">
						 		<input type="hidden" name="old_img" value="<?php echo e($post->post_img); ?>">
						 	</div>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/edit.blade.php ENDPATH**/ ?>
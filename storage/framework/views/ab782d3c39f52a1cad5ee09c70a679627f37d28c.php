

<?php $__env->startSection('content'); ?>
<div id="wrap">

  <section class="bodymain">
    <div class="clear"></div>
  </section>
  <!-- cat row starts here -->
  
  <section class="category row" style="margin-top: 2px;">
     <div class="col-md-2 col-2 cat"
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/3.gif') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
           <h4><a class="filteM" href="<?php echo e(URL('/home?category=Food')); ?>">Food</a></h4> 
          </div>      
     </div>
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
           <h4><a class="filteM" href="<?php echo e(URL('/home?category=Social')); ?>">Social</a></h4>
          
          </div>      
     </div>
     
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
           
           <h4><a class="filteM" href="<?php echo e(URL('/home?category=Music')); ?>">Music</a></h4>
          
          </div>      
     </div>
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/2.gif') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
          
           <h4><a class="filteM" href="<?php echo e(URL('/home?category=Technology')); ?>">Technology</a></h4>
          </div>      
     </div>
 
       <div class="col-md-2 col-2 cat" 
         style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
                background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="story-body text-center">
             
             <h4><a class="filteM" href="<?php echo e(URL('/home?category=Travel')); ?>">Travel</a></h4>
            
            </div>      
       </div>
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/15.jpg') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
          
           <h4><a class="filteM" href="<?php echo e(URL('/home?category=Business')); ?>">Business</a></h4>
            
          
          </div>
         </div>

     


    </div><!--/ col-lg-3 -->
  </div>
</section>

  <!-- cat row ends here -->
  <section class="newsfeed">

	  <div class="container">
	  	<?php if(Session::has("delete_post_status")): ?>
              <p class="alert-success"><?php echo e(Session::get("delete_post_status")); ?></p>
        <?php endif; ?>
        <?php if(Session::has("update_post_status")): ?>
              <p class="alert-success"><?php echo e(Session::get("update_post_status")); ?></p>
        <?php endif; ?>
        
	   <div class="row">
	   	<?php if(empty($posts)): ?>
	   		No posts available
	   	<?php endif; ?>

	  	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <div class="col-lg-4">
	    	
			 <a href="#readPost<?php echo e($post->id); ?>" data-toggle="modal">
				 <div class="explorebox" 
				   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url(<?php echo e(Storage::url($post->post_img)); ?>) no-repeat;
				          background-size: cover;
		                  background-position: center center;
		                  -webkit-background-size: cover;
		                  -moz-background-size: cover;
		                  -o-background-size: cover;">
				 </div>
			 </a>
			 
			 <!-- Modal -->
<div class="modal fade"  id="readPost<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="readPostTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="readPostTitle">Read Post</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body row" style="margin-left: 10px;margin-right: 10px;">
          <div class="text-center">
            <h2><?php echo e($post->title); ?></h2>
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12">
            <img class="img-fluid img-thumbnail" src="<?php echo e(Storage::url($post->post_img)); ?>" alt="Image">
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12 mt-5" style="margin-top: 10px;">
            <h4> Category : <?php echo e($post->category); ?> </h4>
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12 mt-5" style="margin-top: 10px;">
            <?php echo e($post->detail); ?>

            <input type="hidden" class="ar-post-id" value="<?php echo e($post->id); ?>">
          </div>
        </div>
      
      <div class="modal-footer">
      	<?php if(Session::has("email")): ?>
      	<a href="edit?id=<?php echo e($post->id); ?>" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Edit</a>
      	<a href="delete?id=<?php echo e($post->id); ?>" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Delete</a>
      	<?php endif; ?>
        <button type="button" class="kafe-btn kafe-btn-mint-small" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div><!--/ col-lg-4 -->
		<!-- ************************* -->

		<!-- ************************* -->
	  
	    
		
	   </div><!--/ row -->

	  </div>

<?php echo e($posts->links()); ?>

	</section>
<script type="text/javascript">
	$(document).ready(function() 
    {
      $('.cat').click(function()
      {
        var cat=$.trim($(this).text());
        // alert(cat);
        console.log("value is :"+cat);
        $.ajax({
          url: 'cat',
          type: 'POST',
          data: {cat: cat},
        })
        .done(function(e) 
        {
          console.log("success");
          $('#cont').html("");
          $('#cont').html(e);
        })
        .fail(function() {
          console.log("error");
        })
      });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/home.blade.php ENDPATH**/ ?>
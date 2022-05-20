
<?php $__env->startSection('content'); ?>
<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Sub Category</h1>
    <br>
  <form>
    <?php echo csrf_field(); ?>
      <div class="form-raw">
      <div class="form-name">Select Category</div>
      <div class="form-txtfld">
        <select class="main_category">
            <option>Select Option</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>
      <div class="clear"></div>

    <div class="form-raw">
      <div class="form-name">Add Sub Category</div>
      <div class="form-txtfld">
        <input type="text" class="subcat">
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox" class="category_active" name="category_active">
      </div>      
      <div class="clear"></div>
    </div>
        
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width:290px;">
        <input type="button" class="btn" id="add_subcat" value="Submit" >
      </div>
    </div>
  </div>
  </form>

  <div class="clear">&nbsp;</div>
</div>
<div id="wrap3">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Category Name</th>
       <th width="752" align="left" valign="middle">Sub Category Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
  </table>
  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<script type="text/javascript">
    $(document).ready(function() 
    {    
      $.ajax({
              url:"show_sub_cat",
              method:"GET",
              success:function(data)
              { 
                $(".admintable").append(data);
              }
      });


      $("#add_subcat").click(function()
      {
        var cat_id=$(".main_category").val();
        var category=$(".main_category").find(":selected").text();
        // alert(category);
        var subcat=$(".subcat").val();
        
        if( $('.category_active').prop('checked'))
        {
          var category_active="Active";
        }
        else
        {
          var category_active="Not Active";
        }
        if(category!='' && subcat!='')
        {
          var i=$('.sr').last().html();
          // alert(category+" "+cat_id+" "+subcat+" "+i);
          var _token=$('input[name="_token"]').val();
            $.ajax({
              url:"save_sub_category",
              method:"POST",
              data:{
                      cat_id:cat_id,
                      category:category,
                      subcat:subcat,
                      i:i,
                      category_active:category_active,
                      _token:_token
                  },
              success:function(data)
              { 
                $(".admintable").append(data);
              }
            })

        }
      }); 


      $('.admintable').on('click','.delete_sub_category',function()
      {
          var id=$(this).parent().attr('id');
          var _token=$('input[name="_token"]').val();
            $.ajax({
              url:"delete_sub_category",
              method:"POST",
              data:{
                      id:id,
                      _token:_token
                  },
              success:function(data)
              { 
                $("#"+id+"").remove();
              }
            })
      });


      $('.admintable').on('click','.edit_category',function()
      {
          var id=$(this).parent().attr('id');// get id of specific row

          if($(this).text()=="Edit")
          {
            $(this).text("Update");
            //pre ka 1st child
            $(this).prev().children().eq(0).hide();
            $(this).prev().children().eq(1).show();
            //2nd prev ka 1st child
            $(this).prev().prev().children().eq(0).hide();
            $(this).prev().prev().children().eq(1).show();
            //3nd prev ka 1st child
            $(this).prev().prev().prev().children().eq(0).hide();
            $(this).prev().prev().prev().children().eq(1).children().show();
            
            if($(this).prev().children().eq(0).text()=="Active") //if its active mark checkbox
            {
                $(this).prev().children().eq(1).prop('checked', true);
            }
            else
            {
                 $(this).prev().children().eq(1).prop('checked', false);
            }
            var optionValue=$(this).prev().prev().prev().children().eq(0).text();

            $(this).prev().prev().prev().children().eq(1).children().closest('.sc').val(optionValue).find("option[value=" + optionValue +"]").attr('selected', true);
            
            
          }
          else
          {
            // var category=$(this).prev().prev().prev().children().eq(1).children().closest('.sc').find(":selected").text();
            
            
            $(this).text("Edit");
            //pre ka 1st child
            $(this).prev().children().eq(0).show();
            $(this).prev().children().eq(1).hide();
            //2nd prev ka 1st child
            $(this).prev().prev().children().eq(0).show();
            $(this).prev().prev().children().eq(1).hide();
            //3nd prev ka 1st child
            $(this).prev().prev().prev().children().eq(0).show();
            $(this).prev().prev().prev().children().eq(1).children().hide();

// *********************************************************************
          // var category=$(this).prev().prev().children().eq(1).val();
          

          //  getting data to save into database
          if($(this).prev().children().eq(1).prop('checked'))
          {
            var category_active="Active";
          }
          else
          {
            var category_active="Not Active";
          }

          

          var subcat=$(this).prev().prev().children().eq(1).val();
          category=$(this).prev().prev().prev().children().eq(1).children().closest('.sc').find(":selected").text();


          $(this).prev().prev().prev().children().eq(0).text(category);
          $(this).prev().prev().children().eq(0).text(subcat);
          $(this).prev().children().eq(0).text(category_active);
          // alert(category+" "+category_active+" "+subcat+" "+id);
          if($(this).prev().children().eq(1).prop('checked'))
          {
            var category_active="Active";
          }
          else
          {
            var category_active="Not Active";
          }
          
          // $(this).prev().prev().children().eq(0).text(category);
          // $(this).prev().children().eq(0).text(category_active);
          if(category!='' && subcat!='')
          {
            var _token=$('input[name="_token"]').val();
              $.ajax({
                url:"update_sub_category",
                method:"POST",
                data:{
                        category:category,
                        subcat:subcat,
                         id:id,
                        category_active:category_active,
                        _token:_token
                    },
                success:function(data)
                { 
                    // $(this).prev().prev().children().eq(0).text(category);
                    // $(this).prev().children().eq(0).text(category_active);
                }
              })

          }

// *********************************************************************
          }
      });


    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/add-sub-category.blade.php ENDPATH**/ ?>
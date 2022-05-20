
<?php $__env->startSection('content'); ?>
<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Category</h1>
    <br>
    <form>
      <?php echo csrf_field(); ?>
      <div class="form-raw">
        <div class="form-name">Category Name</div>
        <div class="form-txtfld">
          <input type="text" name="category" class="category">
        </div>
      </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>    
      <div class="form-raw">
        <div class="form-name">Active</div>
        <div class="form-txtfld">
          <input type="checkbox" name="category_active" class="category_active">
        </div>      
        <div class="clear"></div>
      </div>
          
      <div class="form-raw">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld" style="width:290px;">
          <input type="button" class="btn" id="add_category" value="Submit">
        </div>
      </div>
    </form>
  </div>
  <div class="clear">&nbsp;</div>
</div>
<div id="wrap3">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Category Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
    <span class="addCategoryRow"></span>
  </table>
  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<script type="text/javascript">
    $(document).ready(function() 
    {    
      $.ajax({
              url:"show_cat",
              method:"GET",
              success:function(data)
              { 
                $(".admintable").append(data);
              }
      });


      $("#add_category").click(function()
      {
        var category=$(".category").val();
        if( $('.category_active').prop('checked'))
        {
          var category_active="Active";
        }
        else
        {
          var category_active="Not Active";
        }
        if(category!='')
        {
          var i=$('.sr').last().html();
          // alert(i);
          var _token=$('input[name="_token"]').val();
            $.ajax({
              url:"save_category",
              method:"POST",
              data:{
                      category:category,
                      i:i,
                      category_active:category_active,
                      _token:_token
                  },
              success:function(data)
              { 
                $(".admintable").append(data);
                // aler("inserted");
                $(".category").val("");
              }
            })

        }
      }); 


      $('.admintable').on('click','.delete_category',function()
      {
        $(this).closest('tr').remove();
          var id=$(this).parent().attr('id');
          var _token=$('input[name="_token"]').val();
            $.ajax({
              url:"delete_category",
              method:"POST",
              data:{
                      id:id,
                      _token:_token
                  },
              success:function(data)
              { 
                 $(this).closest('tr').remove();
                // $("#"+id+"").remove();  we can also use this code
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
            
            if($(this).prev().children().eq(0).text()=="Active") //if its active mark checkbox
            {
                $(this).prev().children().eq(1).prop('checked', true);
            }
            else
            {
                 $(this).prev().children().eq(1).prop('checked', false);
            }
          }
          else
          {
            $(this).text("Edit");
            //pre ka 1st child
            $(this).prev().children().eq(0).show();
            $(this).prev().children().eq(1).hide();
            //2nd prev ka 1st child
            $(this).prev().prev().children().eq(0).show();
            $(this).prev().prev().children().eq(1).hide();

// *********************************************************************
          var category=$(this).prev().prev().children().eq(1).val();
          if($(this).prev().children().eq(1).prop('checked'))
          {
            var category_active="Active";
          }
          else
          {
            var category_active="Not Active";
          }
          
          $(this).prev().prev().children().eq(0).text(category);
          $(this).prev().children().eq(0).text(category_active);
          
          if(category!='')
          {
            var _token=$('input[name="_token"]').val();
              $.ajax({
                url:"update_category",
                method:"POST",
                data:{
                        category:category,
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


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/add-category.blade.php ENDPATH**/ ?>
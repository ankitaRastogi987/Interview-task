

<?php $__env->startSection('content'); ?>
<div id="wrap">
  <form method="POST" action="save_product" enctype="multipart/form-data">
    <div class="clear" style="height:5px;"></div>
    <div id="wrap2">
      <h1>Add Product</h1>
      <br>
    <div class="form-raw">
      <div class="form-name">Select Category</div>
      <div class="form-txtfld">
        
            <?php echo csrf_field(); ?>
          <select class="main_category" name="category">
              <option>Select Option</option>
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
       
      </div>
    </div>
      <div class="clear"></div>


        <div class="form-raw">
      <div class="form-name">Select Sub Category</div>
      <div class="form-txtfld">
          <select name="subcat[]" class="display_subcat_ajax" multiple="select" style="height: 100px;" multiple>
             <!-- <option>Select Option</option> -->
          </select>
      </div>
    </div>
      <div class="clear"></div>
    
    
    
    <div class="form-raw">
      <div class="form-name">Product Name</div>
      <div class="form-txtfld">
        <input type="text" name="name">
      </div>
    </div>
    
    <div class="form-name">Product Image1</div>
    <div class="form-txtfld">
      <input type="file" name="image">
      <div class="form-name"> Image Size ( Width=560px, Height=390px ) (Product page)</div>
    </div>
  </div>
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Short Description</div>
    <div class="form-txtfld">
      <textarea name="short_description"></textarea>
    </div>
  </div>
  
  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Description</h1>
    <br>  
  <div class="title_row1">
      <div class="form-raw">
        <div class="form-name">Title 1</div>
        <div class="form-txtfld">
          <input type="text" name="title1">
        </div>
    </div>
    <div class="form-raw">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld txtfld50"><input name="heading1[]" type="text" placeholder="heading"></div>
        <div class="form-txtfld txtfld50"><input name="desciption1[]"  type="text" placeholder="desciption"></div>
    </div>
    <div class="form-raw" id="add_before_title1">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld" style="width: 320px; text-align: right;"><a id="add_more_title1">Add More +</a></div>
    </div>
  </div>
  
  <div class="title_row2">
      <div class="form-raw">
        <div class="form-name">Title 2</div>
        <div class="form-txtfld">
          <input type="text" name="title2">
        </div>
      </div>
    <div class="form-raw">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld txtfld50"><input name="heading2[]" type="text" placeholder="heading"></div>
        <div class="form-txtfld txtfld50"><input name="desciption2[]" type="text" placeholder="desciption"></div>
    </div>
    <div class="form-raw" id="add_before_title2">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld" style="width: 320px; text-align: right;"><a id="add_more_title2">Add More +</a></div>
    </div>
  </div>
  
  <div class="title_row3">
      <div class="form-raw">
        <div class="form-name">Title 3</div>
        <div class="form-txtfld">
          <input type="text" name="title3">
        </div>
      </div>
    <div class="form-raw">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld txtfld50"><input name="heading3[]" type="text" placeholder="heading"></div>
        <div class="form-txtfld txtfld50"><input name="desciption3[]" type="text" placeholder="desciption"></div>
    </div>
    <div class="form-raw" id="add_before_title3">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld" style="width: 320px; text-align: right;"><a id="add_more_title3">Add More +</a></div>
    </div>
  </div>
  
  
  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Features</h1>
    <br>  
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Content</div>
    <div class="form-txtfld" style="width:780px;">
      <!-- <textarea class="ckeditor" style="width:100%; height:500px;">CK</textarea> -->
      <textarea class="ckeditor form-control" name="wysiwyg-editor" style="width:100%; height:500px;"></textarea>

    </div>
  </div>
  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Upload PDF</h1>
    <br>  

  <div id="pdf_row">
      <div class="form-raw">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld txtfld50"><input name="pdf_heading[]" type="text" placeholder="PDF heading"></div>
        <div class="form-txtfld txtfld50"><input name="pdf[]" type="file" placeholder="desciption"></div>
    </div>
    <div class="form-raw" id="add_before_pdf">
        <div class="form-name">&nbsp;</div>
        <div class="form-txtfld" style="width: 320px; text-align: right;"><a id="add_more_pdf">Add More +</a></div>
    </div>
  </div>
  
  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">Active</div>
    <div class="form-txtfld">
      <input type="checkbox" name="active">
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld">
      <input type="submit" class="btn" value="Submit">
    </div>
  </div>
  </form>
</div>


<div class="clear">&nbsp;</div>
</div>
<div id="wrap2">
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="53" align="left" valign="middle">Sr.No.</th>
      <th width="153" align="left" valign="middle">Select Category</th>
      <th width="71" align="left" valign="middle"> Select Sub Category</th>
     <th width="71" align="left" valign="middle"> Product Name</th>
     
      <th width="408" align="left" valign="middle">Short Description</th>
      <th width=" " align="left" valign="middle">Full Description</th>
      <th width="49" align="left" valign="middle">Status</th>
      
      <th width="49" align="left" valign="middle">Edit</th>
      <th width="61" align="left" valign="middle">Remove</th>
    </tr>
    <tr>
      <td align="left" valign="top">1</td>
      <td align="left" valign="top">Lorem .</td>
      <td align="left" valign="top">Lorem .</td>
      <td align="left" valign="top">dfdd</td>
      
      <td align="left" valign="top">fdfd</td>
      <td align="left" valign="top">fdfd</td>
 

      <td align="left" valign="top"><strong>Active</strong></td>
      <td align="left" valign="top"><a href="#">Edit</a></td>
      <td align="center" valign="top"><a href="#"><img src="images/icon-bin.jpg" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
    </tr>
  </table>  
  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    // $(document).ready(function() {
    //    $('.ckeditor').ckeditor();
    // });
</script>

<script type="text/javascript">
    $(document).ready(function() 
    {    
        var count1 = 1;
        $("#add_more_title1").click(function()
        {
            if(count1<3)
            {
              var data = '<div class="form-raw"><div class="form-name">&nbsp;</div><div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div><div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div><a class="delete_row1"><img src="images/delete.gif" alt=""></div>';
               $(data).insertBefore('#add_before_title1');
               count1++;
            }
            if(count1==3)
            {
              $("#add_more_title1").hide();
            }
        });
        var count2 = 1;
        $("#add_more_title2").click(function()
        {
            if(count2<3)
            {
              var data = '<div class="form-raw"><div class="form-name">&nbsp;</div><div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div><div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div><a class="delete_row2"><img src="images/delete.gif" alt=""></div>';
               $(data).insertBefore('#add_before_title2');
               count2++;
            }
            if(count2==3)
            {
              $("#add_more_title2").hide();
            }
        });
        var count3 = 1;
        $("#add_more_title3").click(function()
        {
            if(count3<3)
            {
              var data = '<div class="form-raw"><div class="form-name">&nbsp;</div><div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div><div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div><a class="delete_row3"><img src="images/delete.gif" alt=""></div>';
               $(data).insertBefore('#add_before_title3');
               count3++;
            }
            if(count3==3)
            {
              $("#add_more_title3").hide();
            }
        });
         $('.title_row1').on('click','.delete_row1',function()
          {
              $(this).parent().remove();
              count1--;
              if(count1<3)
              {
                $("#add_more_title1").show();
              }

          });
         $('.title_row2').on('click','.delete_row2',function()
          {
              $(this).parent().remove();
              count2--;
              if(count2<3)
              {
                $("#add_more_title2").show();
              }

          });
         $('.title_row3').on('click','.delete_row3',function()
          {
              $(this).parent().remove();
              count3--;
              if(count3<3)
              {
                $("#add_more_title3").show();
              }

          });
         var count_pdf=1;
         $("#add_more_pdf").click(function()
          {
            if(count_pdf<3)
            {
              var data = '<div class="form-raw"><div class="form-name">&nbsp;</div><div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div><div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div><a class="delete_pdf"><img src="images/delete.gif" alt=""></div>';
               $(data).insertBefore('#add_before_pdf');
               count_pdf++;
            }
            if(count_pdf==3)
            {
              $("#add_more_pdf").hide();
            }
            

        });

         $('#pdf_row').on('click','.delete_pdf',function()
          {
              $(this).parent().remove();
              count_pdf--;
              if(count_pdf<3)
              {
                $("#add_more_pdf").show();
              }
          });


        $(".main_category").change(function ()
        {
          // alert($(this).val());
          var category = $(this).val();
          var _token=$('input[name="_token"]').val();
          // alert(_token)
          $.ajax({
                  url:"fetch_subcat_ajax",
                  method:"POST",
                  
                  data:{
                         category:category,
                        _token:_token,
                        },
                  success:function(data)
                  { 
                    $(".display_subcat_ajax").html(data);
                  }
          });
        });
        // 
//       $.ajax({
//               url:"show_sub_cat",
//               method:"GET",
//               success:function(data)
//               { 
//                 $(".admintable").append(data);
//               }
//       });


//       $("#add_subcat").click(function()
//       {
//         var cat_id=$(".main_category").val();
//         var category=$(".main_category").find(":selected").text();
//         // alert(category);
//         var subcat=$(".subcat").val();
        
//         if( $('.category_active').prop('checked'))
//         {
//           var category_active="Active";
//         }
//         else
//         {
//           var category_active="Not Active";
//         }
//         if(category!='' && subcat!='')
//         {
//           var i=$('.sr').last().html();
//           // alert(category+" "+cat_id+" "+subcat+" "+i);
//           var _token=$('input[name="_token"]').val();
//             $.ajax({
//               url:"save_sub_category",
//               method:"POST",
//               data:{
//                       cat_id:cat_id,
//                       category:category,
//                       subcat:subcat,
//                       i:i,
//                       category_active:category_active,
//                       _token:_token
//                   },
//               success:function(data)
//               { 
//                 $(".admintable").append(data);
//               }
//             })

//         }
//       }); 


//       $('.admintable').on('click','.delete_sub_category',function()
//       {
//           var id=$(this).parent().attr('id');
//           var _token=$('input[name="_token"]').val();
//             $.ajax({
//               url:"delete_sub_category",
//               method:"POST",
//               data:{
//                       id:id,
//                       _token:_token
//                   },
//               success:function(data)
//               { 
//                 $("#"+id+"").remove();
//               }
//             })
//       });


//       $('.admintable').on('click','.edit_category',function()
//       {
//           var id=$(this).parent().attr('id');// get id of specific row

//           if($(this).text()=="Edit")
//           {
//             $(this).text("Update");
//             //pre ka 1st child
//             $(this).prev().children().eq(0).hide();
//             $(this).prev().children().eq(1).show();
//             //2nd prev ka 1st child
//             $(this).prev().prev().children().eq(0).hide();
//             $(this).prev().prev().children().eq(1).show();
//             //3nd prev ka 1st child
//             $(this).prev().prev().prev().children().eq(0).hide();
//             $(this).prev().prev().prev().children().eq(1).children().show();
            
//             if($(this).prev().children().eq(0).text()=="Active") //if its active mark checkbox
//             {
//                 $(this).prev().children().eq(1).prop('checked', true);
//             }
//             else
//             {
//                  $(this).prev().children().eq(1).prop('checked', false);
//             }
//             var optionValue=$(this).prev().prev().prev().children().eq(0).text();

//             $(this).prev().prev().prev().children().eq(1).children().closest('.sc').val(optionValue).find("option[value=" + optionValue +"]").attr('selected', true);
            
            
//           }
//           else
//           {
//             // var category=$(this).prev().prev().prev().children().eq(1).children().closest('.sc').find(":selected").text();
            
            
//             $(this).text("Edit");
//             //pre ka 1st child
//             $(this).prev().children().eq(0).show();
//             $(this).prev().children().eq(1).hide();
//             //2nd prev ka 1st child
//             $(this).prev().prev().children().eq(0).show();
//             $(this).prev().prev().children().eq(1).hide();
//             //3nd prev ka 1st child
//             $(this).prev().prev().prev().children().eq(0).show();
//             $(this).prev().prev().prev().children().eq(1).children().hide();

// // *********************************************************************
//           // var category=$(this).prev().prev().children().eq(1).val();
          

//           //  getting data to save into database
//           if($(this).prev().children().eq(1).prop('checked'))
//           {
//             var category_active="Active";
//           }
//           else
//           {
//             var category_active="Not Active";
//           }

          

//           var subcat=$(this).prev().prev().children().eq(1).val();
//           category=$(this).prev().prev().prev().children().eq(1).children().closest('.sc').find(":selected").text();


//           $(this).prev().prev().prev().children().eq(0).text(category);
//           $(this).prev().prev().children().eq(0).text(subcat);
//           $(this).prev().children().eq(0).text(category_active);
//           // alert(category+" "+category_active+" "+subcat+" "+id);
//           if($(this).prev().children().eq(1).prop('checked'))
//           {
//             var category_active="Active";
//           }
//           else
//           {
//             var category_active="Not Active";
//           }
          
//           // $(this).prev().prev().children().eq(0).text(category);
//           // $(this).prev().children().eq(0).text(category_active);
//           if(category!='' && subcat!='')
//           {
//             var _token=$('input[name="_token"]').val();
//               $.ajax({
//                 url:"update_sub_category",
//                 method:"POST",
//                 data:{
//                         category:category,
//                         subcat:subcat,
//                          id:id,
//                         category_active:category_active,
//                         _token:_token
//                     },
//                 success:function(data)
//                 { 
//                     // $(this).prev().prev().children().eq(0).text(category);
//                     // $(this).prev().children().eq(0).text(category_active);
//                 }
//               })

//           }

// // *********************************************************************
//           }
//       });


    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\task\resources\views/product.blade.php ENDPATH**/ ?>
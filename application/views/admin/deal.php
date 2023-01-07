<!DOCTYPE html>
<html>
   <head>
      <?php $this->load->view('admin/includes/admin-meta.php');?>
   </head>
   <body class="skin-black">
      <!-- BEGIN Navbar -->
      <?php $this->load->view('admin/includes/admin-navbar.php');?>
      <!-- END Navbar -->
      <!-- BEGIN Container -->
      <div class="container" id="main-container">
         <!-- BEGIN Sidebar -->
         <?php $this->load->view('admin/includes/admin-sidebar.php');?>
         <!-- END Sidebar -->
         <!-- BEGIN Content -->
         <div id="main-content">
            <!-- BEGIN Page Title -->
            <div class="page-title">
               <div>
                  <h1><i class="fa fa-file-o"></i> Today's Deal</h1>
               </div>
            </div>
            <!-- END Page Title -->
            <!-- BEGIN Breadcrumb -->
            <div id="breadcrumbs">
               <ul class="breadcrumb">
                  <li>
                     <i class="fa fa-home"></i>
                     <a href="<?php echo base_url('seller/dashboard');?>">Home</a>
                     <span class="divider"><i class="fa fa-angle-right"></i></span>
                  </li>
                  <li class="active">Deal Items</li>
               </ul>
            </div>
            <!-- END Breadcrumb -->
            <div class="row">
               <div class="col-md-12 m-0">
                  <?php if(!empty($this->session->flashdata('info-message-success')))
                  {?>
                  <div class="alert alert-success">
                     <button class="close" data-dismiss="alert">&times;</button>
                     <strong><?php echo $this->session->flashdata('info-message-success');?></strong>
                  </div>
                  <?php } ?>
                  <?php if(!empty($this->session->flashdata('info-message-error')))
                  {?>
                  <div class="alert alert-danger">
                     <button class="close" data-dismiss="alert">&times;</button>
                     <strong><?php echo $this->session->flashdata('info-message-error');?></strong>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <!-- BEGIN Main Content -->
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Deal Item</h3>
                        <div class="box-tool">
                           <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                           <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                     </div>
                     <div class="box-content">
                        <form action="<?php if(!empty($product_select['productID'])){ echo base_url('admin/deal-update');} else{ echo base_url('admin/deal-insert');} ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Category : </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control" name="category" id="sel_category" data-placeholder="Choose a Category" tabindex="1" required="">
                                    <option value="">Select Category</option>
                                    <?php foreach($select_category as $select_cat)
                                    {?>
                                    <option value="<?php echo $select_cat['categoryID'];?>" <?php if(!empty($product_select['productID'])){ if($select_cat['categoryID']==$product_select['categoryID']){ echo "selected";} }?> ><?php echo $select_cat['category'];?></option>
                                 <?php } ?>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Product Name : </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <input type="text" class="form-control" name="product" value="<?php if(!empty($product_select['productID'])){ echo $product_select['title']; }?>" required="" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Description : </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <textarea class="form-control ckeditor" name="content" rows="3" required=""><?php if(!empty($product_select['productID'])){ echo $product_select['product_description']; }?></textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">MRP Price : </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <input type="text" class="form-control" name="price" value="<?php if(!empty($product_select['productID'])){ echo $product_select['price']; }?>"  />
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Deal Price : </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <input type="text" class="form-control" name="newprice" value="<?php if(!empty($product_select['productID'])){ echo $product_select['new_price']; }?>"  />
                              </div>
                           </div>

                            <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Image : </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                       <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="file-input" name="images[]" multiple/></span>
                                       <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div>
                                 <span class="label label-important">NOTE!</span>
                                 <span>800*800 image size</span>
                              </div>
                            </div>

                           <?php if(!empty($product_select['productID']))
                           {?>
                            <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label"></label>
                                <?php 
                                $images=explode(',',$product_select['image']);
                                foreach($images as $value)
                                {
                                  $path=base_url('assets/images/meal/').$value;
                                ?>
                                <div class="col-sm-3 col-lg-3 controls">
                                  <img class="img-responsive img-thumbnail" src="<?php echo $path;?>" alt="Product picture" style="width:100%"/><br><br>
                                </div>
                                <?php 
                                }?>
                            </div>
                           <?php }?>

                           <input type="hidden" class="form-control" name="productID" value="<?php if(!empty($product_select['productID'])){ echo $product_select['productID']; }?>"/>
                           <div class="form-group">
                              <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                 <button type="submit" class="btn btn-black"><i class="fa fa-check"></i> Save</button>
                                 <button type="button" class="btn">Cancel</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END Main Content -->
            <?php $this->load->view('admin/includes/admin-footer.php');?>
         </div>
         <!-- END Content -->
      </div>
      <!-- END Container -->
      <!--basic scripts-->
      <?php $this->load->view('admin/includes/admin-script.php');?>
       <script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
    // City change
    $('#sel_category').change(function(){
      var categoryID = $(this).val();
      //alert(adminID);
      // AJAX request
      $.ajax({
        url:'<?=base_url()?>admin/Product/selectsubcat',
        method: 'post',
        data: {categoryID: categoryID},
        async : true,
        dataType : 'json',
        success: function(response){
         //alert(response);
          // Add options
          var html = '';
          var i;
          html += '<option value="">Select Subcategory</option>';
          for(i=0; i<response.length; i++){
            html += '<option value='+response[i].subcategoryID+'>'+response[i].subcategory+'</option>';
          }
          $('#sel_subcat').html(html);
        }
     });
   });
 });
 </script>
   </body>
</html>
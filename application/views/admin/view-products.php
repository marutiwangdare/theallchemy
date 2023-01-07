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
                  <h1><i class="fa fa-file-o"></i> View Products</h1>
               </div>
            </div>
            <!-- END Page Title -->
            <!-- BEGIN Breadcrumb -->
            <div id="breadcrumbs">
               <ul class="breadcrumb">
                  <li>
                     <i class="fa fa-home"></i>
                     <a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                     <span class="divider"><i class="fa fa-angle-right"></i></span>
                  </li>
                  <li class="active">View Product</li>
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
                        <h3><i class="fa fa-table"></i> View Product</h3>
                        <div class="box-tool">
                           <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                           <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                     </div>
                     <div class="box-content">
                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                           <table class="table table-advance" id="table1">
                              <thead>
                                 <tr>
                                    <th>Sno</th>
                                    <th>Image</th>
                                     <th>Product</th>
                                    <!--<th>Category</th>--->
                                    <th>Price</th>
                                                                        <th>Weight</th>
                                    <th>Height</th>
                                    <th>Width</th>
                                    <th>Lenth</th>

                                    
                                 <!---   <th>Price</th>--->
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                 $count=1;
                                 foreach($select_product as $select_query)
                                 {
                                    if($select_query['image'])
                                    {
                                       $image=explode(',',$select_query['image']);
                                       $path=base_url('assets/images/products/').$image['0'];
                                    }
                                    else
                                    {
                                       $path="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
                                    }
                                 ?>
                                 <tr class="table-flag-blue">
                                    <td><?php echo $count;?></td>
                                                                        <td><img src="<?php echo $path;?>" style="height:70px;width:auto;"></td>
<td style="width:150px;"><?php echo $select_query['title'];?></td>
                                  
                                    
                                    <td><?php if(!empty($select_query['price'])){ echo 'Rs '.$select_query['price'];}else{echo "--";}?></td>
                                    <td><?php echo $select_query['weight'];?> Grms</td>
                                    <td><?php echo $select_query['height'];?> Cm</td>
                                    <td><?php echo $select_query['width'];?> Cm</td>
                                    <td><?php echo $select_query['lenth'];?> Cm</td>
                                    <?php $data = urlencode(base64_encode($select_query['productID'])); ?>
                                    
                                       <td style="width:100px;">
                                       <a class="btn btn-danger show-tooltip text-white" title="Edit" href="<?php echo base_url('admin/product/').$data;?>"><i class="fa fa-edit"></i></a>&nbsp;<a class="btn btn-black show-tooltip" title="Delete" href="<?php echo base_url('admin/product-delete/').$data;?>"><i class="fa fa-trash-o"></i></a></td>
                                
                                 </tr>
                                 <?php 
                                    $count++;
                                 } ?>
                              </tbody>
                           </table>
                        </div>
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
   </body>
</html>
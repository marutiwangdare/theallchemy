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
                  		<h1><i class="fa fa-file-o"></i> View Meal</h1>
               		</div>
            	</div>
            	<!-- END Page Title -->
            	<!-- BEGIN Breadcrumb -->
            	<div id="breadcrumbs">
               		<ul class="breadcrumb">
                  		<li>
                     		<i class="fa fa-home"></i>
                     		<a href="<?php echo base_url()?>">Home</a>
                     		<span class="divider"><i class="fa fa-angle-right"></i></span>
                  		</li>
                  		<li class="active">View Meal</li>
               		</ul>
            	</div>
            	<!-- END Breadcrumb -->
               <div class="row">

               </div>
            	<!-- BEGIN Main Content -->
            	<div class="row">
                  <!--<div class="col-md-12 text-right">-->
                  <!--   <a href="<?php //echo base_url('admin/view-products');?>"><button type="submit" class="btn btn-black"><i class="fa fa-arrow-left"></i> Back To Products </button></a>-->
                  <!--   <br><br>-->
                  <!--</div>-->
               		<div class="col-md-12">
                  		<div class="box">
                     		<div class="box-title">
                        		<h3><i class="fa fa-file"></i> View Meal</h3>
                        		<div class="box-tool">
                           			<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                           			<a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        		</div>
                     		</div>
                     		<div class="box-content">
                        		<div class="row">
                           			<div class="col-md-3">
                           				<?php 
                           				if($product_select['image'])
                                       {
                                          $images=explode(',',$product_select['image']);
                                          foreach($images as $value)
                                          {
                                             $path=base_url('assets/images/meal/').$value;
                                          ?>
                                          <img class="img-responsive img-thumbnail" src="<?php echo $path;?>" alt="Product picture" style="height:200px;"/><br><br>
                                       <?php 
                                          }
                                          //$path=base_url('assets/images/product/').$images['0'];
                                       }
                                       else
                                       {
                                          $path="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
                                          ?>
                                       <img class="img-responsive img-thumbnail" src="<?php echo $path;?>" alt="Product picture" />
                                       <?php 

                                       }
                                    ?>
                              			<br/><br/>
                           			</div>
                           			<div class="col-md-9 user-profile-info">
                           			<?php $venderID=$this->db->query("select * from tbl_vender_login where venderID='$product_select[venderID]' and status='1'");
                                    $vender=$venderID->row_array();
                                    
                           				$categoryID=$this->db->query("select * from tbl_category where categoryID='$product_select[categoryID]'");
                           				$category=$categoryID->row_array();?>
                              			<p><span>Category:</span> <?php echo $category['category'];?></p>
                              			<p><span>Meal:</span> <?php echo $product_select['title'];?></p>
                                       <p><span>Price:</span> <?php echo '$'.$product_select['price'];?></p>
                              			<p><span>Description:</span> <?php echo $product_select['product_description'];?></p>
                           			</div>
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
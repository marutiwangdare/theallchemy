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
                  <h1><i class="fa fa-file-o"></i> Contact Info</h1>
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
                  <li class="active">Contact Info</li>
               </ul>
            </div>
            <!-- END Breadcrumb -->
            <!-- BEGIN Main Content -->
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Contact Info</h3>
                        <div class="box-tool">
                           <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                           <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                     </div>
                     <div class="box-content">
                        <form action="<?php echo base_url('admin/contact-update');?>" class="form-horizontal" method="post">
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Phone Number: </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <input type="text" class="form-control" name="phone" value="<?php echo $select['phone'];?>" required="" onkeypress="return numberOnly(this, event)"/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Email: </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <input type="email" class="form-control" name="email" value="<?php echo $select['email'];?>" required="" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Address: </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <textarea class="form-control ckeditor" name="address" rows="3" required=""><?php echo $select['address'];?></textarea>
                              </div>
                           </div>
                         <!---  <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Opening Hours: </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <textarea class="form-control ckeditor" name="opening_hour" rows="3" required=""><?php echo $select['opening_hour'];?></textarea>
                              </div>
                           </div>--->
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
   </body>
</html>
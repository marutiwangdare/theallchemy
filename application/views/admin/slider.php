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
                  <h1><i class="fa fa-file-o"></i> Slider</h1>
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
                  <li class="active">Slider</li>
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
                        <h3><i class="fa fa-bars"></i> Slider</h3>
                        <div class="box-tool">
                           <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                           <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                     </div>
                     <div class="box-content">
                        <form action="<?php if(!empty($slider_select['sliderID'])){ echo base_url('admin/slider-update');} else{ echo base_url('admin/slider-insert');} ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Heading: </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <input type="text" class="form-control" name="heading" value="<?php if(!empty($slider_select['sliderID'])){ echo $slider_select['heading'];}?>" required="" />
                              </div>
                           </div>
                         <!---  <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Description: </label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <textarea class="form-control ckeditor" name="content" rows="3" required=""><?php if(!empty($slider_select['sliderID'])){ echo $slider_select['description'];}?></textarea>
                              </div>
                           </div>--->
                           <div class="form-group">
                              <label class="col-sm-3 col-lg-2 control-label">Image</label>
                              <div class="col-sm-9 col-lg-10 controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                       <?php if(!empty($slider_select['sliderID']))
                                       {
                                          if($slider_select['banner'])
                                          {
                                             $path=base_url('assets/img/slider/').$slider_select['banner'];
                                          }
                                       }
                                       else
                                       {
                                          $path="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
                                       }?>
                                       <img src="<?php echo $path;?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="file-input" name="image"/></span>
                                       <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div>
                                 <span class="label label-important">NOTE!</span>
                                 <span>800*800 image size</span>
                              </div>
                           </div>
                           <input type="hidden" class="form-control" name="sliderID" value="<?php if(!empty($slider_select['sliderID'])){ echo $slider_select['sliderID'];}?>"/>
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
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-title">
                        <h3><i class="fa fa-table"></i> View Slider</h3>
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
                                    <th>Title</th>
                                  <!----  <th>Description</th>-->
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                 $count=1;
                                 foreach($select_all as $select_query)
                                 {
                                 ?>
                                 <tr class="table-flag-blue">
                                    <td><?php echo $count;?></td>
                                    <td>
                                    <?php 
                                    if(!empty($select_query['banner']))
                                    {
                                       $path=base_url()."assets/img/slider/".$select_query['banner'];
                                    ?>
                                    <img src="<?php echo $path;?>" style="height:100px;"></td>
                                 <?php } ?>
                                    <td><?php echo $select_query['heading'];?></td>
                                  <!----  <td><?php echo $select_query['description'];?></td>--->
                                     <?php $data = urlencode(base64_encode($select_query['sliderID'])); ?>
                                    
                                    <td width="150px"><a class="btn btn-danger show-tooltip text-white" title="Edit" href="<?php echo base_url('admin/slider/').$data;?>"><i class="fa fa-edit"></i></a>
                                       &nbsp;&nbsp;<a class="btn btn-black show-tooltip" title="Delete" href="<?php echo base_url('admin/slider-delete/').$data;?>"><i class="fa fa-trash-o"></i></a></td>
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
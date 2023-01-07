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
                  <h1><i class="fa fa-file-o"></i> View Contact Queries</h1>
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
                  <li class="active">View Contact Queries</li>
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
                        <h3><i class="fa fa-table"></i> View Contact Queries</h3>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subject </th>
                                    <th>Message</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                 $count=1;
                                 foreach($select as $select_query)
                                 {
                                 ?>
                                 <tr class="table-flag-blue">
                                    <td><?php echo $count;?></td>
                                    <td><?php echo $select_query['name'];?></td>
                                    <td><?php echo $select_query['email'];?></td>
                                    <td><?php echo $select_query['phone'];?></td>
                                    <td><?php echo $select_query['subject'];?></td>
                                    <td><?php echo $select_query['message'];?></td>
                                    <td>
                                       <?php $data = urlencode(base64_encode($select_query['sno'])); ?>
                                       <a class="btn btn-warning show-tooltip" title="Delete" href="<?php echo base_url('admin/contact-query-delete/').$data;?>" onclick="return confirm('Are you sure to delete this item?')"><i class="fa fa-trash-o"></i></a>
                                    </td>
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
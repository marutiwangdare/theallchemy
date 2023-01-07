<div id="navbar" class="navbar " style="background-color:#28a745
;">
   <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
   <span class="fa fa-bars"></span>
   </button>
   <a class="navbar-brand" href="#">
   <small>
   <i class="fa fa-desktop"></i> The Allchemy
   </small>
   </a>
   <!-- BEGIN Navbar Buttons -->
   <ul class="nav flaty-nav pull-right">
      <!--  <li class="hidden-xs">
          <a href="<?php echo base_url('admin/view-new-sellers');?>">
               <i class="fa fa-bell"></i>
               <span class="badge badge-important"><?php echo $select_today_vender;?></span>
          </a>
      </li> -->
      <li class="user-profile">
         <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
         <?php if(isset($_SESSION['username']))
         {
         	$select_query=$this->db->query("select * from tbl_admin where email='$_SESSION[username]' and admin_password='$_SESSION[password]'");
         	$result_query=$select_query->row_array();
         }?>
         <span class="hhh" id="user_info">
         <?php echo $result_query['admin_name'];?>
         </span>
         <i class="fa fa-caret-down"></i>
         </a>
         <!-- BEGIN User Dropdown -->
         <ul class="dropdown-menu dropdown-navbar" id="user_menu">
            <!-- <li><a href="<?php //echo base_url('admin/preview-fee');?>"><i class="fa fa-money"></i>Preview Fee</a></li>
            <li><a href="<?php //echo base_url('admin/change-password');?>"><i class="fa fa-lock"></i>Change Password</a></li> -->
            <li><a href="<?php echo base_url('admin/session-unset');?>"><i class="fa fa-clock-o"></i>Logout</a></li>
         </ul>
         <!-- BEGIN User Dropdown -->
      </li>
      <!-- END Button User -->
   </ul>
   <!-- END Navbar Buttons -->
</div>
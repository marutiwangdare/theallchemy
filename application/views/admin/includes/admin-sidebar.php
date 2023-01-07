<div id="sidebar" class="navbar-collapse collapse" style="background-color:green;">
  <?php $uri_query=$this->uri->segment(2);?>
   <!-- BEGIN Navlist -->
   <ul class="nav nav-list">
      <li class="<?php if($uri_query=='dashboard'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/dashboard');?>">
         <i class="fa fa-dashboard"></i>
         <span>Dashboard</span>
         </a>
      </li>
	   <li class="<?php if($uri_query=='contact'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/contact');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Contact Info</span>
         </a>
      </li>
     <li class="<?php if($uri_query=='category'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/category');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Category</span>
         </a>
      </li> 
	  <li class="<?php if($uri_query=='cupon'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/cupon');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Create Cupon</span>
         </a>
      </li> 
	  
   
	  
    <li class="<?php if($uri_query=='product'||$uri_query=='view-products'||$uri_query=='view-product'){echo 'active';}?>">
         <a href="#" class="dropdown-toggle">
           <i class="fa fa-check-square-o"></i>
            <span>Products</span>
            <b class="arrow fa fa-angle-right"></b>
         </a>

         <!-- BEGIN Submenu -->
       <ul class="submenu">
            <li class="<?php if($uri_query=='product'){echo 'active';}?>"><a href="<?php echo base_url('admin/product');?>">Add Product</a></li>
            <li class="<?php if($uri_query=='view-products'){echo 'active';}?>"><a href="<?php echo base_url('admin/view-products');?>">View Products</a></li>
         </ul>
      <!-- END Submenu -->
      </li>
      
      
      <!------todays deal------>
      
    <li class="<?php if($uri_query=='deal'||$uri_query=='view-deal'||$uri_query=='view-deal'){echo 'active';}?>">
         <a href="#" class="dropdown-toggle">
           <i class="fa fa-check-square-o"></i>
            <span>Todays Deal</span>
            <b class="arrow fa fa-angle-right"></b>
         </a>

         <!-- BEGIN Submenu -->
       <ul class="submenu">
            <li class="<?php if($uri_query=='deal'){echo 'active';}?>"><a href="<?php echo base_url('admin/deal');?>">Add Deal Product</a></li>
            <li class="<?php if($uri_query=='view-deal'){echo 'active';}?>"><a href="<?php echo base_url('admin/view-deal');?>">View Deal Products</a></li>
         </ul>
      <!-- END Submenu -->
      </li>
	   
	   
	   
     <li class="<?php if($uri_query=='view-users'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/view-users');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Users</span>
         </a>
      </li> 
      
      
     <li class="<?php if($uri_query=='received-orders'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/received-orders');?>">
         <i class="fa fa-check-square-o"></i>
         <span>View Orders</span>
         </a>
      </li> 
	   
      <li class="<?php if($uri_query=='view-contact-queries'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/view-contact-queries');?>">
         <i class="fa fa-check-square-o"></i>
         <span>View Contact Queries</span>
         </a>
      </li>
      
      <li class="<?php if($uri_query=='webreview'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/webreview');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Website Reviews</span>
         </a>
      </li> 
	  
	  <li class="<?php if($uri_query=='newsletter'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/newsletter');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Website Newsletter</span>
         </a>
      </li> 
	  
   
      
      <!-------end todays deal------>
	   
	   
	 
    <!----  <li class="<?php if($uri_query=='reviews'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/reviews');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Reviews</span>
         </a>
      </li>  
	  
	  
	  
	  
	  
      <li class="<?php if($uri_query=='slider'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/slider');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Slider</span>
         </a>
      </li>  
	  
<!----	  <li class="<?php if($uri_query=='work'){echo 'active';}?>">
         <a href="<?php echo base_url('admin/work');?>">
         <i class="fa fa-check-square-o"></i>
         <span>Our Work</span>
         </a>
      </li>  --->
	  
	  
	  
   </ul>
   <!-- END Navlist -->
   <!-- BEGIN Sidebar Collapse Button -->
   <div id="sidebar-collapse" class="visible-lg">
      <i class="fa fa-angle-double-left"></i>
   </div>
   <!-- END Sidebar Collapse Button -->
</div>

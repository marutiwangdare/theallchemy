<!DOCTYPE html>
<html>
   <head>
      <?php $this->load->view('admin/includes/admin-meta.php');?>
   </head>
   <body class="skin-orange">
      <!-- BEGIN Navbar -->
      <?php $this->load->view('admin/includes/admin-navbar.php');?>
      <!-- END Navbar -->
      <!-- BEGIN Container -->
      <div class="container sidebar-black" id="main-container">
         <!-- BEGIN Sidebar -->
         <?php $this->load->view('admin/includes/admin-sidebar.php');?>
         <!-- END Sidebar -->
         <!-- BEGIN Content -->
        	 <div id="main-content">
            <!-- BEGIN Page Title -->
            <div class="page-title">
               <div>
                  <h1><i class="fa fa-file-o"></i> Dashboard</h1>
                  <h4>Overview, stats, chat and more</h4>
               </div>
            </div>
            <!-- END Page Title -->
            <!-- BEGIN Breadcrumb -->
            <div id="breadcrumbs">
               <ul class="breadcrumb">
                  <li class="active"><i class="fa fa-home"></i> Home</li>
               </ul>
            </div>
            <!-- END Breadcrumb -->
            <!-- BEGIN Tiles -->
            <div class="row">
               <div class="col-md-7">
                  <div class="row">
                     <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="tile">
                                 <p class="title">FLATY - Responsive Admin Template</p>
                                 <p>Based on twitter bootstrap, 9 predefined color, clean and minimal design, easy to change and etc.</p>
                                 <div class="img img-bottom">
                                    <i class="fa fa-desktop"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 tile-active">
                              <a class="tile tile-pink" data-stop="3000" href="../../codecanyon.net/item/flaty-wp-premium-wordpress-flat-admin-template/5329999.html">
                                 <div class="img img-center">
                                    <img src="img/demo/wp-logo.png" />
                                 </div>
                                 <p class="title text-center">Visit FLATY wp</p>
                              </a>
                              <a class="tile tile-orange" href="../../codecanyon.net/item/flaty-wp-premium-wordpress-flat-admin-template/5329999.html">
                                 <p>FLATY wp is new custom theme designed for the Wordpress admin.</p>
                              </a>
                           </div>
                           <div class="col-md-6">
                              <a class="tile tile-red" href="../../themeforest.net/item/flaty-responsive-admin-template/5247864.html">
                                 <div class="img img-center">
                                    <i class="fa fa-shopping-cart"></i>
                                 </div>
                                 <p class="title text-center">Buy FLATY</p>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="row">
                           <div class="col-md-12 tile-active">
                              <div class="tile tile-magenta">
                                 <div class="img img-center">
                                    <i class="fa fa-desktop"></i>
                                 </div>
                                 <p class="title text-center">FLATY Admin</p>
                              </div>
                              <div class="tile tile-blue">
                                 <p class="title">FLATY Admin</p>
                                 <p>FLATY is the new premium and fully responsive admin dashboard template.</p>
                                 <div class="img img-bottom">
                                    <i class="fa fa-desktop"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="tile tile-green">
                                 <div class="img">
                                    <i class="fa fa-copy"></i>
                                 </div>
                                 <div class="content">
                                    <p class="big">+30</p>
                                    <p class="title">Ready Page</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="tile tile-orange">
                           <div class="img">
                              <i class="fa fa-comments"></i>
                           </div>
                           <div class="content">
                              <p class="big">128</p>
                              <p class="title">Comments</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="tile tile-dark-blue">
                           <div class="img">
                              <i class="fa fa-download"></i>
                           </div>
                           <div class="content">
                              <p class="big">+160</p>
                              <p class="title">Downloads</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 tile-active">
                        <div class="tile tile-img" data-stop="3500" style="background-image: url(img/demo/gallery/5.jpg);">
                           <p class="title">Gallery</p>
                        </div>
                        <a class="tile tile-lime" data-stop="5000" href="gallery.html">
                           <p class="title">Gallery page</p>
                           <p>Click on this tile block to see our amazing gallery page. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                           <div class="img img-bottom">
                              <i class="fa fa-picture-o"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END Tiles -->
            <?php $this->load->view('admin/includes/admin-footer.php');?>
         </div>
         <!-- END Content -->
      </div>
      <!-- END Container -->
      <!--basic scripts-->
      <?php $this->load->view('admin/includes/admin-script.php');?>
   </body>
</html>
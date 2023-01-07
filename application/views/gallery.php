<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
       <?php $this->load->view('includes/meta');?>
       
   
    <link rel="icon" href="upload/cropped-TG-Thumb-32x32.png" sizes="32x32" />
    <link rel="icon" href="upload/cropped-TG-Thumb-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="upload/cropped-TG-Thumb-180x180.png" />
    <meta name="msapplication-TileImage" content="upload/cropped-TG-Thumb-270x270.html" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
.button-group .btn {
    height:80px !important;
    width:80px !important;
}
.mitem {
    background-image:url(assets/images/menu/dbg.jpeg);
    padding-bottom:20px!important;
}
</style>
<style>
.f_red {
color:red;
}
.b_red {
background-color:red;
}
.mimg {
    
    background-color:#fff7e6;
    background-image:url(assets/images/dbg.jpeg);
    object-fit:cover;
}

  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  .bd-example
  {
	  background-image:url("assets/newslider/backgroundimage1.jpg");
		background-position: center; /* Center the image */
		background-repeat: no-repeat; /* Do not repeat the image */
		background-size: cover; /* Resize the background image to cover the entire container */
		width: 100%;
        height: 750px;
  }
  .dishimg
  {
     width:80% !important;
  }
  .slidemargin
  {
     margin-top:100px;
  }
  
   .text-dish
  {
      padding:0px !important;
      font-size:20px;
      color:#fff;
  }
   .text-head
  {
      padding-top:50px !important;
      padding-left:10px !important;
      font-size:24px;
      color:#fff;
  }
  
  
  @media (max-width:756px)  {
    .bd-example
  {
      	  background-image:url("assets/newslider/backgroundimage1.jpg");
		background-position: center; /* Center the image */
		background-repeat: no-repeat; /* Do not repeat the image */
		background-size: cover; /* Resize the background image to cover the entire container */
		width: 100%;
        height: 220px !important;
  }
  .dishimg
  {
     width:250px !important;
     margin-left:15px;
  }
  .slidemargin
  {
     margin-top:25px !important;
  }
  .text-dish
  {
      padding:0px !important;
      font-size:8px;
      color:#fff;
  }
   .text-head
  {
      padding-bottom:0px !important;
      padding-top:15px !important;
      padding-left:0px !important;
      font-size:12px;
      color:#fff;
  }
  
  .custom-css-style .elementor-element.elementor-element-e7347eb>.elementor-widget-container {
  margin:0px !important;
  }
  
  }
  
  /* 3 */
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    left: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    left: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
}

</style>
    </head>
    
            <?php $this->load->view('includes/tag');?>

    <body>
        <?php $this->load->view('includes/header');?>
<!--Header area end here-->
        <!-- Banner Section Start Here -->
        <div class="inner-banner">
            <img src="https://img.lovepik.com/photo/40159/7899.jpg_wh860.jpg" alt="" style="height:250px;">
            <div class="title">
                <h1>Gallery</h1>
                <span><a href="<?php echo base_url();?>">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i><span class="last"> Gallery</span></span>
            </div>    
        </div>
        <!-- Banner Section end Here -->
  <!-- Menu Page Start Here -->
        <div class="menus-page-area menus-area spc-large" style="background-color:white;">
            <div class="container">
                <!-----slider images---->
                                                                                          
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="1500">
    <div class="carousel-inner">
    
    
    
      <div class="carousel-item active">
        
    	<div class="row slidemargin">
    	            <div class="col-1"></div>

 		<div class="col-4 text-right"><img src="assets/images/newgallery/1.png" alt="..." class="dishimg"></div>
        <div class="col-2"></div>
        <div class="col-1"></div>
        <div class="col-3">
            
            
              <h5 class="text-head">CHEESE & BACON FRY

</h5>
            <!--- <p class="text-dish">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--->
            </div>
        
        </div>
      </div>
      
      
      <div class="carousel-item" >
 
    	<div class="row slidemargin">
            	            <div class="col-1"></div>

 		<div class="col-4"><img src="assets/images/newgallery/2.png" class="dishimg" alt="..." ></div>
        <div class="col-2"></div>
        <div class="col-1"></div>
        <div class="col-3">
            
            
              <h5 class="text-head">FRIES & CHICKEN STRIPS

</h5>
            <!--- <p class="text-dish">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--->
            </div>
        
        </div>
        
      </div>
      <div class="carousel-item" >
    	<div class="row slidemargin">
    	        	            <div class="col-1"></div>

 		<div class="col-4 col-sm-4 text-right"><img src="assets/images/newgallery/3.png" alt="..." style=" text-align:center;"></div>
        <div class="col-2"></div>
        <div class="col-1"></div>
        <div class="col-3">
            
              <h5 class="text-head">MOZZARELLA STICKS

</h5>
             <!--- <p class="text-dish">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--->
            </div>
        
        </div>
      </div>
      
      
      
    </div>
  </div>
</div>
                                                                          
       
                
                
            </div>    
        </div>

        <!-- Menu Page Start Here -->
      <!-------    <div class="about-area spc-equal" style="background-image:url(https://th.bing.com/th/id/OIP.phcXpQfrwI83mBcfrqshkgHaEK?pid=ImgDet&rs=1);;">

            <div class="container">

            <div class="row" style="text-align:center;">
<h1 class="hmenu">OUR MENU</h1>
<div class="col-xs-6 mclient"><img src="assets/m1.png" style="margin-top:10px !important;">
<h2 style="color:white;" class="hp">SUPREME CHEESESTEAK
</h2></div>
<div class="col-xs-6 mclient"><img src="assets/m2.png" style="margin-top:10px !important;"><h2 style="color:white;" class="hp">ONION RINGS
</h2></div>




            </div> 
            
            <div class="row" style="text-align:center;">
                <div class="col-xs-6 mclient"><img src="assets/m3.png" style="margin-top:10px !important;">
<h2 style="color:white;" class="hp">VEGETARIAL CHEESESTEAK
</h2></div>
<div class="col-xs-6 mclient"><img src="assets/m4.png" style="margin-top:10px !important;"><h2 style="color:white;" class="hp">CHEESECAKE
</h2></div>
                </div>

            </div>       

        </div>

        <!-- Start scrollUp  -->
        <div id="return-to-top">
            <span>Top</span>
        </div>
        <!-- End scrollUp  -->

        <!-- Brand Logo area  -->
   <!---     <div class="brand-logo-area">
            <div class="container">
                <div id="logo-slider" class="owl-carousel">
                    <div class="text-center item">
                        <a href="#"> <img src="images/brand/1.png" alt=""></a>
                    </div>
                    <div class="text-center item">
                        <a href="#"><img src="images/brand/2.png" alt=""></a>
                    </div>
                    <div class="text-center item">
                        <a href="#"><img src="images/brand/3.png" alt=""></a>
                    </div>
                    <div class="text-center item">
                        <a href="#"><img src="images/brand/4.png" alt=""></a>
                    </div>
                    <div class="text-center item">
                        <a href="#"> <img src="images/brand/1.png" alt=""></a>
                    </div>
                    <div class="text-center item">
                        <a href="#"><img src="images/brand/2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div> ---->
        <?php $this->load->view('includes/footer');?>

    </body>

</html>

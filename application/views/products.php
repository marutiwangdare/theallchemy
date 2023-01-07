<!doctype html>
<html class="no-js" lang="">
    
<head>
                  <?php $this->load->view('includes/meta');?>

       	<style>
       .bannerimg {
           
           
           width:100%!important;
           background-repeat:no-repeat!important;
       }	
       	.exclusive-item {
       	    
       	    background-color:#fffde6;
       	    
       	}
       	.exclusive-item  img {
       	    
       	    padding-top:2%;
       	    padding-bottom:2%;
       	    padding-right:3%;
       	    padding-left:3%;

       	    
       	}
       	
       	.product-card {
       	    
       	    padding:2%!important;
       	}
		#sticky-header .dropdown .submenu ul li a {
color:black!important;
}



.header-top-area ul li {
color:black !important;
font-size:16px !important;
}

.header-top-area ul li span i  {
color:white !important;
font-size:16px !important;
}


#sticky-header {
background-color:black !important;
}
.main-header ul li a {
color:white !important;
}
.ftext {
padding-top:20px;
color:#ec1c4e;
}
.features-icon {
text-align:center;
}
p {
font-size:16px;
}

.exclusive-item-thumb img {
    height:300px;
    width:100%;
    object-fit:fill!important;
    
}
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {

    .exclusive-item-thumb img {
    height:180px;
    width:100%;
        object-fit:fill!important;

    
}
    
}
		</style>
		
    </head>
            <?php $this->load->view('includes/tag');?>

    <body>


       

        <!-- preloader  -->
                <?php $this->load->view('includes/preloader');?>
    <!-- preloader end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
                 <?php $this->load->view('includes/header');?>

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo base_url();?>assets/images/breadcrumb.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Shop Now</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Shop Now</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
            <section class="shop-area gray-bg pt-100 pb-100"  style="background-color:#5e081c;">
                <div class="custom-container-two">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12">
                            
                            <div class="row" style="padding:4%;">
                                
      <?php foreach($select_products as $fetch_products)
                                {?>
                                <!---Product 1--->
                                <div class="col-6 col-xs-6 product-card col-md-3">
                                    <div class="exclusive-item exclusive-item-three text-center mb-50" style="padding:2%;">
                                        <div class="exclusive-item-thumb">
                                            <br>
                                            <a href="<?php echo base_url('products-detail/').$fetch_products['web_slug'];?>">
                                                <img src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_products['image'];?>" alt="">
                                                <img class="overlay-product-thumb" src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_products['image'];?>" alt="">
                                            </a>
                                        </div>
                                        <div class="exclusive-item-content">
                                            <h5><a href="<?php echo base_url('products-detail/').$fetch_products['web_slug'];?>" ><?php echo $fetch_products['title'];?></a></h5>
                                            <div class="exclusive--item--price">
                                              <!---  <del class="old-price">Rs. <?php// echo $fetch_products['price'];?></del>--->
                                                <span class="new-price" style="color:#5e081c;">Rs. <?php echo $fetch_products['price'];?></span>
                                            </div>
                                            
                                            
                                            
                                         <!---   <ul class="" style="background-color:black">
                                                                                    <a href="#" class="to-cart" style="color:white;padding:3%;">add to cart <i class="fas fa-cart-plus"></i></a>

                                            </ul>--->
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!------->
                                <?php }?>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

            <!-- limited-offer-area -->
                 <section class="" >
            
                        <img src="<?php echo base_url();?>/assets/images/brn.png" style="width:100%;">
                        
            </section>
           
            <!-- limited-offer-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        
        <!-- footer-area -->
              <?php $this->load->view('includes/footer');?>

        <!-- footer-area-end -->
        <!-- footer-area-end -->





		<!-- JS here -->
		
				           <?php $this->load->view('includes/script');?>

		
		
        <script>
        setTimeout(function(){        
    $('#preloader').fadeOut();
    $('.ctn-preloader').delay(150).fadeOut('slow'); 
}, 5000);
        </script>
    </body>

</html>

<!doctype html>
<html class="no-js" lang="">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

                   <?php $this->load->view('includes/meta');?>
<style>
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
        
        <!-- header-area -->
                      <?php $this->load->view('includes/header');?>

        <!-- main-area -->
        <main>

       
            <!-- shop-area -->
            <section class=" " style="padding-top:0% !important;">
                
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <aside class="shop-sidebar shop-right-sidebar">
                                
                                
                                
                                
                                <div class="widget shop-widget mb-30">
                                    
                                    
                                        <div class="sidebar-product-list">
                                            <ul>
                                                
                                                   <?php 
                                foreach($select_category as $our_category)
                                {?>
                                 
                                                <li style="background-color:#fffde6;padding:3%;">
                                                    <div class="sidebar-product-thumb">
                                                        <a href="<?php echo base_url('products/').$our_category['categoryID'];?>"><img src="assets/images/category/<?php echo $our_category['category_image'];?>" alt="" style="height:100px;width:auto;"></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                    
                                                        <h5><a href="<?php echo base_url('products/').$our_category['categoryID'];?>"><?php echo $our_category['category'];?></a></h5>
                                                        <span><?php echo $our_category['cat_description'];?></span>
                                                        
                                            
                                                    </div>
                                                    
                                                </li>
                                                
                                                     
                                <?php }
                                ?>
                                            </ul>
                                        </div>
                                    
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

            <!-- limited-offer-area -->
            
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

    </body>

</html>

<!doctype html>
<html class="no-js" lang="en-US">
    
<head>
    <?php $this->load->view('includes/meta');?>
        <meta charset="utf-8">
		

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
		
		.most-popular-viewed-item{
		background-color:white !important;
		}
		.most--popular--item--thumb img {
		max-height:350px;
		width:100%;
		object-fit:cover;
		}
		.phead {
		color:white !important:
		}
		.prod_img {
		max-height:350px;
		
		
		}
		.cat-menu-img img {
		height:50px;
		width:50px;
		}
		.best-cat-thumb img {
		height:220px;
		width:auto;
		background-color:pink;
		
		}
		
		.most--popular--item--thumb img {
		    
		    
		    
		}
		@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
		    .best-cat-thumb img {
		height:250px;
		width:auto;
		background-color:pink;
		
		}
		}
		</style>
		
    </head>
    <body>


        <!-- preloader  -->
    
        <!-- preloader  -->
        
        <!-- preloader end -->
            <?php $this->load->view('includes/preloader');?>

        <!-- preloader end -->


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->
                <?php $this->load->view('includes/topheader');?>

        <!-- header-area -->
        <header class="header-style-two">

            <!-- header-top -->
            
            <!-- header-top-end -->

            <!-- menu-area -->
            <div id="sticky-header" class="main-header menu-area" style="background-color:#fffde6;">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="<?php echo base_url();?>"><img src="assets/img/logo/logo.png" alt="Logo" style="height:70px;width:auto;"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
										
										<li>
								<!-----language---->
							<!--	<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>--->

								<!------end language translator-------></li>
										
										
                                            <li class="active "><a href="<?php echo base_url()?>">Home</a>
                                                
                                            </li>
                                            <li><a href="<?php echo base_url('about');?>">About Us</a></li>
                                            
                                            <li class="dropdown"><a href="#">SHOP</a>
                                                <ul class="submenu">
                                                    <?php 
                                foreach($select_category as $our_category)
                                {?>  <li><a href="<?php echo base_url('products/').$our_category['categoryID'];?>"><?php echo $our_category['category'];?></a></li>
                                
                                <?php }?>
                                
                                                                                                      
                                                    </ul>
                                            </li>
                                            <!---<li><a href="#">SPECIAL</a></li>--->
                                            <li><a href="<?php echo base_url('contact');?>">contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <?php 
                    if(isset($_SESSION['useremail']))
                  {
                      $cart = $this->db->query("select * from tbl_cart where userID='".$_SESSION['userID']."'");
                      $cart_count = $cart->num_rows();
                  ?>
                                            <li class="header-shop-cart"><a href="<?php echo base_url('cart'); ?>"><i class="flaticon-shopping-bag" id='lblCartCount'></i><span class="cart-count"><?php echo $cart_count; ?></span></a>
                                               <span class="cart-total-price" style="color:white;"></span>
                                                
                                            </li>
                                                                <?php }else{?>
                                                                
                                            <li class="header-shop-cart"><a href="<?php echo base_url('user-login');?>" id='lblCartCount'><i class="flaticon-shopping-bag"></i><span class="cart-count">0</span></a>
                                               <span class="cart-total-price" style="color:white;"></span>
                                                
                                            </li>
                      <?php } ?>

                                        </ul>
                                     </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="<?php echo base_url();?>"><img src="assets/img/logo/logon.jpeg" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu-area-end -->

            <!-- header-search-area -->
            <div class="header-search-area d-none d-md-block">
                <div class="custom-container-two">
                    <div class="row align-items-center" style="background-color:black;">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="header-category d-none d-lg-block">
                                <a href="#" class="cat-toggle"><i class="flaticon-menu"></i>ALL DEPARTMENT</a>
                                <ul class="category-menu">
                                   
                                
                                
                                
                                    
                                    
                                    
                                     <?php 
                                foreach($select_categorys as $our_category)
                                {?>
                                    <li class="has-dropdown"><a href="<?php echo base_url('products/').$our_category['categoryID'];?>"><div class="cat-menu-img"><img src="assets/images/category/<?php echo $our_category['category_image'];?>" alt=""></div><?php echo $our_category['category'];?></a>
                                      </li>
                                      
                                <?php }
                                ?>
                                      
                                    <li class="more_categories">More Categories<i class="fas fa-angle-down"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8" >
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Search for your item's type.....">
                                        <select class="custom-select">
                                            <option selected="">All Categories</option>
                                            <option>Women's Clothing</option>
                                            <option>Men's Clothing</option>
                                            <option>Computer & Office</option>
                                            <option>Consumer Electronics</option>
                                            <option>Home & Garden</option>
                                            <option>Luggage & Bags</option>
                                            <option>Shoes</option>
                                            <option>Mother & Kids</option>
                                            <option>Beauty & Health</option>
                                            <option>Home Appliances</option>
                                            <option>Food</option>
                                            <option>Underwear & Sleepwear</option>
                                            <option>In All Categories</option>
                                        </select>
                                        <button><i class="flaticon-magnifying-glass-1"></i></button>
                                    </form>
                                </div>
                                <div class="header-free-shopping">
                                    <p style="color:white;">Free Shipping on Orders <span style="color:#ec1c4e"> Rs. 599</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-area-end -->

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- slider-area -->
          <section class="second-slider-area" data-background="assets/img/slider/slider_bg.jpg">
                <div class="custom-container-two">
                    <div class="row justify-content-end">
                        <div class="col-xl-10">
                            <div class="slider-active">
                                <div class="single-slider slider-bg" data-background="assets/img/slider/s_slider_bg01.jpg">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s">top deal !</h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s">Smart cream</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">Get up to <span>50%</span> off Today Only</p>
                                        <a href="shop-left-sidebar.html" class="btn yellow-btn" data-animation="fadeInUp" data-delay="1s">Shop Now</a>
                                    </div>
                                </div>
                                <div class="single-slider slider-bg" data-background="assets/img/slider/s_slider_bg02.jpg">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s">top deal !</h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s">Top headphone</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">Get up to <span>50%</span> off Today Only</p>
                                        <a href="shop-left-sidebar.html" class="btn yellow-btn" data-animation="fadeInUp" data-delay="1s">Shop Now</a>
                                    </div>
                                </div>
                                <div class="single-slider slider-bg" data-background="assets/img/slider/s_slider_bg03.jpg">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s">top deal !</h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s">Smart Watch</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">Get up to <span>50%</span> off Today Only</p>
                                        <a href="shop-left-sidebar.html" class="btn yellow-btn" data-animation="fadeInUp" data-delay="1s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              <!-- slider-area-end -->

            <!-- top-cat-banner -->
            <div class="top-cat-banner-area">
                <div class="custom-container-two">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="top-cat-banner-item mt-30">
                                <a href="shop-left-sidebar.html"><img src="assets/img/images/Shelf.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top-cat-banner-item mt-30">
                                <a href="shop-left-sidebar.html"><img src="assets/img/images/Gift.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top-cat-banner-end -->
   
					    
					    
					      <section class="exclusive-collection pt-100 pb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <span class="sub-title">exclusive collection</span>
                                <h2 class="title">best selling products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row exclusive-active">
                    
                      
                      
					<?php foreach($select_product as $fetch_product)
                                {?>
                                <div class="col-6 col-xs-6  col-md-3 grid-item grid-sizer cat-one cat-two">
                            <div class="exclusive-item exclusive-item-two mb-40">
                                <div class="exclusive-item-thumb">
                                    <a href="<?php echo base_url('products-detail/').$fetch_product['productID'];?>">
                                        <img src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?>" alt="" class="prod_img">
                                        <img class="overlay-product-thumb" src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?>" alt="">
                                    </a>
                                    <span class="sd-meta">New!</span>
                                    <a href="<?php echo base_url('products-detail/').$fetch_product['productID'];?>" class="to-cart"> <i class="fas fa-cart-plus"></i></a>
                                </div>
                                <div class="exclusive-item-content">
                                    
                                    <div class="exclusive--content--bottom">
                                        <h5><a href="<?php echo base_url('products-detail/').$fetch_product['productID'];?>"><?php echo $fetch_product['title'];?></a></h5>
                                        <span>Rs. <?php echo $fetch_product['price'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                        
                    </div>
                </div>
            </section>
            <!-- exclusive-collection-area-end -->

<!----deal of the day--->

 <section class="deal-of-the-day theme-bg pt-100 pb-70" style="background-color:#ec1c4e;">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="custom-col-4">
                            <div class="deal-of-day-banner mb-30">
                                <a href="#"><img src="assets/img/product/b2.jpeg" alt=""></a>
                            </div>
                        </div>
                        <div class="custom-col-8">
                            <div class="deal-day-top">
                                <div class="deal-day-title">
                                    <h4 class="title">Deal Of The Day</h4>
                                </div>
                                <div class="view-all-deal">
                                    <a href="#" style="color:white;"><i class="flaticon-scroll"></i> View All</a>
                                </div>
                            </div>
                            <div class="row deal-day-active">
                                	<?php foreach($select_deal as $fetch_deal)
                                {?>
                                
                                <div class="col-xl-3">
                                    <div class="most-popular-viewed-item mb-30">
                                        <div class="viewed-item-top">
                                            <div class="most--popular--item--thumb mb-20">
                                                <a href="<?php echo base_url('products-detail/').$fetch_deal['productID'];?>"><img src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_deal['image'];?>" alt=""></a>
                                            </div>
                                            <div class="super-deal-content">
                                                <h6><a href="<?php echo base_url('products-detail/').$fetch_deal['productID'];?>"><?php echo $fetch_deal['title'];?></a></h6>
                                                <p>MRP <?php echo $fetch_deal['price'];?></p><p style="color:green;">OFFER PRICE <?php echo $fetch_deal['new_price'];?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           


            <!-- best-cat-area -->
            <section class="best-cat-area" style="background-image:linear-gradient(to right, rgb(277 277 277 / 65%), rgb(277 277 277 / 82%)),url(assets/img/bg/bk.jpg);background-attachment:fixed;">
                <div class="container">
                    <div class="best-cat-border pt-100 pb-45">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title text-center mb-60">
                                    <span class="sub-title">BROWSE CATEGORIES</span>
                                    <h2 class="title">BROWSE best CATEGORIES</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="best-cat-list">
                                    <div class="best-cat-item">
                                        <div class="best-cat-thumb">
                                            <a href="<?php echo base_url('products');?>/16"><img src="assets/images/category/Prayer.png" alt=""></a>
                                        </div>
                                      <!--  <div class="best-cat-content">
                                            <br>
                                            <br>
                                            <h5><a href="<?php echo base_url('products');?>/16">Prayer</a></h5>
                                        </div>--->
                                    </div>
                                    <div class="best-cat-item">
                                        <div class="best-cat-thumb">
                                            <a href="<?php echo base_url('products');?>/17"><img src="assets/images/category/Toys.png" alt=""></a>
                                        </div>
                                       <!--- <div class="best-cat-content">
                                            <h5><a href="<?php echo base_url('products');?>/17">Toys</a></h5>
                                           
                                        </div>--->
                                    </div>
                                    <div class="best-cat-item">
                                        <div class="best-cat-thumb">
                                            <a href="<?php echo base_url('products');?>/18"><img src="assets/images/category/House.png" alt=""></a>
                                        </div>
                                       <!--- <div class="best-cat-content">
                                            <h5><a href="<?php echo base_url('products');?>/18">House</a></h5>
                                            
                                        </div>--->
                                    </div>
                                    <div class="best-cat-item">
                                        <div class="best-cat-thumb">
                                            <a href="<?php echo base_url('products');?>/19"><img src="assets/images/category/Kitchen.png" alt=""></a>
                                        </div>
                                       <!--- <div class="best-cat-content">
                                            <h5><a href="<?php echo base_url('products');?>/19">Kitchen</a></h5>
                                           
                                        </div>--->
                                    </div>
                                    <div class="best-cat-item">
                                        <div class="best-cat-thumb">
                                            <a href="<?php echo base_url('products');?>/20"><img src="assets/images/category/Accessories.png" alt=""></a>
                                        </div>
                                       <!--- <div class="best-cat-content">
                                            <h5><a href="<?php echo base_url('products');?>/20">Accesories</a></h5>
                                            
                                        </div>--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best-cat-area-end -->

           
            <!-- limited-offer-area -->
            <section class="" data-background="assets/img/bg/b3.png">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <img src="assets/img/bg/b3.png" style="width:100%;">
                        </div>
                        </div>
            </section>
            <!-- limited-offer-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
                <?php $this->load->view('includes/footer');?>

        <!-- footer-area-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="assets/js/vendor/jquery-3.5.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.odometer.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    
    </body>

</html>

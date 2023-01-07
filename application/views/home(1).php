<!doctype html>
<html class="no-js" lang="en-US">
    
<head>
    <?php $this->load->view('includes/meta');?>
        <meta charset="utf-8">
		

      	<style>
      	.catp {
      	    
      	    
      	    font-size:16px;
      	    color:#5e081c;
      	    font-weight:bold;
      	}
      
.yellow-btn {
    color:white!important;
    
}
      	@media screen and (min-width: 1024px) {
      	    .nbtn {
      	        background-color:white!important;
      	        
      	    }
      	    .bottom-right {
  position: absolute;
  bottom: 30%;
  right: 20%;
}
  	.desktop {
      display:block!important;
  }
  .mobile {
      
      display:none!important;
  }
  .bh {
      font-size:40px!important;
      font-family: serif;

  }
}
 
      
      	@media screen and (max-device-width: 767px) {
      	    .bh {
      font-size:18px!important;
font-family: serif;
}
      	    .bottom-right {
  position: absolute;
  bottom: 10%;
  right: 10%;
}
  .desktop {
      display:none!important;
  }
  .mobile {
      
      display:block!important;
  }
}
      	
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

                                            <li class="dropdown"><a href="<?php echo base_url('about');?>">About Us</a>
                                                                                            <ul class="submenu">
                                                                                                                                                                                                <li><a href="<?php echo base_url('about');?>" style="color:#ec1c4e!important;">About The Allchemy</a></li>

                                                                                                <li><a href="<?php echo base_url('reviews');?>" style="color:#ec1c4e!important;">Reviews</a></li>
</ul>
                                            
                                            
                                            </li>                                            
                                            <li class="dropdown"><a href="#">SHOP</a>
                                                <ul class="submenu">
                                                    <?php 
                                foreach($select_category as $our_category)
                                {?>  <li><a href="<?php echo base_url('products/').$our_category['categoryID'];?>"><?php echo $our_category['category'];?></a></li>
                                
                                <?php }?>
                                
                                                                                                      
                                                    </ul>
                                            </li>
                                            <!---<li><a href="#">SPECIAL</a></li>--->
                                            
                         <li><a href="<?php echo base_url('corporate-gift');?>">Corporate Gifts</a></li>

                                            
                                            <li><a href="<?php echo base_url('contact');?>">contact us</a></li>
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
                    <div class="row align-items-center" style="background-color:#5e081c;">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="header-category d-none d-lg-block">
                                <a href="#" class="cat-toggle" style="background-color:#fffde6;"><i class="flaticon-menu"></i>ALL DEPARTMENT</a>
                                <ul class="category-menu"  style="background-color:#5e081c;">
                                   
                                
                                
                                
                                    
                                    
                                    
                                     <?php 
                                foreach($select_categorys as $our_category)
                                {?>
                                    <li class="has-dropdown"><a href="<?php echo base_url('products/').$our_category['categoryID'];?>" style="color:#fffde6;"><div class="cat-menu-img"><img src="assets/images/category/<?php echo $our_category['category_image'];?>" alt=""></div><?php echo $our_category['category'];?></a>
                                      </li>
                                      
                                <?php }
                                ?>
                                      
                                 <br></ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8" >
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Search for your item's type.....">
                                        <select class="custom-select">
                                            <option selected="">All Categories</option>
                                             <?php 
                                foreach($select_categorys as $our_category)
                                {?>
                                            <option><a href="<?php echo base_url('products/').$our_category['categoryID'];?><?php echo $our_category['category'];?>"></a></a></option>
                                            
                                            <?php }
                                ?>
                                   
                                          
                                        </select>
                                        <button><i class="flaticon-magnifying-glass-1"></i></button>
                                    </form>
                                </div>
                                <div class="header-free-shopping">
                                    <p style="color:white;">Free Shipping on Orders <span style="color:#fffde6"> Rs. 599</span></p>
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
                                <div class="single-slider slider-bg" data-background="assets/img/slider/ca.png">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s" style="color:white">BRING OUT THE CHEMISTRY </h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s"  style="color:white"> </h2>
                                        <h4 data-animation="fadeInUp" data-delay=".9s"  style="color:white"> BETWEEN YOUR NOT SO ORDINARY PLACES AND THE AUTHENTIC ART AND HANDICRAFTS OFFERED BY THE ALLCHEMY.</h4>
                                        <a href="<?php echo base_url();?>products/18" class="btn yellow-btn" data-animation="fadeInUp" data-delay="1s">Shop Now</a>
                                    </div>
                                </div>
                                <div class="single-slider slider-bg" data-background="assets/img/slider/c2.png">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s" style="color:white">top deal !</h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s"  style="color:white">Lighting Lamps</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s"  style="color:white">Get up to <span style="color:#5e081c;">50%</span> off Today Only</p>
                                        <a href="<?php echo base_url();?>products/18" class="btn yellow-btn" data-animation="fadeInUp" data-delay="1s">Shop Now</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
            <!-- slider-area-end -->

            <!-- top-cat-banner -->
            <div class="top-cat-banner-area" style="background-color: #5e081c
;">
                <div class="custom-container-two">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="top-cat-banner-item mt-30 container">
                                <a href="#"><img src="assets/images/a1.png" alt=""></a>
                                  <div class="bottom-right"><br><h2 data-animation="fadeInUp" data-delay=".6s" class="bh" >SELF</h2><br>
                                        <a href="<?php echo base_url();?>products/18" class="btn yellow-btn ntn" data-animation="fadeInUp" data-delay="1s" style="color:white;">Shop Now</a></div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top-cat-banner-item mt-30 container">
                                <a href="#"><img src="assets/images/a2.png" alt=""></a>
                                                                  <div class="bottom-right"><br><h2 data-animation="fadeInUp" data-delay=".6s"  class="bh">GIFT</h2><br>
                                        <a href="<?php echo base_url();?>products/18" class="btn yellow-btn ntn" data-animation="fadeInUp" data-delay="1s" style="color:white;">Shop Now</a></div>

                            </div>
                        </div>
                    </div>
                </div><br><br>
            </div>
            <!-- top-cat-banner-end -->
   
					    
					    
					      <section class="exclusive-collection pt-100 pb-60" style="background-image:linear-gradient(to right, rgb(277 277 277 / 90%), rgb(277 277 277 / 90%)),url(assets/images/abgt.png);background-attachment:fixed;">
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
                                    <a href="<?php echo base_url('products-detail/').$fetch_product['web_slug'];?>">
                                        <img src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?>" alt="" class="prod_img">
                                        <img class="overlay-product-thumb" src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?>" alt="">
                                    </a>
                                    <span class="sd-meta" style="background-color:#5e081c;">New!</span>
                                    <a href="<?php echo base_url('products-detail/').$fetch_product['web_slug'];?>" class="to-cart"> <i class="fas fa-cart-plus"></i></a>
                                </div>
                                <div class="exclusive-item-content">
                                                                        <div class="desktop">

                                    <div class="exclusive--content--bottom ">
                                        <h5><a href="<?php echo base_url('products-detail/').$fetch_product['productID'];?>"><?php echo $fetch_product['title'];?></a></h5>
                                        <span style="color:#5e081c;">Rs. <?php echo $fetch_product['price'];?></span>
                                    </div>
                                    </div>
                                    
                                    <div class="exclusive--content--bottom mobile">
                                        <h5><a href="<?php echo base_url('products-detail/').$fetch_product['productID'];?>"><?php echo $fetch_product['title'];?></a></h5>
                                        <h5><span style="color:#5e081c;">Rs. <?php echo $fetch_product['price'];?></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                        
                    </div>
                </div>
            </section>
            <!-- exclusive-collection-area-end -->

<!-------shopping channels-------->


            <!-- best-cat-area-end -->
<section class="exclusive-collection pt-100 pb-60" style="background-image:linear-gradient(to right, rgb(277 277 277 / 10%), rgb(0 0 0 / 50%)),url(assets/images/sbg.jpg);background-attachment:fixed;">
                <div class="container">
                    <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title text-center mb-60">
                                    <span class="sub-title">Our Other Platforms</span>
                                    <h2 class="title" style="color:white;">Where We Available</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-4 col-xs-6 col-6" style="text-align:center">
                                  <a href="https://www.flipkart.com/search?q=the%20allchemy&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off"> <img class="overlay-product-thumb" src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/flipkart-icon.png" alt="" style="height:180px;width:180px;padding:2%"></a>

                                </div>


                            <div class="col-md-4 col-xs-6 col-6" style="text-align:center">
                                  <a href="https://www.meesho.com/search?q=the%20allchemy&searchType=manual&searchIdentifier=text_search"> <img class="overlay-product-thumb" src="https://upload.wikimedia.org/wikipedia/commons/8/80/Meesho_Logo_Full.png" alt="" style="height:180px;width:180px;padding:2%"></a>

                                </div>


                            <div class="col-md-4 col-xs-6 col-6" style="text-align:center">
                                  <a href="https://www.amazon.in/stores/page/F9E53AC7-F05C-47D8-8965-CE2DAA5CC3C0"> <img class="overlay-product-thumb" src="https://www.freeiconspng.com/thumbs/amazon-icon/amazon-icon-2.png" alt="" style="height:180px;width:180px;padding:2%"></a>

                                </div>

                            </div>
                        
                </div>
            </section>


<!----deal of the day--->

 <section class="deal-of-the-day theme-bg pt-100 pb-70" style="background-color: #5e081c;">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="custom-col-4">
                            <div class="deal-of-day-banner mb-30">
                                <a href="#"><img src="assets/img/d.png" alt="" style="width:100%;height:auto"></a>
                            </div>
                        </div>
                        <div class="custom-col-8"><br>
                            <div class="deal-day-top">
                                <div class="deal-day-title">
                                    <h4 class="title" style="color:white;">Deal Of The Day</h4>
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
           


            <!-- best-cat-area-end -->
<section class="exclusive-collection pt-100 pb-60" style="background-image:linear-gradient(to right, rgb(277 277 277 / 90%), rgb(277 277 277 / 90%)),url(assets/images/abgt.png);background-attachment:fixed;">
                <div class="container">
                    <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title text-center mb-60">
                                    <span class="sub-title">BROWSE CATEGORIES</span>
                                    <h2 class="title">BROWSE best CATEGORIES</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
					<?php foreach($select_categorysh as $fetch_product)
                                {?>
                            <div class="col-md-2 col-xs-6 col-6" style="text-align:center">
                                  <a href="<?php echo base_url('products/').$fetch_product['categoryID'];?>"> <img class="overlay-product-thumb" src="<?php echo base_url();?>assets/images/category/<?php echo $fetch_product['category_image'];?>" alt="" style="height:180px;width:180px;padding:2%"></a>
                                  <p class="catp"><?php echo $fetch_product['category'];?></p>
                                    
                                </div>
                                <?php }?>
                                
                            </div>
                        
                </div>
            </section>
           
            <!-- limited-offer-area -->
            <section class="" >
            
                        <img src="assets/images/brn.png" style="width:100%;">
                        
            </section>
            <!-- limited-offer-area-end -->

        </main>
        <!-- main-area-end -->
 
        <!-- footer-area -->
                <?php $this->load->view('includes/footer');?>

        <!-- footer-area-end -->
    
        
        <!-- promo-popup-area -->
       <div class="promo-popup" id="myModal">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="promo-close third-bg" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="flaticon-plus-1"></i></span>
                        </button>
                        <div class="modal-body relative-position">
                            <img src="assets/images/pop.jpeg" alt="">
                            <div class="promo-text pera-content">
                                <div class="popup-title">
                                    <h6 class="sub-title" style="color: #5e081c;">Newsletter</h6>
                                    <h2 class="title">Subscribe And Get <span style="color: #5e081c;">30%</span> Discount!</h2>
                                </div>
                                <div class="promo-subscribe pera-content">
                                    <p class="subscribe-text">Subscribe to the newsletter to receive updates about all new
                                        products.</p>
                                    <div class="promo-form">
                                        <form action="<?php echo base_url('newsletter');?>" method="POST">
                                            <input class="email" name="email" type="email" placeholder="Email Address">
                                            <button class="btn yellow-btn" style="color:white!important;" type="submit">Subscribe</button>
                                            <div class="comment-check-box">
                                              <!-- <input type="checkbox" name="check1" value="checkbox" onchange="showMe('div1')" /> 
                                                <label for="comment-check">Don't show this popup again!</label>--->
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- promo-popup-area-end -->

<script>
setTimeout(showModal,500);
function showModal(){
  $("#myModal").show()
}

var is_modal_show = sessionStorage.getItem('alreadyShow');
if(is_modal_show != 'alredy shown'){
  $("#myModal").show()
  sessionStorage.setItem('alreadyShow','alredy shown');
}

</script>


        <!------------->


		<!-- JS here -->
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

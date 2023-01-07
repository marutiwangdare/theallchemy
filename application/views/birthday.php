<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
           <?php $this->load->view('includes/meta');?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
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

.cimg img {
    width:180px;
    height:auto;
}
.pdis {
    color:white!important;
    padding-right:3%!important;
    padding-left:3%!important;
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
.breathing-button {
    -webkit-animation: breathing 5s ease-out infinite normal;
    animation: breathing 5s ease-out infinite normal;
    
    -webkit-font-smoothing: antialiased;
    border-radius: 2px;
    text-align: center;    
    }


@-webkit-keyframes breathing {
  0% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  60% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  100% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}

@keyframes breathing {
  0% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }

  25% {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }

  60% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }

  100% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
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
        <!-- header-area-end -->

        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/images/breadcrumb.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Birthday Gifting</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Birthday Gifting</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area-end -->

 <section class="about-area pt-100 pb-100" style="background-color:#5e081c;" >
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6">
                           <center> <div class="about-img">
                                <img src="https://cdn.pixabay.com/photo/2016/06/04/17/42/birthday-1435943_960_720.jpg" alt="" class="" style="max-height:300px;width:auto;">
                            </div></center>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up">
                            <div class="about-content" data-aos="fade-up" >
							<br><br>
                                <h4 class="title" style="color:#ec1c4e">Give A Chance</h4>
                               <!--- <div class="our-mission-wrap">
                                    <h4 class="title" style="color:#fced1e">Our Founders</h4>
                                    <div class="our-mission-list">
									
                                        <h5 style="padding-top:10px;color:white;">Varun Chaudhary & Nikki Singh<h5>
                                    </div>
                                </div>---->
                                
                                <p style="color:#fffde6;">Looking for a special someone a thoughtful and original anniversary gift? Give us an opportunity to surprise your loved ones with our beautifully crafted products. You can even order some personalised gifts with a name or a particular occasion; whatever you need, we are here to assist you. Just give us your question and let us know what you want. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            
            
                <!-- shop-area -->
            <section class="shop-area gray-bg pt-100 pb-100"  style="background-image:linear-gradient(to right, rgb(277 277 277 / 90%), rgb(277 277 277 / 90%)),url(assets/images/abgt.png);background-attachment:fixed;background-size:100%;">
                <div class="container">
                <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <h2 class="title">Some Suggested Items</h2>
                            </div>
                        </div>
                    </div>
                <div class="custom-container-two">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12">
                            
                            <div class="row" style="padding:4%;">
                                
      <?php foreach($select_products_anniversary as $fetch_products)
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

            
 <!-- slider-area -->
           

 <section class="about-area pt-100 pb-100"  style="background-image:linear-gradient(to right, rgb(0 0 0 / 65%), rgb(277 277 277 / 42%)),url(https://cdn.pixabay.com/photo/2016/01/08/22/44/gift-1129453_960_720.jpg);background-attachment:fixed;background-repeat:no repeat!important;background-size:100%;">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6" data-aos="fade-up">
                            <div class="about-content" data-aos="fade-up" >
                                <h4 class="title" style="color:#fced1e">We Have Exciting Offers</h4>
                                <br>
                                <p style="color:white;font-size:20px; ">We have special birthday gift options for all age group people share your customise requirement with us and get same.</p>
                               <!--- <div class="our-mission-wrap">
                                    <h4 class="title" style="color:#fced1e">Our Founders</h4>
                                    <div class="our-mission-list">
									
                                        <h5 style="padding-top:10px;color:white;">Varun Chaudhary & Nikki Singh<h5>
                                    </div>
                                </div>---->
                                                                        <a href="<?php echo base_url('contact');?>" class="btn yellow-btn" data-animation="fadeInUp" data-delay="1s" style="color:white;">Contact Us</a>

                                
                                
                            </div>
                        </div>
                          <div class="col-lg-6">
                           <center> <div class="">
                                <img src="https://www.pngall.com/wp-content/uploads/5/Happy-Birthday-Decoration-PNG-Free-Download.png"   style="max-height:300px;width:auto;">
                            </div></center>
                        </div>
                      
                    </div>
                </div>
            </section>
<br><br>


               
            <section class="third-slider-area" data-background="img/slider/slider_bg.jpg">
                <div class="custom-container-two">
                         <div class="row justify-content-center" style="text-align:center;">
                        
                        <div class="col-xl-2 col-md-6 col-sm-10 cimg">
                                    <a href=""><img src="assets/images/corporate/icon/1.png" alt=""></a>
                                
                        </div>
                        
                        <!----->

                        
                        <div class="col-xl-2 col-md-6 col-sm-10 cimg">
                                    <a href=""><img src="assets/images/corporate/icon/2.png" alt=""></a>
                                
                        </div>
                        
                        <div class="col-xl-2 col-md-6 col-sm-10 cimg">
                                    <a href=""><img src="assets/images/corporate/icon/3.png" alt=""></a>
                                
                        </div>
                        
                        
                        <div class="col-xl-2 col-md-6 col-sm-10 cimg">
                                    <a href=""><img src="assets/images/corporate/icon/4.png" alt=""></a>
                                
                        </div>
                        
                        <div class="col-xl-2 col-md-6 col-sm-10 cimg">
                                    <a href=""><img src="assets/images/corporate/icon/5.png" alt=""></a>
                                
                        </div>
                        
                        <div class="col-xl-2 col-md-6 col-sm-10 cimg">
                                    <a href=""><img src="assets/images/corporate/icon/6.png" alt=""></a>
                                
                        </div>
                    </div>
                     </div>
                     <br><br>
            </section>
<!---------------->
           
            <!-- limited-offer-area -->
                <section class="" >
            
                        <img src="assets/images/brn.png" style="width:100%;">
                        
            </section>
           
            <!-- limited-offer-area-end -

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
           <?php $this->load->view('includes/footer');?>

        <!-- footer-area-end -->





		<!-- JS here -->
      
      		           <?php $this->load->view('includes/script');?>

      
      
        <script>
        setTimeout(function(){        
    $('#preloader').fadeOut();
    $('.ctn-preloader').delay(150).fadeOut('slow'); 
}, 5000);
        </script>
		<!----aos------>
		<script>
  AOS.init();
</script>
		
    </body>

</html>

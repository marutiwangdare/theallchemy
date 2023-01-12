<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
           <?php $this->load->view('includes/meta');?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
.sub-title {
    color:#5e081c;
}
.testi-avatar-img img {
    max-height:100px;
    width:auto;
}
.pdis {
    color:#fffde6!important;
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
color:#5e081c;
font-family: serif;
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
                                <h2>Order Complete</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Order Complete</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

          <!-- order-complete-area -->
            <section class="order-complete-area pattern-bg pt-100 pb-100" data-background="assets/img/bg/pattern_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="order-complete-bg" data-background="assets/img/bg/order_comp_bg.png">
                                <div class="order-complete-content">
                                    <h3><span>your</span> Order Is Completed!</h3>
                                    <div class="check mb-25">
                                        <img src="assets/img/icon/check.png" alt="">
                                    </div>
                                    <p>Thank you for your order! Your order is being processed and will be completed within 6-12 Hours. You will receive an
                                    email confirmation when your order is completed.</p>
                                    <a href="<?php echo base_url();?>" class="btn">CONTINUE SHOPPING</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- order-complete-area-end -->
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





		<!-- JS here -->
		
		
		           <?php $this->load->view('includes/script');?>

		
		<!----aos------>
		<script>
  AOS.init();
</script>
		
    </body>

</html>

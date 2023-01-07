<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
           <?php $this->load->view('includes/meta');?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
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
                                <h2>Delivery Policy</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Delivery Policy</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
            <section class="about-area pt-100 pb-100" >
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-12">
                            <div class="">
          <h2> Delivery Policy of The Allchemy</h2>

<p>The Allchemy is committed to providing our customers with the best possible delivery experience. We offer a variety of delivery options to meet your needs, and we work hard to ensure that your order arrives on time and in perfect condition. We understand that not everyone is available to receive their delivery during regular business hours, so we offer a range of delivery times and options to make sure you can get your order when it's convenient for you. We're always happy to help!
<br>
<b>Our Delivery Policy</b>
<br>
The Allchemy is committed to providing our customers with the highest quality products and services. We take great pride in our products and service, and we stand behind them 100%.
<br>
We offer FREE DELIVERY on all orders.
<br>
We also offer expedited shipping for an additional charge. Expedited shipping options are available at checkout.
<br>
All orders placed before 2:00 pm IST will ship the same day. Orders placed after 2:00 pm EST will ship the next business day. Business days are Monday-Friday, excluding holidays.
<br>
We do not ship to P.O. Boxes or APO/FPO addresses at this time.
<br>
<b>Delivery Timings</b>
<br>
While we make every effort to deliver your order on time, we cannot guarantee that all orders will be delivered within the estimated delivery time. Delivery times are estimates only and commence from the date of shipping, rather than the date of order.
<br>
We do everything in our power to dispatch orders as soon as possible, and you can help us by ensuring that your delivery address and contact details are correct. You will receive an email with tracking information once your order has shipped.
<br>

for more information contact us <u>theallchemy@gmail.com</u>.
<p>
                              </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->




           
            <!-- limited-offer-area -->
                <section class="" >
            
                        <img src="<?php echo base_url();?>/assets/images/brn.png" style="width:100%;">
                        
            </section>
           
            <!-- limited-offer-area-end -->

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

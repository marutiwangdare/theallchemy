<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
           <?php $this->load->view('includes/meta');?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
.pdis {
    color:white!important;
    padding:4%!important;
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
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/images/breadcrumb.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area primary-bg pt-100 pb-70" style="background-color:#5e081c;">
                <div class="container">
                    <div class="contact-wrap-padding">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="contact-info-box text-center mb-30">
                                    <div class="contact-box-icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Our Location</h5>
                                        <p>51, Shastri Nagar, C Block, Meerut, Uttar Pradesh - 250004</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="contact-info-box text-center mb-30">
                                    <div class="contact-box-icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Our Email</h5>
                                        <p>Email Us: <a href="" class="__cf_email__">theallchemy@gmail.com</a></p>
                                        <p>theallchemy.in</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="contact-info-box text-center mb-30">
                                    <div class="contact-box-icon">
                                        <i class="flaticon-telephone"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Phone Number</h5>
                                        <p>Contacr Numbers: 9068145151</p>
                                       <!--- <p>8447211949</p>--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-100 pb-100" style="background-image:linear-gradient(to right, rgb(277 277 277 / 90%), rgb(277 277 277 / 90%)),url(assets/images/abgt.png);background-attachment:fixed;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-7 col-md-9">
                            <div class="contact-title text-center mb-60">
                                <div class="section-title text-center">
                                    <span class="sub-title">LET’S TALK</span>
                                    <h2 class="title">Send Us a Massage</h2>
                                </div>
                                <p>We are always happy to talk with you. Be sure to write to us if you have any
                                    questions or need help and support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-wrap-padding">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-form">
                                    <form action="<?php echo base_url().'contact-query';?>" method="post">
                                      <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <?php if(!empty(validation_errors()))
                        {?>
                        <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                        <?php } ?>
                     </div>
                  </div>
                                      
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Name*"  name="name" value="<?php echo set_value('name');?>">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-grp">
                                                    <input type="email" required placeholder="Your Email*" name="email" value="<?php echo set_value('email');?>">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Phone*" name="mobile" value="<?php echo set_value('mobile');?>">
                                                    <i class="fas fa-mobile-alt"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Subject*" name="subject"  value="<?php echo set_value('subject');?>">
                                                    <i class="far fa-circler"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <textarea name="message" id="message" placeholder="Enter Your Massage"><?php echo set_value('message');?></textarea>
                                        <button type="submit" class="btn">submit</button>
                                    </form>
                                </div>
                            </div>
                          <!---  <div class="col-lg-6">
                                <div class="contact-map">
                                    <img src="assets/img/images/map.jpg" alt="">
                                </div>
                            </div>--->
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

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

    </body>

</html>

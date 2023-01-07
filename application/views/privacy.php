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
                                <h2>Privacy Policy</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
                              
<b>1. Privacy Policy</b><br>
 The following privacy policy applies to the website at www.theallchemy.in (the “Site”). Please read this privacy policy carefully before using the Site. By accessing or using the Site, you agree to be bound by this privacy policy. If you do not agree to these terms, please do not use the Site. We reserve the right to modify this privacy policy at any time without notice. Any changes will become effective immediately upon posting.<br><br>
 <b>2. Information Collection And Use</b><br>
 We may collect personally identifiable information from users of the Site. Personally identifiable information includes, but is not limited to, name, email address, mailing address, telephone number, credit card number, etc. You may choose not to provide us with certain personally identifiable information, but then you may not be able to take advantage of many features offered on the Site. We may combine the information we collect with other personal information that you voluntarily submit to us via the Site.<br><br>
 <b>3. Disclosure Of Your Personal Information</b><br>
 We may disclose your personally identifiable information if we believe disclosure is necessary to protect our rights and/or comply with a judicial proceeding, court order, or legal process served on our Web site.<br><br>
 <b>4. Security</b><br>
 To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online.<br><br>
 <b>5. Links To Other Sites</b><br>
 Our Site can contains links to other sites. Please be aware that we are not responsible for the content or privacy practices employed by other sites. We encourage our users to be aware when they leave our Site and to read the privacy statements of each and every web site that collects personally identifiable information. This privacy statement applies solely to information collected by this Site.<br><br>
 <b>6. Children's Online Privacy Protection Act Compliance</b><br>
 Protecting the safety and privacy of the children who visit our Website is always a top priority for us. In compliance with the requirements of COPPA (Children's Online Privacy Protection Act), we do not knowingly collect personally identifiable information from anyone under 13 years old. Our family friendly website does not target younger audiences. If a parent believes that his or her child has provided us with personally identifiable information, he or she should contact us immediately.<br><br>
<b> 7. Changes</b><br>
 From time to time, we may make changes to this privacy policy. If we decide to change our privacy policy, we will post those changes on this page. We recommend that you check this page periodically to ensure that you are familiar with the current version.<br><br>
                              
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

<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
           <?php $this->load->view('includes/meta');?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
p {
    
    padding-left:10px;
    padding-right:10px;
}
.simg {
    
    width:100%;
    height:auto;
}
.sul li {
  list-style-type: square;
  padding-top:20px;
}
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
               <?php $this->load->view('includes/header');?>

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/images/breadcrumb.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Franchise</h2></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Franchise</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

         
            <!-- contact-area -->
            <section class="contact-area pt-100 pb-100">
                
            <div class="container">
                
                  <!-------content------->
                  <div class="row">
                   <div class="col-md-6"> 
                    <h4>Benefits Of Being The Allchemy Franchisee</h4>
                    
                    <ul class="sul">
                        <li>63% Returns on Investment
                            </li>
                            
                        <li>Order Fulfillment and After Sales Service by The Allchemy
                            </li>
                            
                        <li>Brand Support on Staff Training, Studio Launch and Marketing
                            </li>
                            
                        <li>24 Months Pay Back Period
                            </li>
                            
                        <li>Extensive Support & Guidance on Studio Design and Set-up
                            </li>
                            
                        <li>Dedicated Area Managers for Studio Sales & Operational Guidance

                            </li>
                        </ul>
                    
                    </div>
                    
                    <div class="col-md-6"><br>
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
                  
                </div>
                
                    
                    
                    </div>
            </section>
            <!-- contact-area-end -->
   <!-- contact-area -->
            <section class="contact-area primary-bg pt-100 pb-70" style="background-color:#ec1c4e;">
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
 <section class="contact-area pt-100 pb-100">
                
            <div class="container">
                
                  <!-------content------->
                  <div class="row">
                   <div class="col-12"> 
                    <h3>The Allchemy Franchise Business Model
</h3>
                   <br>
                      <h4 style="color:#ec1c4e ;">The Allchemy Accelerator Program (AAP)</h4>
                      <ul class="sul">
                                                <li><b>Minimum Investment: </b> 5Lakhs.	</li>

                      <li><b>Minimum Studio Space: </b> 400 sq. ft.	</li>
                                            <li><b>Payback Period: </b> 24 Months	</li>

                      <li><b>Request Financial Plan	: </b> theallchemy@gmail.com</li>

                      </ul>
                           
                   <br>
                      <h4 style="color:#ec1c4e ;">The Allchemy Venture Program (AVP)	</h4>
                      <ul class="sul">
                                                                          <li><b>Minimum Investment: </b> 10Lakhs.	</li>

                      <li><b>Minimum Studio Space: </b> 800 sq. ft.	</li>
                                            <li><b>Payback Period: </b> 32 Months	</li>

                      <li><b>Request Financial Plan	: </b> theallchemy@gmail.com</li>

                      </ul>
                       
                       
                   <div class="row">
                       <div class="col-md-6">
                           </div>
                            <div class="col-md-6">
                           </div>
                           
                       </div> 
                    
                    </div>
                
                    
                    
                    
            </section>
           
           
               <section class="contact-area primary-bg pt-100 pb-70" style="background-color:#ec1c4e;">
                <div class="container">
                    <div class="contact-wrap-padding">
                        <div class="row justify-content-center">
                            <h3>A Word From Our Partners</h3><br>
                            <p style="color:white;">At Partners, we pride ourselves on providing quality products and services to our clients. However, we also know that no company is perfect. We understand that there may be times when our clients are not completely satisfied with what we have to offer. That's why we're always open to feedback. We want to know what we can do to improve our business and better serve our clients. So if you have any suggestions or comments, please don't hesitate to let us know. We value your input and appreciate your help in making Partners the best it can be!</p><br>
                            <div class="row" style="background-color:#f8f9fa ;padding:1%">
                           <div class="col-md-4" style="text-align:center;">
                               <img src="assets/images/kajal.jpg" style="padding-bottom:20px!important;height:200px;width:auto;">
                               <h5>Navya Teotia
</h5>
<br>
                               </div> 
                               <div class="col-md-8">
                                   <br>
                                   <p>Am glad after choosing The Allchemy Franchise , I find this one of the best business to become a partner here we have a great range of the products which are the first choice of every customer.   </p>
                                   <br>
                                   <p><b>Place:</b> Meerut, Uttar Pradesh</p>
                                   
                               </div> 
                               </div>
                               
                               
                            <img src="assets/images/store.jpeg" class="simg" style="padding-top:40px!important;">
                        </div>
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





		<!-- JS here -->
				           <?php $this->load->view('includes/script');?>

    </body>

</html>

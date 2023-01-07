<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
           <?php $this->load->view('includes/meta');?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
.yellow-btn{
    
    color:white!important;
}
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
                                <h2>Testimonials</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

          
        
            <!-- testimonial-area -->
            <section class="testimonial-area pt-100 pb-100" style="background-color:#5e081c">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <h2 class="title" style="color:#fffde6;">happy customers quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-active">
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="https://www.shareicon.net/data/2017/02/15/878685_user_512x512.png" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Kajal Chaudhary</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I just wanted to say that I love the beer mug. It's so beautifully made and it's a perfect gift for my dad. Plus, it was delivered in perfect condition."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="https://www.shareicon.net/data/2017/02/15/878685_user_512x512.png" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Aman Malik</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>“"I just wanted to say thank you for this awesome product. I love how the light is so easy to install and change the direction of! It was very affordable and looks great in my room!" ”</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="https://www.shareicon.net/data/2017/02/15/878685_user_512x512.png" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Divyanshi</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>“ I was just looking for a way to organize my spices and came across the Wooden Spice Box. It has been wonderful! I had so much trouble finding a spice rack that didn't take up a ton of space, but this one is perfect! The spices are easy to see and I am always using them. ”</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="https://www.shareicon.net/data/2017/02/15/878685_user_512x512.png" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Prachi Sain</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I'm writing this review to say that I am very pleased with the sling bag I ordered. It was exactly what I wanted, and it looks great."</p>
                                </div>
                            </div>
                        </div>
                        <!------review new 1------->
                        
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="assets/images/r1.jpeg" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Ashirwad Goel ( RM AXIS BANK)</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I'm writing this review to say that I am very pleased with the sling bag I ordered. It was exactly what I wanted, and it looks great."</p>
                                </div>
                            </div>
                        </div>
                        <!-----end review-------->
                        
                        <!------review new 2------->
                        
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="assets/images/r2.jpeg" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Sunny Panwar (Student)</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I'm writing this review to say that I am very pleased with the sling bag I ordered. It was exactly what I wanted, and it looks great."</p>
                                </div>
                            </div>
                        </div>
                        <!-----end review-------->
                             <!------review new 3------->
                        
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="assets/images/r3.jpeg" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Rahul ( Company Secretry)</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I gifted a beautiful doll from The Allchemy to my daughter, which was made of wool; my daughter loved that doll so much."</p>
                                </div>
                            </div>
                        </div>
                        <!-----end review-------->
                           <!------review new 4------->
                        
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="assets/images/r4.jpeg" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Surya ( Merchent)</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I'm writing this review to say that I am very pleased with the sling bag I ordered. It was exactly what I wanted, and it looks great."</p>
                                </div>
                            </div>
                        </div>
                        <!-----end review-------->
                         <!------review new 5------>
                        
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="assets/images/r5.jpeg" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>Danish( Gym Trainer Golds)</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I'm very happy with my purchase from The Allchemy; it's a great place to get products that make you feel both down to earth and elegant."</p>
                                </div>
                            </div>
                        </div>
                        <!-----end review-------->
                         <!------review new 6------>
                        
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="assets/images/r6.jpeg" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5>R. Ajay ( CMO Philan)</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>"I was looking for a birthday gift for my wife, and one of my friends recommended The Allchemy as the best gift option." After purchasing from The Allchemy, I can say that it is true that "The Allchemy is the best fit place for every gift item."</p>
                                </div>
                            </div>
                        </div>
                        <!-----end review-------->
                   
                   
                   
                   
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
              <!-- about-area -->
            <section class="about-area pt-100 pb-100" style="background-color:#fffde6;">
                <div class="container">
                    
                            <div class="product-reviews-wrap">
                                <div class="deal-day-top">
                                    <div class="deal-day-title">
                                        <h4 class="title">Please Share Your Reviews</h4>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="https://img.freepik.com/premium-vector/time-review-speech-bubble-with-time-review-text-3d-illustration-pop-art-style-vector-line-icon-business-advertising_661108-978.jpg?w=2000" style="width:100%;height:auto;">
                                        </div>
                                    <div class="col-lg-8">
                                        <div class="product-review-form">
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                                <?php if(!empty(validation_errors()))
                        {?>
                           <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                        <?php } ?>
                                    
                                            <form action="<?php echo base_url('addreview'); ?>" method="POST">
                                                <div class="form-grp">
                                                    <label for="message">YOUR REVIEW *</label>
                                                    <textarea  id="message" name="review"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-grp">
                                                            <label for="uea">YOUR NAME *</label>
                                                            <input type="text" id="uea" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-grp">
                                                            <label for="email">YOUR Email *</label>
                                                            <input type="email" id="email" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                 
                                                
                                                <button class="btn yellow-btn" type="submit">SUBMIT</button>
                                            </form>
                                        </div>
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

		
		<!----aos------>
		<script>
  AOS.init();
</script>
		
    </body>

</html>

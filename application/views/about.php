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
                                <h2>about the allchemy</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
            <section class="about-area pt-100 pb-100" style="background-color:#5e081c;">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="assets/images/about/<?php echo $select_about['image'];?>" alt="" class="breathing-button" >
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up">
                            <div class="about-content" data-aos="fade-up" >
							<br><br>
                                <h4 class="title" style="color:#fffde6;font-family: serif;">Our Story</h4>
                                <p style="color:#fffde6 !important;"><?php echo $select_about['description'];?>
</p>
                               <!--- <div class="our-mission-wrap">
                                    <h4 class="title" style="color:#fced1e">Our Founders</h4>
                                    <div class="our-mission-list">
									
                                        <h5 style="padding-top:10px;color:white;">Varun Chaudhary & Nikki Singh<h5>
                                    </div>
                                </div>---->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->




            <!-- features-area -->
            <section class="features-area theme-bg pt-100 pb-70"  style="background-color:#fffde6;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title" style="color:#5e081c">People Behind The Allchemy</span>
                                <h2 class="title">OUR TEAM</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-4" data-aos="fade-up">
						<img src="assets/img/about/a1.png" style="height:200px;width:auto" >
						<h4 class="ftext">Varun Chaudhary<h4>
                               
                        </div>
                        
						<div class="col-md-4" data-aos="fade-up">
						<img src="assets/images/kajal.png" style="height:200px;width:auto" >
                            <h4 class="ftext">Navya Teotia</h4>   
                        </div>
                        <div class="col-md-4" data-aos="fade-up">
						<img src="assets/images/vishal.png" style="height:200px;width:auto" >
						<h4 class="ftext">Vishal Chaudhary<h4>
                               
                        </div>
						
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

        
            <!-- testimonial-area -->
            <section class="testimonial-area pt-100 pb-100" style="background-color:#5e081c">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <h2 class="title" style="color:#fffde6;">happy customer quotes</h2>
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
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
  
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

<!doctype html>
<html class="no-js" lang="">
    
<head>                <?php $this->load->view('includes/meta');?>


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

        <!-- main-area -->
        <main  >

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/images/breadcrumb.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>My-Account</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- my-account-area -->
            
            
            
            <section class="my-account-area pattern-bg pt-100 pb-100" style="background-image:linear-gradient(to right, rgb(277 277 277 / 65%), rgb(277 277 277 / 82%)),url(assets/img/bg/bk.jpg);background-attachment:fixed;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="login-page-title">
                                <h2 class="title"><span style="color:#ec1c4e;"> LOGIN IN ACCOUNT</span></h2>
                            </div>
                            <div class="my-account-bg" data-background="assets/img/bg/my_account_bg.png">
                                <div class="my-account-content">
                                    <p>Welcome Please Register Your <span> Account</span></p>
                            
                                    <form action="<?php echo base_url('verify-user-login');?>" method="post" class="login-form">
                                        <?php if(!empty(validation_errors()))
                        {?>
                           <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                        <?php } ?>
                                         <div class="form-grp">
                                            <label for="uea">YOUR NAME <span>*</span></label>
                                            
                           <input type="text" name="email"  placeholder="Username" value="<?php echo set_value('email');?>">
                                        </div>
                                       
                                        <div class="form-grp">
                                            <label for="password">PASSWORD <span>*</span></label>
                            
                           <input type="password" name="password" placeholder="Password" value="<?php echo set_value('password');?>">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        <div class="form-grp-btn">
                                            <button type="submit" style="background-color:#ec1c4e;color:white;">Submit</button>
                                            <!---<a href="#" class="btn">Sign up</a>---->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- my-account-area-end -->

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

        <?php 
        $previus_url = $_SERVER['HTTP_REFERER'];
        set_cookie('previous',$previus_url,'3600');
      ?>
    </body>

</html>

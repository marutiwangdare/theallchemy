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
                    <!------alert info----->
                    <?php if(!empty($this->session->flashdata('info-message_success')))
         {?>
         <div class="error_msg">
            <div class="alert alert-success">
               <button class="close" data-dismiss="alert">&times;</button>
               <strong><?php echo $this->session->flashdata('info-message_success');?></strong>
            </div>
         </div>
         <?php } ?>
         <?php if(!empty($this->session->flashdata('info-message_error')))
         {?>
         <div class="error_msg">
            <div class="alert alert-danger">
               <button class="close" data-dismiss="alert">&times;</button>
               <strong><?php echo $this->session->flashdata('info-message_error');?></strong>
            </div>
         </div>
         <?php } ?>
                    <!---------end alert infor-------->
                    
                    
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="login-page-title">
                                <h2 class="title"><span style="color:#ec1c4e;"> SIGN UP ACCOUNT</span></h2>
                            </div>
                            <div class="my-account-bg" data-background="assets/img/bg/my_account_bg.png">
                                <div class="my-account-content">
                                    <p>Welcome Please Register Your <span> Account</span></p>
                                 <!---   <div class="direct-login">
                                        <a href="#"><i class="fab fa-facebook-f"></i>Login with facebook</a>
                                        <a href="#" class="xing"><i class="fab fa-xing"></i>Login with xing</a>
                                    </div>
                                    <span class="or">- OR -</span>--->
                                    <form action="<?php echo base_url('user-registration');?>" method="post" class="login-form">
                                            <?php if(!empty(validation_errors()))
                        {?>
                           <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                        <?php } ?>
                                         <div class="form-grp">
                                            <label for="uea">YOUR NAME <span>*</span></label>
                                        <input type="text" name="name" placeholder="Name" value="<?php echo set_value('name');?>">
                                        </div>
                                       
                                        <div class="form-grp">
                                            <label for="uea">EMAIL ADDRESS <span>*</span></label>
                                            <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email');?>">
                                        </div>
                                        
                                        <div class="form-grp">
                                            <label for="uea">CONTACT NUMBER <span>*</span></label>
                                            <input type="text" name="number" placeholder="Phone"  onkeypress="return numberOnly(this, event)" value="<?php echo set_value('number');?>">
                                        </div>
                                        <div class="form-grp">
                                            <label for="password">PASSWORD <span>*</span></label>
                                        <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password');?>">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        
                                        
                        <div class="form-grp">
                           <div class="col-lg-12 col-md-12 col-sm-12 lost-your-password">
                              <a href="<?php echo base_url('user-login');?>" class="lost-your-password" style="color:black;">Already have an account? Login now</a>
                           </div>
                        </div>
                                        
                                        <div class="form-grp-btn">
                                            <button type="submit" class="btn" style="background-color:#ec1c4e;color:white;">Submit</button>
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

		
    </body>

</html>

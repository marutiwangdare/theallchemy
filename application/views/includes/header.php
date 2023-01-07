<style>
.yellow-btn {
    color:white!important;
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

</style>
        <!-- header-area -->
        <header class="header-style-two" >

            <!-- header-top -->
               <style>

i {
    
    font-size:15px!important;
    padding-left:10px!important;
    padding-right:10px!important;
}

</style>



<div class="header-top-area" style="background-color:#5e081c
;">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="header-top-left">
                                <ul>
								
								<li style="color:white;font-size:15px;"><span><a href="https://www.instagram.com/theallchemy_/"><i class="fa fa-instagram" style="height:20px;width:auto;color:white;"></i>
</a></span>
 <span><a href=""><i class="fa fa-facebook-f" style="height:20px;width:auto;color:white;"></i></a>
</span>
 <span><a href="https://www.linkedin.com/in/theallchemy-tac-64011124b/"><i class="fa fa-linkedin-in" style="height:20px;width:auto;color:white;"></i></a>
</span>
								
                                   <!--- <li>
                                        <div class="heder-top-guide">
                                            <span class="phead">Quick Guide</span>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle phead" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Help
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="terms-conditios.html">Returns</a>
                                                    <a class="dropdown-item" href="terms-conditios.html">Privacy</a>
                                                    <a class="dropdown-item" href="terms-conditios.html">Terms</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>--->
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5">
                            <div class="header-top-right">
                                <ul>
                                                  <?php 
                    if(isset($_SESSION['useremail']))
                  {
                      $cart = $this->db->query("select * from tbl_signup where userID='".$_SESSION['userID']."'");
                     // $cart_count = $cart->num_rows();
                 $cart_result = $cart->result_array();

                  ?>
                               <ul class="submenu">
                                                    <?php 
                                foreach($cart_result as $user)
                                {?>
                                   <li>
                                        <a href="<?php echo base_url('my-account');?>"   style="color:white;font-size:15px;"><i class="flaticon-user" class="phead"></i>User: <?php echo $user['name'];?></a>
                                    </li>
                                
                                            <?php }?>
                                                                <?php }else{?>
                                                                
                                            <li>
                                        <a href="<?php echo base_url('user-register');?>"   style="color:white;font-size:15px;"><i class="flaticon-user" class="phead"></i>Register</a>
                                        <span style="font-size:15px;color:black;">or</span>
                                        <a href="<?php echo base_url('user-login');?>" class="phead" style="color:white;font-size:15px;">Sign in</a>
                                    </li>
                            
                      <?php } ?>                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-top-end -->

            <!-- menu-area -->
            <div id="sticky-header" class="main-header menu-area" style="background-color: #fffde6
;height:90px;">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"  style="color:white;"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo/logon.jpeg" alt="Logo" style="height:90px;width:auto;"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
										
										<li>
								<!-----language---->
			

								<!------end language translator-------></li>
										
										
                                            <li class="active"><a href="<?php echo base_url();?>">Home</a>
                                                
                                            </li>
                                            <li class="dropdown"><a href="<?php echo base_url('about');?>">About Us</a>
                                                                                            <ul class="submenu">
                                                                                                                                                                                                <li><a href="<?php echo base_url('about');?>" style="color:#ec1c4e!important;">About The Allchemy</a></li>

                                                                                                <li><a href="<?php echo base_url('reviews');?>" style="color:#ec1c4e!important;">Reviews</a></li>
</ul>
                                            
                                            
                                            </li>
                                            
                                            
                                            <li class="dropdown"><a href="#">SHOP</a>
                                                <ul class="submenu">
                                                    <?php 
                                foreach($select_category as $our_category)
                                {?>  <li><a href="<?php echo base_url('products/').$our_category['categoryID'];?>" style="color:#ec1c4e!important;"><?php echo $our_category['category'];?></a></li>
                                
                                <?php }?>
                                
                                                                                                      
                                                    </ul>
                                            </li>
                                            <!---<li><a href="#">SPECIAL</a></li>--->
                                              <li class="dropdown"><a href="<?php echo base_url('about');?>">Gifts</a>
                                                                                            <ul class="submenu">
                                         <li><a href="<?php echo base_url('corporate-gift');?>"  style="color:#ec1c4e!important;">Corporate Gifts</a></li>

                                     <li><a href="<?php echo base_url('anniversary-gift');?>" style="color:#ec1c4e!important;">Anniversary Gifts</a></li>
                                    <li><a href="<?php echo base_url('birthday-gift');?>" style="color:#ec1c4e!important;">Birthday Gifts</a></li>

</ul>
                                            
                                            
                                            </li>
                                            

                                            <li><a href="<?php echo base_url('contact');?>">contact us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <?php 
                    if(isset($_SESSION['useremail']))
                  {
                      $cart = $this->db->query("select * from tbl_cart where userID='".$_SESSION['userID']."'");
                      $cart_count = $cart->num_rows();
                  ?>
                  
<li style="color:white;"></li>                                            <li class="header-shop-cart"><a href="<?php echo base_url('cart'); ?>"><i class="flaticon-shopping-bag" id='lblCartCount'></i><span class="cart-count"><?php echo $cart_count; ?></span></a>
                                               <span class="cart-total-price" style="color:white;"></span>
                                                
                                            </li>
                                                                <?php }else{?>
                                                                
                                            <li class="header-shop-cart"><a href="<?php echo base_url('user-login');?>" id='lblCartCount'><i class="flaticon-shopping-bag"></i><span class="cart-count">0</span></a>
                                               <span class="cart-total-price" style="color:white;"></span>
                                                
                                            </li>
                      <?php } ?>

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="<?php echo base_url();?>"><img src="assets/img/logo/logon.jpeg" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu-area-end -->

            <!-- header-search-area -->
            
        </header>
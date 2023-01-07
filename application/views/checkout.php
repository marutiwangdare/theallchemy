
<?php 
   if(isset($_SESSION['useremail']))
   { ?>
<!doctype html>
<html class="no-js" lang="">
    
<head>
                        <?php $this->load->view('includes/meta');?>
                        <style>
                        .yellow-btn{
                            
                            color:white!important;
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

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo base_url();?>assets/images/breadcrumb.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Shopping Checkout</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- checkout-area -->
            <section class="checkout-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            
                         <!-----cupon------->
                                        <div class="cart-coupon">
                                            <form action="<?php echo base_url('cupon');?>" method="POST">
                                   
                                                <input type="text" placeholder="Enter Coupon Code..." name="cupon">
                                                <button tyle="submit" class="btn yellow-btn" >Enter Coupon Code</button>
                                                         
                                                         <?php foreach($select_cupon as $fetch_cupon_new)
                                {?>
                                               <label><b>CUPONCODE:</b> <?php echo $fetch_cupon_new['cupon'];?>&nbsp;&nbsp;&nbsp;</label>
                                               <label><b>DISCOUNT: </b><?php echo $fetch_cupon_new['discount'];?> % OFF</label>
                                                   <input type="hidden" value="<?php echo $fetch_cupon_new['discount'];?>" id="per">

                                                <?php }?>
         <input type="hidden" value="<?php echo $select_sum_data[0]['sum_product'];?>" id="mrp">
    <!---- <input type="text" value="" id="result" style="background-color:green;">--->

                                         <p id="demo"></p>
       
                                            </form>
                                            <br><br>
    <button tyle="submit" class="btn yellow-btn" onclick="myFunction()">Submit Coupon Code</button>

                                           
                                            
                                        </div>
                                        <br><br>
                                        <!------------->
                            </div>
                                       
                        
                        <div class="col-lg-8">
                            <div class="checkout-wrap">
                                <h5 class="title">billing information</h5>
                                <form action="<?php echo base_url('checkout_save');?>" method="post" class="checkout-form" >
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="fName">FIRST NAME <span>*</span></label>
                                                <input type="text" name="first_name" id="fName" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="lName">Last NAME <span>*</span></label>
                                                <input type="text" name="last_name" id="lName" required>
                                            </div>
                                        </div>
                                       <!--- <div class="col-12">
                                            <div class="form-grp">
                                                <label for="cName">COMPANY NAME <small>(OPTIONAL)</small></label>
                                                <input type="text" id="cName">
                                            </div>
                                        </div>--->
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label>COUNTRY / REGION *</label>
                                                <select class="custom-select" name="county" required>
                                                    <option value="India">India</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label for="address">STREET ADDRESS *</label>
                                                <input type="text" name="street" id="address" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label>TOWN / CITY *</label>
                                                <input type="text" name="city" required>

                                               <!---- <select class="custom-select" name="city" required>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="New York">New York</option>
                                                    <option value="California">California</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>--->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label>STATE *</label>
                                                         <input type="text" name="state" id="address" required>

                                               <!--- <select class="custom-select" name="state" required>
                                                    <option value="New York">New York</option>
                                                    <option value="California">California</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="Houston">Houston</option>
                                                </select>--->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="zip">postal ZIP <span>*</span></label>
                                                <input type="text" id="zip" required name="zip">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="phone">Your PHONE <span>*</span></label>
                                                <input type="text" id="phone" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <label for="email">EMAIL ADDRESS <span>*</span></label>
                                                <input type="email" id="email" name="email" required>
                                            </div>
                                        </div>
                                      <!---  <div class="col-12">
                                            <div class="different-address custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="stda">
                                                <label class="custom-control-label" for="stda">SHIP TO A DIFFERENT ADDRESS?</label>
                                            </div>
                                        </div>--->
                                        <div class="col-12">
                                            <div class="form-grp mb-0">
                                                <label for="message">ORDER you have NOTES <small>(OPTIONAL)</small></label>
                                                <textarea name="message" id="message" placeholder="About Your Special Delivery Notes"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <aside class="shop-cart-sidebar checkout-sidebar">
                                <div class="shop-cart-widget">
                                    <h6 class="title">Cart Totals</h6>
                                        <ul>
                                            <li><span>SUBTOTAL</span> Rs. 
											<?php if($select_sum_data){
												echo $select_sum_data[0]['sum_product'];?>
												<input type="hidden" name="total" id="totalprice" />
												<input type="hidden" name="shipping" value="0" />
																						<!---	<input type="text" name="totalprice" id="totalprice" value="<?php echo $select_sum_data[0]['sum_product'];?>" />--->

											<?php 
											}?>
											</li><br>
											
											<!-------------java test--------->
										
	<!--------java test end----------->										
                                            <li>
                                                <span>SHIPPING</span>
                                                <div class="shop-check-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-total-amount"><span>TOTAL</span> <span class="amount">Rs.
											<?php if($select_sum_data){
												echo $select_sum_data[0]['sum_product'];
											}?>
											</span></li>
                                        </ul>
                                        <div class="paypal-method">
                                            <div class="paypal-method-flex">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">Cash on delivery</label>
                                                </div>
                                                <div class="paypal-logo"><img src="<?php echo base_url();?>img/images/payment_card.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="payment-terms">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">I have read and agree to the website terms
                                                and conditions *</label>
                                            </div>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn">PROCEED TO CHECKOUT</button>
                                    </form>
                                    <div class="col-md-5">
                                        
                                    </div>
                                    
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- checkout-area-end -->

            <!-- core-features -->
          <!---  <section class="core-features-area core-features-style-two">
                <div class="container">
                    <div class="core-features-border">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="core-features-item mb-50">
                                    <div class="core-features-icon">
                                        <img src="img/icon/core_features01.png" alt="">
                                    </div>
                                    <div class="core-features-content">
                                        <h6>Free Shipping On Over $ 50</h6>
                                        <span>Agricultural mean crops livestock</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="core-features-item mb-50">
                                    <div class="core-features-icon">
                                        <img src="img/icon/core_features02.png" alt="">
                                    </div>
                                    <div class="core-features-content">
                                        <h6>Membership Discount</h6>
                                        <span>Only MemberAgricultural livestock</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="core-features-item mb-50">
                                    <div class="core-features-icon">
                                        <img src="img/icon/core_features03.png" alt="">
                                    </div>
                                    <div class="core-features-content">
                                        <h6>Money Return</h6>
                                        <span>30 days money back guarantee</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="core-features-item mb-50">
                                    <div class="core-features-icon">
                                        <img src="img/icon/core_features04.png" alt="">
                                    </div>
                                    <div class="core-features-content">
                                        <h6>Online Support</h6>
                                        <span>30 days money back guarantee</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>---->
            <!-- core-features-end -->

            <!-- limited-offer-area -->
           <section class="" data-background="<?php echo base_url();?>assets/img/bg/b3.png">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <img src="<?php echo base_url();?>assets/img/bg/b3.png" style="width:100%;">
                        </div>
                        </div>
            </section>
           
            <!-- limited-offer-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
                        <?php $this->load->view('includes/footer');?>
 <!-- footer-area-end -->





		<!-- JS here -->
				           <?php $this->load->view('includes/script');?>

     <!------------script----------->
                                            <script>
function myFunction() {
 var discount= document.getElementById("per").value;
 var mrp= document.getElementById("mrp").value;
 var result=mrp-mrp*discount/100;
 alert(result);
document.getElementById("totalprice").value = result;

 
 
}
</script>
<!---------------------->
    
<script>
    $(function(){
        $("input.areaAdd").click(function(){
            $('input.areaAdd').not(this).prop('checked', false);
        })
    })
</script>
   </body>
</html>

<?php }else{?>
   <script> window.location.href='<?php echo base_url('user-login');?>'</script>
<?php }?>

<!doctype html>
<html class="no-js" lang="">
    
<head>                <?php $this->load->view('includes/meta');?>


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
            
            
            <!-- shop-cart-area -->
            <section class="shop-cart-area wishlist-area pt-100 pb-100" style="background-image:linear-gradient(to right, rgb(277 277 277 / 65%), rgb(277 277 277 / 82%)),url(assets/img/bg/bk.jpg);background-attachment:fixed;">
                <div class="container"   style="background-color:white;">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="table-responsive-xl">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                     <th class="product-subtotal">ORDER DATE</th>

                                            <th class="product-subtotal">STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><i class="flaticon-done-1"></i><a href="#"><img src="assets/images/products/meal166419118860.jpg" alt="" style="height:120px;width:auto;"></a>
                                            </td>
                                            <td class="product-name">
                                                <h4><a href="#">Glass Bell</a></h4>
                                                
                                            </td>
                                            <td class="product-price">Rs 190.00</td>
                                             <td class="product-price"> 25-Oct-2022</td>

                                            
                                                                                        <td class="product-price">DELIVERED</td>

                                
                                        </tr>
                                      
                                        <tr>
                                            <td class="product-thumbnail"><a href="#" class="wishlist-remove"><i class="flaticon-done-1"></i></a><a href="#"><img src="assets/images/products/meal1664191262DSC04132.JPG" alt="" style="height:120px;width:auto;"></a>
                                            </td>
                                            <td class="product-name">
                                                <h4><a href="shop-details.html">Agarbati Stand</a></h4>
                                                
                                            </td>
                                            <td class="product-price">Rs 150.00</td>
                                             <td class="product-price"> 20-Oct-2022</td>

                                            
                                                                                        <td class="product-price">DELIVERED</td>

                                
                                        </tr>
                                    </tbody>
                                </table>
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

		
    </body>

</html>

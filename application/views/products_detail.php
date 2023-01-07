<!doctype html>
<html class="no-js" lang="en">
    
<head>
                        <?php $this->load->view('includes/meta');?>
<style>
.yellow-btn {
    color:white!important;
}
.sticky-header {
    
    background-color:black!important;
}
.pbg {
    
    background-color:#ec1c4e!important;
}
.ptext {
    color:#ec1c4e!important;
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
                                <h2>Product Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-details-area -->
            	<?php foreach($select_products_detail as $fetch_product)
                                {?>
            <section class="shop-details-area pt-100 pb-100">
                <div class="container">
                    <div class="row mb-95">
                        <div class="col-xl-7 col-lg-6">
                            <div class="shop-details-nav-wrap">
                                <div class="shop-details-nav">
                                    <div class="shop-nav-item">
                                        <img src=<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?> alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="shop-details-img-wrap">
                                <div class="shop-details-active">
                                    <div class="shop-details-img">
                                        <a href="#" class="popup-image"><img src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?>" alt="" style=""></a>
                                    </div>
                                   <!--- <div class="shop-details-img">
                                        <a href="<?php echo base_url();?>asets/img/product/shop_details_img01.jpg" class="popup-image"><img src="<?php echo base_url();?>assets/img/product/shop_details_img01.jpg" alt=""></a>
                                    </div>--->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                         

                                  <form action="<?php echo base_url('cart-process');?>" method="post"  id="productFrm">                              
                            <div class="shop-details-content">
                                <span class="stock-info pbg">In Stock</span>
                                <h2><?php echo $fetch_product['title'];?></h2>
                                <div class="shop-details-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!---<span>- 3 Customer Reviews</span>--->
                                </div>
                                <div class="shop-details-price">
                                    <h2 class="ptext">Rs. <?php echo $fetch_product['price'];?> <del>Rs. <?php echo $fetch_product['price'];?> </del></h2>
                                </div>
                                <p><?php echo $fetch_product['product_description'];?></p>
                              <!---  <div class="product-details-size mb-40">
                                    <span>Size : </span>
                                   <!--- <a href="#">Guide</a>
                                    <a href="#">Can't Find Your Size?</a>--->
                                   <!-- <ul>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                    </ul>--->
                                </div>
                                <div class="perched-info">
                                    <div class="cart-plus">
                                        
                                            <div class="cart-plus-minus">
                                                <input type="text" value="1">
                                            </div>
                                    
                                    </div>
                                    
                                  
                                  <input type="hidden" id="userid" name="userid" value="<?php echo $_SESSION['userID']; ?>" />  
                                   <input type="hidden" id="productid" name="productid" value="<?php echo $fetch_product['productID'];?> " /> 
                                   <input type="hidden" id="categoryid" name="categoryid" value="<?php echo $fetch_product['categoryID'];?> " /> 
                                   <input type="hidden" id="title" name="title" value="<?php echo $fetch_product['title'];?> " /> 
                                   <input type="hidden" id="image" name="image" value="<?php echo $fetch_product['image'];?> " /> 
                                   <input type="hidden" id="price" name="price" value="<?php echo $fetch_product['price'];?> " /> 
                                    <input type="hidden" name="quantity" value="1 " /> 
                     
                  <button type="submit" class=" yellow-btn btn" id="product_detail_frm"> Add to cart</button>

                                                             
                                    
                              
 
                                  
                              </form>
                                <!--------add to cart test end------>
                                
                                
                                
                                </div>
                                <div class="shop-details-bottom">
                                   <!--- <h5><a href="#"><i class="far fa-heart"></i> Add To Wishlist</a></h5>--->
                                    <ul>
                                        <li>
                                            <span>Tag : </span>
                                            <a href="#">The Allchemy</a>
                                        </li>
                                        <li>
                                            <span>CATEGORIES :</span>
                                            <a href="#">General</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-----product detail start------>
                    
                                        <!-------product details------>
<hr style="border:1px solid black">
                                            <div class="row">
                                                 <div class="col-md-1">
                                
                                                </div>
                                               
                                                <div class="col-md-4">
                                                                    <h6 class="small-title">Product Description</h6>

                                                        <img src="<?php echo base_url();?>assets/images/products/<?php echo $fetch_product['image'];?>" alt="" style="height:350px;width:auto;">
                                
                                                </div>
                                                <div class="col-md-7">
                                                    <p><?php echo $fetch_product['product_description'];?></p>
                            <h6 class="small-title">Product Dimensions</h6>
         
                                     <p>Weight : <?php echo $fetch_product['weight'];?> grms</p>
                                     <p>Height : <?php echo $fetch_product['height'];?> cm</p>
                                    <p>Width : <?php echo $fetch_product['width'];?> cm</p>
                                                                         <p>Lenth : <?php echo $fetch_product['lenth'];?> cm</p>




                                                </div>
                                            </div>
                                            
                                            <!-------end------>
                                            
                              

                    <!----product detail end--->
                    </div>
                </div>
            </section>
            
                                    <?php } ?>

            <!-- shop-details-area-end -->

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
         $("button#product_detail_frm").click(function(e){
             e.preventDefault();
             var cust_id = "<?php echo $_SESSION['useremail']; ?>";
             if(cust_id==''||cust_id==null){
                 window.location.href='<?php echo base_url('user-login');?>';
             }else{
                $("form#productFrm").submit(); 
             }
             
         })
      </script>
      
      
        <script>
        setTimeout(function(){        
    $('#preloader').fadeOut();
    $('.ctn-preloader').delay(150).fadeOut('slow'); 
}, 5000);
        </script>
    
    
      
    
    </body>

</html>

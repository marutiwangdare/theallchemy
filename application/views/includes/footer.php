   <style type="text/css">
.inputbox {
    padding:5%!important;
    border:none!important;
    
}   
   
.mobileShow {
  display: none;
}
.copyright-text {
    
    display:inline!important;
}
.fixwhatsapp {
    position: fixed;
    bottom: 0;
    margin-left: auto;
    margin-right: auto;
    z-index:1;
    text-align:right!important;

}
    
}
/* Smartphone Portrait and Landscape */
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .copyright-text {
        
        display:none!important;
    }
  .mobileShow {
    display: inline;
    width: 100%;
    position: fixed;
    bottom: 0;
    margin-left: auto;
    margin-right: auto;
    z-index:1;
  }
  #outer
{
    width:100%;
    text-align: center;
}
.inner
{
    display: inline-block;
}

.btn-theme {
    
    background-color:#5e081c!important;
    
}
}

</style>

<div class="mobileShow" style="background-color:black;position:fixed;">
    
    <div id="outer">
  <div class="inner"><button type="submit" class="msgBtn" onClick="return true;" style="border:none;background-color:black;padding-top:6%;padding-bottom:6%;" > <a class="btn circle btn-theme effect btn-sm" href="tel:9068145151" ><i class="fas fa-phone-volume"></i>
CALL NOW
</a></button></div>
  <div class="inner"><button type="submit" class="msgBtn2" onClick="return true;" style="border:none;background-color:black;padding-top:6%;padding-bottom:6%;"> <a class="btn circle btn-theme effect btn-sm" href="<?php echo base_url('category');?>"></i> Categories
</a></button></div>
  
</div>
  
</div>

   <!--end fixed button-->
   <div class="row fixwhatsapp" style="text-align:left!important;">
        <a href="https://api.whatsapp.com/send?phone=919068145151&text=Hey%20i%20found%20your%20contact%20from%20The%20Allchemy%20Website%20I%20want%20to%20your%20help"><img src="https://cdn3.iconfinder.com/data/icons/social-media-logos-flat-colorful/2048/5302_-_Whatsapp-512.png" style="height:80px;width:80px;"></a>
        </div>
        <footer class="footer-area">
            <div class="footer-top pt-65 pb-25" style="background-image:linear-gradient(to right, rgb(277 277 277 / 90%), rgb(277 277 277 / 90%)),url(<?php echo base_url();?>/assets/images/abgt.png);background-attachment:fixed;">
                <div class="container">
                    <!--test--->
                    <div class="footer-newsletter-wrap footer-newsletter-two">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4">
                                <div class="newsletter-title">
                                    <h4>Subscribe Now !</h4>
                                    <span>Share your email address.</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <input type="email" placeholder="Enter Your Contact No...." class="inputbox">
                                         </div>
                             <div class="col-xl-3 col-lg-4">
                        <input type="email" placeholder="Enter Your Email...." class="inputbox">

              </div>
                       <div class="col-xl-2 col-lg-4">
                        
                                        <button class="btn yellow-btn">Subscribe</button>
                                        
              </div>
                            
                        </div>
                    </div>
                    <!---end test--->
                    
                    
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-30">
                                    <a href="#"><img src="<?php echo base_url();?>assets/img/logo/logo.png" alt="" style="height:80px;width:auto;"></a>
                                </div>
                                <div class="footer-text mb-35">
                                    <p>TheAllchemy's mission is to deliver everyday items that are often overlooked but add great value to our lives.</p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/theallchemy_/"><i class="fab fa-instagram"></i></a></li>
                                        
                                        
                                        <li><a href="https://www.linkedin.com/in/theallchemy-tac-64011124b/"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="<?php echo base_url('termsconditions');?>">Terms & Conditions</a></li>
                                        <li><a href="<?php echo base_url('delivery');?>">Delivery Policy</a></li>
                                        <li><a href="<?php echo base_url('shipping');?>">Shipping Policy</a></li>
                                      <!---  <li><a href="#">Accessibility</a></li>--->
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Quick Links</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="<?php echo base_url('return-policy');?>">Return Policy</a></li>
                                        
                                        <li><a href="<?php echo base_url('privacy-policy');?>">Privacy</a></li>
                                     <li><a href="<?php echo base_url('franchise');?>">Franchise</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="footer-contact">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>Office Address: 51, Shastri Nagar, C Block, Meerut, Uttar Pradesh - 250004</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Store Address: 110A & 111A, 1st Floor, Krishna Plaza, Tejgarhi, Meerut, Uttar Pradesh - 250004</li>
                                        <li><i class="fas fa-envelope-open"></i><a href="theallchemy@gmail.com" class="__cf_email__" >theallchemy@gmail.com</a></li>
                                        <li><i class="fas fa-fax"></i>+91 90681 45151</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap copyright-style-two" style="background-color:black;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2022 <a href="#">The AllChemy</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="<?php echo base_url();?>assets/img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
        
<?php 
if(!empty($this->session->flashdata('info_message_success')))
{
?>
   <script type="text/javascript">
         swal('',"<?php  echo $this->session->flashdata('info_message_success'); ?>",'success');
    </script>
<?php  //$this->session->unset_flashdata('info_message_success');
} ?>

<?php if(!empty($this->session->flashdata('info_message_error')))
{
?>
   <script type="text/javascript">
      swal('',"<?php  echo $this->session->flashdata('info_message_error'); ?>",'error');
   </script>
<?php  //$this->session->unset_flashdata('info_message_error'); 
} ?>

<?php if(!empty($this->session->flashdata('info_message')))
{
?>
   <script type="text/javascript">
       swal('',"<?php  echo $this->session->flashdata('info_message'); ?>",'');
   </script>
<?php  //$this->session->unset_flashdata('info_message_error'); 
} ?>



<script>
        setTimeout(function(){        
    $('#preloader').fadeOut();
    $('.ctn-preloader').delay(550).fadeOut('slow'); 
}, 2500);
        </script>
     
<style>

i {
    
    font-size:15px!important;
    padding-left:10px!important;
    padding-right:10px!important;
}
.sub-title {
    
    color:#5e081c!important;
}
</style>



<div class="header-top-area" style="background-color:#5e081c
;">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="header-top-left">
                                <ul>
								
								<li style="color:white !important;font-size:15px;">  <span><a href="https://www.instagram.com/theallchemy_/"><i class="fa fa-instagram" style="height:20px;width:auto;color:white;"></i>
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
                                    
                                    <!-----updated data------>
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
                                    
                                <!----   <li>
                                        <a href="<?php echo base_url('logout');?>"   style="color:white;font-size:15px;"><i class="fa fa-sign-out" aria-hidden="true"></i>
Logout Account</a>
                                    </li>
                                --->
                                            <?php }?>
                                                                <?php }else{?>
                                                                
                                            <li>
                                        <a href="<?php echo base_url('user-register');?>"   style="color:white;font-size:15px;"><i class="flaticon-user" class="phead"></i>Register</a>
                                        <span style="font-size:15px;color:black;">or</span>
                                        <a href="<?php echo base_url('user-login');?>" class="phead" style="color:white;font-size:15px;">Sign in</a>
                                    </li>
                            
                      <?php } ?>
                                    <!-------end updated data------->
                                      </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
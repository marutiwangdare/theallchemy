<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title> The Allchemy
</title>
      <meta name="description" content="The Allchemy">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <!--base css styles-->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/font-awesome/css/font-awesome.min.css">
      <!--page specific css styles-->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/gritter/css/jquery.gritter.css">
      <!--flaty css styles-->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/flaty.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/flaty-responsive.css">
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favi.png">
      <style>
         .login-page:before, .error-page:before, #main-content 
         {
            background: #000;
           background-image:url(assets/img/newbanner/1.jpg);background-attachment:fixed;
            background-repeat: no-repeat;
            background-size: cover;
         }
         .login-page .login-wrapper form 
         {
         	margin:50px auto;
            background-color: #f5f6f780;y
            border-radius:25px;
         }
         .login-page form h3 
         {
            color: #d61c24;
            font-weight:500;
         }
         .btn-red
         {
            background-color:black;
            color:#ffffff;
         }
         .btn-red:hover
         {
            background-color:green;
            color:#ffffff;
         }
         .btn-red:focus
         {
            background-color:#a72127;
            color:#ffffff;
         }
         .btn-red:active
         {
            background-color:#a72127;
            color:#ffffff;
         }
         .error_msg
         {
            width:340px;
            margin:0 auto;
         }
         .alert-success {
            color: #f5f6f7;
            background-color: #484848;
            border-color: #484848;
         }
         .alert-danger 
         {
            color: #f3f3f3;
            background-color: #bd161d;
            border-color: #bd161d;
         }
         .alert {
            padding: 13px;
            margin-bottom: 20px;
            font-size: 14px;
         }
         .close, .close:hover, .close:focus 
         {
            color: #fff !important;
            opacity:1;
         }
      </style>
   </head>
   <body class="login-page">
      <!-- BEGIN Main Content -->
      <div class="login-wrapper">
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
         <!-- BEGIN Login Form -->
         <form id="form-login" action="<?php echo base_url('Allchemy_adm/check_login')?>" method="post" style="border-radius:35px;">
             <center>
           <b> <h3 style="color:black;">ADMIN LOGIN</h3></b>
            </center>
            <hr/>
            <div class="form-group">
               <div class="controls">
                  <input type="text" placeholder="Username" name="username" class="form-control" required="" />
               </div>
            </div>
            <div class="form-group">
               <div class="controls">
                  <input type="password" placeholder="Password" name="password" class="form-control" required="" />
               </div>
            </div>
            <div class="form-group">
               <div class="controls" style="border-radius:15px;" >
                  <button type="submit" class="btn btn-red form-control">Sign In</button>
               </div>
            </div>
         </form>
         <!-- END Login Form -->
      </div>
      <!-- END Main Content -->
      <!--basic scripts-->
      <script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/admin/assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
      <script src="<?php echo base_url();?>assets/admin/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>assets/admin/assets/gritter/js/jquery.gritter.js"></script>

      <!--flaty scripts-->
      <script src="<?php echo base_url();?>assets/admin/js/flaty.js"></script>
      <script src="<?php echo base_url();?>assets/admin/js/flaty-demo-codes.js"></script>
   </body>
</html>
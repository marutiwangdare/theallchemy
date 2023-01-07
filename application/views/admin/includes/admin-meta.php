<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>The Allchemy
</title>
<meta name="description" content="The Allchemy">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--base css styles-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/data-tables/bootstrap3/dataTables.bootstrap.css" />

<!--page specific css styles-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/chosen-bootstrap/chosen.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/jquery-pwstrength/jquery.pwstrength.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/dropzone/downloads/css/dropzone.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/clockface/css/clockface.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

<!--flaty css styles-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/flaty.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/flaty-responsive.css">

<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favi.png">
<script src="<?php echo base_url();?>assets/admin/ckeditor/ckeditor.js"></script>
<style>
         .btn-black
         {
         background-color:#17181b;
         color:#ffffff !important;
         }
         .btn-black:hover
         {
         background-color:#17181b;
         color:#ffffff;
         }
         .btn-black:focus
         {
         background-color:#17181b;
         color:#ffffff;
         }
         .btn-black:active
         {
         background-color:#17181b;
         color:#ffffff;
         }
         .alert-success 
         {
            color: #fff;
            /* background-color: #17181b;*/
            background-color:#000000a1;
            border-color: #000000;
         }
         .alert-danger 
         {
            color: #f3f3f3;
            /*background-color: #bd161d;*/
            background-color: #b10d148f;
            border-color: #b10d14;
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
         .text-black
         {
            color:#000;
         }
      </style>
      <script>
			$(document).ready(function() {
				CKEDITOR.replace( 'editor1');
			});

		</script>
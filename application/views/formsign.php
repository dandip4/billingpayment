<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
  <title>viho - Premium Admin Template</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>
<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">    
      <div class="loader-p"></div>
    </div>
  </div>
  
  <?php $this->load->view($containerview); ?>

  <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
  <!-- feather icon js-->
  <script src="<?php echo base_url(); ?>assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="<?php echo base_url(); ?>assets/js/sidebar-menu.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
  <!-- Bootstrap js-->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins JS start-->
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
</body>
</html>
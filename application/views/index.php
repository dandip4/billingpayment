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

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/icofont.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themify.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flag-icon.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/feather-icon.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatables.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/vector-map.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color-1.css" media="screen">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>

<body>
  <div class="page-wrapper horizontal-wrapper" id="pageWrapper">
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/logo/logo.png" alt=""></a></div>
          <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/logo/dark-logo.png" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">
            <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
              <ul class="notification-dropdown onhover-show-div">
                <li>
                  <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                </li>
                <li class="noti-primary">
                  <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                    <div class="media-body">
                      <p>Delivery processing </p><span>10 minutes ago</span>
                    </div>
                  </div>
                </li>
                <li class="noti-secondary">
                  <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                    <div class="media-body">
                      <p>Order Complete</p><span>1 hour ago</span>
                    </div>
                  </div>
                </li>
                <li class="noti-success">
                  <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                    <div class="media-body">
                      <p>Tickets Generated</p><span>3 hour ago</span>
                    </div>
                  </div>
                </li>
                <li class="noti-danger">
                  <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                    <div class="media-body">
                      <p>Delivery Complete</p><span>6 hour ago</span>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="onhover-dropdown p-0">
              <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>


    <div class="page-body-wrapper horizontal-menu">
      <header class="main-nav">
        <div class="sidebar-user text-center">
          <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a>
          <img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
          <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
          <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6>
          </a>
          <p class="mb-0 font-roboto">Human Resources Department</p>
          <ul>
            <li><span><span class="counter">19.8</span>k</span>
              <p>Follow</p>
            </li>
            <li><span>2 year</span>
              <p>Experince</p>
            </li>
            <li><span><span class="counter">95.2</span>k</span>
              <p>Follower </p>
            </li>
          </ul>
        </div>
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>General</h6>
                  </div>
                </li>
                <li><a class="nav-link menu-title" href="<?= base_url(); ?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Master</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="<?= base_url('user/index'); ?>">User</a></li>
                    <li><a href="<?= base_url('prodi/index'); ?>">Prodi</a></li>
                    <li><a href="<?= base_url('kegiatan/index'); ?>">Kegiatan</a></li>
                  </ul>
                </li>
                <li><a class="nav-link menu-title link-nav" href="<?= base_url('pendaftaran/index'); ?>"><i data-feather="headphones"></i><span>Pendaftaran Saya</span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-body">
        <?php $this->load->view($containerview); ?>
      </div>

      <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>

      <script src="<?php echo base_url(); ?>assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/icons/feather-icon/feather-icon.js"></script>

      <script src="<?php echo base_url(); ?>assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/config.js"></script>

      <script src="<?php echo base_url(); ?>assets/js/bootstrap/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>

      <script src="<?php echo base_url(); ?>assets/js/chart/chartist/chartist.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/chart/knob/knob.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/chart/knob/knob-chart.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/chart/apex-chart/apex-chart.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/chart/apex-chart/stock-prices.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/prism/prism.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/clipboard/clipboard.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/counter/jquery.waypoints.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/counter/jquery.counterup.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/counter/counter-custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/custom-card/custom-card.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/notify/bootstrap-notify.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/dashboard/default.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/datepicker/date-picker/datepicker.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/datepicker/date-picker/datepicker.en.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/datepicker/date-picker/datepicker.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/form-wizard/form-wizard.js"></script>

      <script src="<?php echo base_url(); ?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/datatable/datatables/datatable.custom.js"></script>
</body>

</html>
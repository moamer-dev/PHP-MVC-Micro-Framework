<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPARQL<?=APP_NAME?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=DASHBOARD?>/img/favicon.png" rel="icon">
  <link href="<?=DASHBOARD?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=DASHBOARD?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=DASHBOARD?>/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=DASHBOARD?>/css/style.css" rel="stylesheet">

<!-- Yasgui CSS File -->
 
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/1.css" media="all">
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/2.css" media="all">
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/3.css" media="all">
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/4.css" media="all">
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/5.css" media="all">

   <!--  Yasgui JS File -->
  <script src="https://unpkg.com/@triply/yasgui@4/build/yasgui.min.js"></script>

  <!--  JQuery File 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  -->



  <!-- 
  <script src="<?=YASGUI?>/@triply/yasgui/build/yasgui.min.js"></script>
  <script src="<?=YASGUI?>/@triply/yasgui/build/yasgui.min.js"></script>
  <script src="<?=YASGUI?>/@triply/yasr/build/yasr.min.js"></script>
  -->

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?=ROOT?>" class="logo d-flex align-items-center">
        <img src="<?=ROOT?>/assets/images/logo.svg" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    
  </header><!-- End Header -->

  <!-- Start admin sidebar-->
  <?php $this->view('sidebar',$data) ?>

  <main id="main" class="main">
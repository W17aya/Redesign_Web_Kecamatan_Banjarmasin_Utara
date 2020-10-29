<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php include 'koneksi.php'; ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Karang Taruna Batu Ampar</title>

    <!-- Google Font: Source Sans Pro -->
  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- pace-progress -->
  <link rel="stylesheet" href="plugins/pace-progress/themes/black/pace-theme-flat-top.css">

  <style type="text/css">
    .ignielPelangi {
    background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
    background-size: 500% 500%;
    -webkit-animation: ignielGradient 12s ease infinite;
    -moz-animation: ignielGradient 12s ease infinite;
    animation: ignielGradient 12s ease infinite;
  }
  @-webkit-keyframes ignielGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
  }
  @-moz-keyframes ignielGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
  }
  @keyframes ignielGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
  }
  </style>

</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed pace-success">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-primary navbar-dark">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="dist/logo.png" alt="AdminLTE Logo" class="brand-image"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><b style="color: white;">Karang Taruna Batu Ampar</b></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3 navbar-no-expand ml-auto" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="index.php" class="nav-link">| Home</a>
          </li>
          <li class="nav-item">
            <a href="visimisi.php" class="nav-link">| Visi dan Misi</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">| Contact</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">| Login</a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
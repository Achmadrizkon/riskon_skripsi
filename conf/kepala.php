<?php 
include '../conf/koneksi.php';
$level_user     = $_SESSION['level_user'];
$id_pengguna    = $_SESSION['id_user'];
$nama_pengguna  = $_SESSION['nama_pengguna'];
?>
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/Setting/<?=$setting['logo_kantor'];?>" />

    <!-- TITLE -->
    <title><?=$judul;?></title>
    <style type="text/css">
        a.disabled {
          pointer-events: none;
          cursor: default;
      }
  </style>
  <!-- BOOTSTRAP CSS -->
  <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- STYLE CSS -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/dark-style.css" rel="stylesheet" />
  <link href="../assets/css/transparent-style.css" rel="stylesheet">
  <link href="../assets/css/skin-modes.css" rel="stylesheet" />

  <!--- FONT-ICONS CSS -->
  <link href="../assets/css/icons.css" rel="stylesheet" />

  <!-- COLOR SKIN CSS -->
  <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

  <style>
    .hide{
      display:none!important
  }
</style>
</head>
<!-- END: Head-->


<body class="app sidebar-mini ltr transparent-mode bg-img1" style="background-image: url(../images/Setting/<?=$setting['background_user'];?>);">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.php">
                            <img src="../images/Setting/<?=$setting['logo_kantor'];?>" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../images/Setting/<?=$setting['logo_kantor'];?>" class="header-brand-img light-logo1"
                            alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="../modul/internal/user.png" alt="profile-user"
                                                class="avatar profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?=$nama_pengguna;?></h5>
                                                        <small class="text-muted"><?=$level_user;?></small>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item" href="ubahpassword.php">
                                                    <i class="dropdown-icon fe fe-lock"></i> Ubah Password
                                                </a>
                                                <a class="dropdown-item" href="../conf/keluar.php">
                                                    <i class="dropdown-icon fe fe-power"></i> Keluar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <?php 
            if ($level_user == "Administrator") {
                include '../conf/Navigation/Administrator.php';
            }else if ($level_user == "User") {
                include '../conf/Navigation/User.php';
            }else{
                echo "<script>alert('Anda tidak memiliki Akses!');window.location='../index.php';</script>";
            }
            ?>
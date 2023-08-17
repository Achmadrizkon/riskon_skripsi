<?php 
include 'conf/koneksi.php';
if (!file_exists('conf/koneksi.php')){
    ?>
    <html>
    <title>Welcome</title>
    <script type="text/javascript">
        var counter = 10;
        function countDown()
        {
            if(counter>=0)
            {
                document.getElementById("timer").innerHTML = counter;
            }
            counter -= 1; 

            var counter2 = setTimeout("countDown()",1000);
            return;
        }
    </script>
    <style>
        #form_login{
            background-image:url('install/images/debut_light/debut_light.png');
            margin-top:50px;
            margin-left:400px;
            padding:20px;
            width:300px;
            border:2px solid;
            border-radius:10px; 
            border-color:#dedede;
        }

        #warning {
            background-image:url('install/images/debut_light/debut_light.png');
            color:red;

            margin-top:50px;
            margin-left:20px;
            padding:20px;
            width:700px;
            border:2px solid;
            border-radius:10px; 
            border-color:red;
        }
    </style>
    <body onload="countDown()">
        <?php
        echo "<center><div id=\"warning\" align=\"center\"></h5>WARNING ! <br/>File : koneksi.php tidak ditemukan, silahkan lakukan instalasi terlebih dahulu</h5><br/><img src=\"install/images/progress.gif\"><br/>

        <span id=\"timer\"> detik </span></div></center>";
        echo "<meta http-equiv=\"refresh\" content=\"10;install/install.php\">";
    } else {
        ?>
        <?php 
        if (isset($_POST['masuk'])) {
            include 'conf/masuk.php';

        } else {

        }
        ?>

        <!DOCTYPE html> 
        <html lang="en" dir="ltr">

        <head>

            <!-- META DATA -->
            <meta charset="UTF-8">
            <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- FAVICON -->
            <link rel="shortcut icon" type="image/x-icon" href="images/Setting/<?=$setting['logo_kantor'];?>" />

            <!-- TITLE -->
            <title><?=$apk;?></title>

            <!-- BOOTSTRAP CSS -->
            <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

            <!-- STYLE CSS -->
            <link href="assets/css/style.css" rel="stylesheet" />
            <link href="assets/css/dark-style.css" rel="stylesheet" />
            <link href="assets/css/transparent-style.css" rel="stylesheet">
            <link href="assets/css/skin-modes.css" rel="stylesheet" />

            <!--- FONT-ICONS CSS -->
            <link href="assets/css/icons.css" rel="stylesheet" />

            <!-- COLOR SKIN CSS -->
            <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

        </head>

        <body class="app sidebar-mini ltr login-img" style="background-image: url(images/Setting/<?=$setting['background_login'];?>);">

            <!-- BACKGROUND-IMAGE -->
            <div class="">

                <!-- GLOABAL LOADER -->
                <div id="global-loader">
                    <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
                </div>
                <!-- /GLOABAL LOADER -->

                <!-- PAGE -->
                <div class="page">
                    <div class="">

                        <!-- CONTAINER OPEN -->
                        <div class="col col-login mx-auto mt-7">
                            <div class="text-center">
                                <img src="images/Setting/<?=$setting['logo_kantor'];?>" width="60px">
                                <h4 style="color: white; font-weight: bold;"><?=$apk;?></h4>
                            </div>
                        </div>

                        <div class="container-login100">
                            <div class="wrap-login100 p-6">
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li class="mx-0"><a href="#masuk" class="active" data-bs-toggle="tab">Masuk</a></li>
                                               <li class="mx-0"><a href="register.php">Daftar</a></li> 
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body p-0 pt-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="masuk">
                                                <form method="POST">
                                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-face text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Username" name="username">
                                                    </div>
                                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password">
                                                    </div>
                                                    <div class="wrap-input100 validate-input input-group">
                                                        Lupa Password? <a href="reset.php"> Reset</a>
                                                    </div>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn btn-primary" name="masuk">
                                                            Masuk
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="daftar">
                                                <form method="POST">
                                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password">
                                                    </div>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn btn-primary" name="daftar">
                                                            Daftar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!-- End PAGE -->

            </div>
            <!-- BACKGROUND-IMAGE CLOSED -->

            <!-- JQUERY JS -->
            <script src="assets/js/jquery.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- SHOW PASSWORD JS -->
            <script src="assets/js/show-password.min.js"></script>

            <!-- GENERATE OTP JS -->
            <script src="assets/js/generate-otp.js"></script>

            <!-- Perfect SCROLLBAR JS-->
            <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

            <!-- Color Theme js -->
            <script src="assets/js/themeColors.js"></script>

            <!-- CUSTOM JS -->
            <script src="assets/js/custom.js"></script>

        </body>

        </html>
        <?php } ?>
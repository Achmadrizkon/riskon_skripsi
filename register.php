        <?php
        include 'conf/koneksi.php';
        if (isset($_POST['new'])) {
            include 'conf/auth/new.php';
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
            <link rel="shortcut icon" type="image/x-icon" href="Application/Module/internal/logo.png" />

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

        <body class="app sidebar-mini login-img ltr transparent-mode bg-img3">

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
                            </div>
                        </div>

                        <div class="container-login100">
                            <div class="wrap-login100 p-6">
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li class="mx-0"><a href="index.php">Masuk</a></li>
                                                <li class="mx-0"><a href="#new" class="active" data-bs-toggle="tab">Daftar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body p-0 pt-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="new">
                                                <form method="POST">
                                                    <div class="wrap-input100 validate-input input-group">
                                                        <a class="input-group-text bg-white text-muted">
                                                            <i class="mdi mdi-account text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Masukkan Nama Lengkap" name="nama_pemohon">
                                                    </div>
                                                    <div class="wrap-input100 validate-input input-group">
                                                        <a class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-whatsapp text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Masukkan Nomor Whatsapp" name="wa_pemohon">
                                                    </div>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn btn-primary" name="new">
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

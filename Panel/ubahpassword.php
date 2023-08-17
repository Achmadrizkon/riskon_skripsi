<?php 
$judul = "Ubah Password";
include '../conf/kepala.php';

?>
<!-- BEGIN: Page Main-->
<!-- BEGIN: Page Main-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title"></h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <form method="POST" action="Beranda/ubahpassword.php" enctype="multipart/form-data"class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?=$judul;?></h3>
                        </div>
                        <div class=" card-body">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Password Lama</label>
                                    <input id="passwordlama" class="form-control" type="password" name="passwordlama" placeholder="Masukkan Password Lama" required>
                                </div>
                            </div>    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Password Baru</label>
                                    <input id="passwordbaru" class="form-control" type="password" name="passwordbaru" placeholder="Masukkan Password Baru" required>
                                </div>
                            </div>    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Verifikasi Password</label>
                                    <input id="ulangpassword" class="form-control" type="password" name="ulangpassword" placeholder="Masukkan Verifikasi Password" required>
                                </div>
                            </div>    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn btn-primary" style="float: right;">Ubah Password</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>    

                        </div>
                    </form>
                </div>    
            </div>
        </div>
        <!-- End Row-->
    </div>
    <!-- CONTAINER CLOSED -->

</div>
</div>
<!--app-content closed-->
</div>         

<?php 
include '../conf/kaki.php';
?>
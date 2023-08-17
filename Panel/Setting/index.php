
 <?php 
    $sql    = mysqli_query($koneksi,"SELECT * FROM setting WHERE id_setting='1'");
    $data   = mysqli_fetch_array($sql);
    ?>
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
    <form method="post" class="card" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
    <div class="card-header">
    <h3 class="card-title"><?=$judul;?></h3>
    </div>
    <div class=" card-body">
    
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">Nama Kantor</label>
         <input id="nama" class="form-control" type="text" name="nama" value="<?=$data['nama'];?>" required>
         </div>
         </div>
         
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">Alamat Kantor</label>
         <input id="alamat" class="form-control" type="text" name="alamat" value="<?=$data['alamat'];?>" required>
         </div>
         </div>
         
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">Nama Ketua</label>
         <input id="nama_ketua" class="form-control" type="text" name="nama_ketua" value="<?=$data['nama_ketua'];?>" required>
         </div>
         </div>
         
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">NIP Ketua (Jika Ada)</label>
         <input id="nip_ketua" class="form-control" type="text" name="nip_ketua" value="<?=$data['nip_ketua'];?>" required>
         </div>
         </div>
         
   <div class="col-lg-12">
   <div class="form-group">
   <label class="form-label">Logo Kantor</label>
   <input type="file" id="logo_kantor" class="dropify" data-default-file="" name="logo_kantor">
   </div>
   </div>
   
   <div class="col-lg-12">
   <div class="form-group">
   <label class="form-label">Background Login</label>
   <input type="file" id="background_login" class="dropify" data-default-file="" name="background_login">
   </div>
   </div>
   
   <div class="col-lg-12">
   <div class="form-group">
   <label class="form-label">Background Beranda</label>
   <input type="file" id="background_user" class="dropify" data-default-file="" name="background_user">
   </div>
   </div>
              

<div class="col-lg-12">
<div class="form-group">
<input type='hidden' name='id' value='1'>
      <button style='float: right;' class='btn btn-primary' name='ubah'>Ubah</button>
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

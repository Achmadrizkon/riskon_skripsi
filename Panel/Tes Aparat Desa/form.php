
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM tes_aparat WHERE id_tes_aparat='$id'");
    $data   = mysqli_fetch_array($sql);
    }else{

    }
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
			<input type="hidden" name="id_pendaftaran_aparat" value="<?=$_GET['id'];?>">
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal tes_aparat</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_tes_aparat"  value="<?=date("m/d/Y", strtotime($data['tanggal_tes_aparat']));?>" required>
	</div>
	</div>
	
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Lokasi tes_aparat</label>
			<input id="lokasi_tes_aparat" class="form-control" type="text" name="lokasi_tes_aparat" value="<?=$data['lokasi_tes_aparat'];?>" required>
			</div>
			</div>
			           

<div class="col-lg-12">
<div class="form-group">
<?=$button;?>
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


 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM pendaftaran_aparat WHERE id_pendaftaran_aparat='$id'");
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
    
    		<input type="hidden" name="id_pembukaan_pendaftaran_aparat" value="<?=$_GET['ids'];?>">
    		<input type="hidden" name="id_user" value="<?=$id_pengguna;?>">
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Nama Lengkap</label>
			<input id="nama_lengkap" class="form-control" type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'];?>" required>
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Alamat</label>
			<input id="alamat" class="form-control" type="text" name="alamat" value="<?=$data['alamat'];?>" required>
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Kontak</label>
			<input id="kontak" class="form-control" type="text" name="kontak" value="<?=$data['kontak'];?>" required>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Jenis Kelamin</label>
	<select name="jk"  class="form-control select2-show-search form-select" data-placeholder="Pilih Salah Satu" id="jk" required>
	<option value>-- Pilih Jenis Kelamin --</option>
	<?php
	if ($data['jk'] == NULL){

		}else{
			?>
			<option value="<?=$data['jk'];?>" selected><?=$data['jk'];?></option>		
			<?php
		}
		?>
				<?php
				if($data['jk'] == "Laki-Laki"){

					}else{
						?>
						<option value="Laki-Laki">Laki-Laki</option>
						<?php
					}
					;?>
				<?php
				if($data['jk'] == "Perempuan"){

					}else{
						?>
						<option value="Perempuan">Perempuan</option>
						<?php
					}
					;?>        
			</select>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Lahir</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_lahir"  value="<?=date("m/d/Y", strtotime($data['tanggal_lahir']));?>" required>
	</div>
	</div>
	
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Tempat Lahir</label>
			<input id="tempat_lahir" class="form-control" type="text" name="tempat_lahir" value="<?=$data['tempat_lahir'];?>" required>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Scan KTP</label>
	<input type="file" id="ktp" class="dropify" data-default-file="" name="ktp">
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Scan Ijasah Terakhir</label>
	<input type="file" id="ijasah" class="dropify" data-default-file="" name="ijasah">
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

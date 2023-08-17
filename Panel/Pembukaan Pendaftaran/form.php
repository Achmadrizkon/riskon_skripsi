
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM pembukaan_pendaftaran WHERE id_pembukaan_pendaftaran='$id'");
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
    
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Kecamatan</label>
        <select name="id_kecamatan" class="select2 browser-default" id="id_kecamatan" required>
		<option value>-- Pilih kecamatan --</option>
		<?php
			$row = mysqli_query($koneksi,"SELECT * FROM kecamatan");
            while ($rows = mysqli_fetch_array($row)) {	
            	 if ($data['id_kecamatan'] == $rows['id_kecamatan']) {
			?>
			<option value="<?=$rows['id_kecamatan'];?>" selected><?=$rows['nama_kecamatan'];?></option>		
			<?php
			}else{
			?>
			<option value="<?=$rows['id_kecamatan'];?>"><?=$rows['nama_kecamatan'];?></option>		
		<?php
			}
			}
		?>
		</select>
		</div>
		</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Mulai</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_mulai"  value="<?=date("m/d/Y", strtotime($data['tanggal_mulai']));?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Selesai</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_selesai"  value="<?=date("m/d/Y", strtotime($data['tanggal_selesai']));?>" required>
	</div>
	</div>

	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Desa</label>
	<input class="form-control" type="text"  name="desa"  value="<?=$data['desa'];?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Status Pembukaan</label>
	<select name="status_pembukaan_pendaftaran"  class="form-control select2-show-search form-select" data-placeholder="Pilih Salah Satu" id="status_pembukaan_pendaftaran" required>
	<option value>-- Pilih Status Pembukaan --</option>
	<?php
	if ($data['status_pembukaan_pendaftaran'] == NULL){

		}else{
			?>
			<option value="<?=$data['status_pembukaan_pendaftaran'];?>" selected><?=$data['status_pembukaan_pendaftaran'];?></option>		
			<?php
		}
		?>
				<?php
				if($data['status_pembukaan_pendaftaran'] == "Mulai"){

					}else{
						?>
						<option value="Mulai">Mulai</option>
						<?php
					}
					;?>
				<?php
				if($data['status_pembukaan_pendaftaran'] == "Selesai"){

					}else{
						?>
						<option value="Selesai">Selesai</option>
						<?php
					}
					;?>        
			</select>
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

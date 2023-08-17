
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM seleksi WHERE id_seleksi='$id'");
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
	<label class="form-label">id_tes</label>
	        <select name="id_tes" class="select2 browser-default" id="id_tes" required>
			<option value>-- Pilih id_tes --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM tes");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_tes'] == $rows['id_tes']) {
				?>
				<option value="<?=$rows['id_tes'];?>" selected><?=$rows['id_tes'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_tes'];?>"><?=$rows['id_tes'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Acc</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_seleksi"  value="<?=date("m/d/Y", strtotime($data['tanggal_seleksi']));?>" required>
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

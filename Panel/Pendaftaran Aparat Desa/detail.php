<?=$id_reg = $_GET['id']; 

$mm = mysqli_query($koneksi,"SELECT * FROM kepaladesa 
JOIN aparatdesa USING(id_aparatdesa)
JOIN calon_aparat USING(id_calon_aparat)
JOIN seleksi_aparat USING(id_seleksi_aparat)
JOIN tes_aparat USING(id_tes_aparat)
JOIN pendaftaran_aparat USING(id_pendaftaran_aparat)
JOIN pembukaan_pendaftaran_aparat USING(id_pembukaan_pendaftaran_aparat)
JOIN kecamatan USING(id_kecamatan) WHERE id_pembukaan_pendaftaran_aparat='$id_reg'");
$jml = mysqli_num_rows($mm);
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
 			<div class="row row-sm">
 				<div class="col-lg-12">
 					<div class="card">
 						<div class="card-header">
 							<h3 class="card-title">Pendaftaran Aparat Desa</h3>
 							<?php 
                $rom = mysqli_query($koneksi,"SELECT * FROM pembukaan_pendaftaran_aparat WHERE id_pembukaan_pendaftaran_aparat='$id_reg'");
                $roms = mysqli_fetch_array($rom);
                $s = date('Y-m-d');
                $m = date('Y-m-d', strtotime($roms['tanggal_mulai']));
                $sl = date('Y-m-d', strtotime($roms['tanggal_selesai']));
                if ($s >= $m) {
                  if ($s <= $sl) {
               ?>
                <?php 
                      if ($jml >= 1) {
                      ?>
                         
                      <?php
                      }else{
                      ?>
               <?php include "enter.php"; ?>
              <a href="index.php?page=<?=$folder;?>&form=Tambah&ids=<?=$_GET['id'];?>" style="float: right;" class="btn btn-outline-primary btn-sm">
                <i class="fa fa-plus"></i> Tambah Calon
              </a>
                      <?php
                      }
                   ?>               
              <?php 
                  } else {
                  }
                } else {
                }
             ?>
 						</div>
 						<div class="card-body">
<div class="panel panel-primary">
  <div class="tab-menu-heading">
    <div class="tabs-menu">
      <!-- Tabs -->
      <ul class="nav panel-tabs panel-success" role="tablist">
        <li>
          <a href="#t1" class="active" data-bs-toggle="tab" aria-selected="true" role="tab">
            <span>
              <i class="fe fe-kecamatans me-1"></i>
            </span>Data Pendaftar </a>
        </li>
        <li>
          <a href="#t2" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">
            <span>
              <i class="fe fe-calendar me-1"></i>
            </span>Informasi Tes </a>
        </li>
        <li>
          <a href="#t3" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">
            <span>
              <i class="fe fe-settings me-1"></i>
            </span>Seleksi </a>
        </li>
        <li>
          <a href="#t4" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">
            <span>
              <i class="fe fe-bell me-1"></i>
            </span>Aparat Desa </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="panel-body tabs-menu-body">
    <div class="tab-content">
      <div class="tab-pane active show" id="t1" role="tabpanel">
         <?php include $folder.'/ver/1.php'; ?>
      </div>
      <div class="tab-pane" id="t2" role="tabpanel">
         <?php include $folder.'/ver/2.php'; ?>
      </div>
      <div class="tab-pane" id="t3" role="tabpanel">
         <?php include $folder.'/ver/3.php'; ?>
      </div>
      <div class="tab-pane" id="t4" role="tabpanel">
         <?php include $folder.'/ver/4.php'; ?>
      </div>
    </div>
  </div>
</div> 							
</div>
</div>
</div>
</div>
<!-- End Row -->

</div>
<!-- CONTAINER CLOSED -->

</div>
</div>
<!-- END: Page Main-->

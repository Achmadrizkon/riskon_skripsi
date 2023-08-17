
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
<?php 
$sql = mysqli_query($koneksi,"SELECT * FROM pembukaan_pendaftaran
JOIN user USING(id_user)");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pembukaan_pendaftaran'];
?>
<div class="col-xl-12 col-xxl-6">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-xl-2 col-sm-2 col-md-12">
          <div class="mt-3 mb-5">
            <span class="settings-icon bg-primary-transparent text-primary">
              <i class="fe fe-alert-octagon"></i>
            </span>
          </div>
        </div>
        <div class="col-xl-10 col-sm-10 col-md-12">
          <a href="javascript:void(0)">
            <h4 class="mb-1 text-dark"><?=$data['nama_user'];?></h4>
          </a>
          <p>Pendaftaran dibuka dari tanggal <?=tgl($data['tanggal_mulai']);?> sampai tanggal <?=tgl($data['tanggal_selesai']);?></p>
          <a href="javascript:void(0)">Cek Calon Pendaftar <i class="ion-chevron-right fs-10 ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<!-- End Row -->

</div>
<!-- CONTAINER CLOSED -->

</div>
</div>
<!-- END: Page Main-->

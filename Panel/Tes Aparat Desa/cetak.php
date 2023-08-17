

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
						<form method="POST" action="../laporan/tes_aparat.php" target="_blank">
							<div class="card-header">
								<h3 class="card-title"><?=$folder;?></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-control fc-datepicker" placeholder="Dari Tanggal" type="text"  name="dari" required>&nbsp;&nbsp;
								<input class="form-control fc-datepicker" placeholder="Sampai Tanggal" type="text"  name="sampai" required>&nbsp;&nbsp;
						        						        <select name="id_pangkat_aparat" class="select2 browser-default" id="id_pangkat_aparat" required>
								<option value>-- Pilih Pangkat Aparat --</option>
								<?php
									$row = mysqli_query($koneksi,"SELECT * FROM pangkat_aparat");
					                while ($rows = mysqli_fetch_array($row)) {	
					                	 if ($data['id_pangkat_aparat'] == $rows['id_pangkat_aparat']) {
									?>
									<option value="<?=$rows['id_pangkat_aparat'];?>" selected><?=$rows['pangkat_aparat_desa'];?></option>		
									<?php
									}else{
									?>
									<option value="<?=$rows['id_pangkat_aparat'];?>"><?=$rows['pangkat_aparat_desa'];?></option>		
								<?php
									}
									}
								?>
								</select>&nbsp;&nbsp;
								<button style="float: right;" class="btn btn-outline-primary btn-lg">
									<i class="fa fa-print"></i>
								</button>
							</div>
						</form>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
									<thead>
										<tr>
											<th>No</th>
											
											<th>Pangkat Aparat</th>

    <th>Pemohon</th>
    <th>Desa</th>

    <th>Nama Lengkap</th>

    <th>Alamat</th>

    <th>Kontak</th>

    <th>Jenis Kelamin</th>

    <th>Tanggal Lahir</th>

    <th>Tempat Lahir</th>

    <th>Tanggal tes_aparat</th>

    <th>Lokasi tes_aparat</th>

</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM tes_aparat
JOIN pendaftaran_aparat USING(id_pendaftaran_aparat)
JOIN pembukaan_pendaftaran_aparat USING(id_pembukaan_pendaftaran_aparat)
JOIN pangkat_aparat USING(id_pangkat_aparat)
JOIN user USING(id_user)
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_tes_aparat'];
?>
<tr>
<td><?=$no++;?></td>
<td><?=$data['pangkat_aparat_desa'];?></td>

<td><?=$data['nama_user'];?></td>
<td><?=$data['desa'];?></td>

<td><?=$data['nama_lengkap'];?></td>

<td><?=$data['alamat'];?></td>

<td><?=$data['kontak'];?></td>

<td><?=$data['jk'];?></td>

<td><?=tgl($data['tanggal_lahir']);?></td>

<td><?=$data['tempat_lahir'];?></td>

<td><?=tgl($data['tanggal_tes_aparat']);?></td>

<td><?=$data['lokasi_tes_aparat'];?></td>


											</tr>
										<?php } ?>
									</tbody>
								</table>
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


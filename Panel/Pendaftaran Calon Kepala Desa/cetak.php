 

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
						<form method="POST" action="../laporan/pendaftaran.php" target="_blank">
							<div class="card-header">
								<h3 class="card-title"><?=$folder;?></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-control fc-datepicker" placeholder="Dari Tanggal" type="text"  name="dari" required>&nbsp;&nbsp;
								<input class="form-control fc-datepicker" placeholder="Sampai Tanggal" type="text"  name="sampai" required>&nbsp;&nbsp;
						        <select name="id_kecamatan" class="select2 browser-default" id="id_kecamatan" required>
								<option value>-- Pilih Kecamatan --</option>
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
											

    <th>Kecamatan</th>
    <th>Desa</th>

    <th>Nama Lengkap</th>

    <th>Alamat</th>

    <th>Kontak</th>

    <th>Jenis Kelamin</th>

    <th>Tanggal Lahir</th>

    <th>Tempat Lahir</th>

    <th>Scan KTP</th>

    <th>Scan Ijasah Terakhir</th>

</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM pendaftaran
JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN kecamatan USING(id_kecamatan)
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pendaftaran'];
?>
<tr>
<td><?=$no++;?></td>

<td><?=$data['nama_kecamatan'];?></td>
<td><?=$data['desa'];?></td>

<td><?=$data['nama_lengkap'];?></td>

<td><?=$data['alamat'];?></td>

<td><?=$data['kontak'];?></td>

<td><?=$data['jk'];?></td>

<td><?=tgl($data['tanggal_lahir']);?></td>

<td><?=$data['tempat_lahir'];?></td>

<td><a target="_BLANK" href="../images/Pendaftaran Calon Kepala Desa/<?=$data['ktp'];?>"><img src="../images/Pendaftaran Calon Kepala Desa/<?=$data['ktp'];?>" width="100px"></a></td>

<td><a target="_BLANK" href="../images/Pendaftaran Calon Kepala Desa/<?=$data['ijasah'];?>"><img src="../images/Pendaftaran Calon Kepala Desa/<?=$data['ijasah'];?>" width="100px"></a></td>


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


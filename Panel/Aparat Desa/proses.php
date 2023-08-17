
<?php 
include '../../conf/koneksi.php';
$id_seleksi_aparat		= $_GET['id'];
$tanggal_calon_aparat		= date("Y-m-d");

$sql = mysqli_query($koneksi,"INSERT INTO calon_aparat SET id_seleksi_aparat='$id_seleksi_aparat', tanggal_calon_aparat='$tanggal_calon_aparat'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Aparat Desa'</script>";

 ?>
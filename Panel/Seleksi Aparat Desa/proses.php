
<?php 
include '../../conf/koneksi.php';
$id_tes_aparat		= $_GET['id'];
$tanggal_seleksi_aparat		= date("Y-m-d");

$sql = mysqli_query($koneksi,"INSERT INTO seleksi_aparat SET id_tes_aparat='$id_tes_aparat', tanggal_seleksi_aparat='$tanggal_seleksi_aparat'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Aparat Desa'</script>";
 ?>
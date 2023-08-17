
<?php 
include '../../conf/koneksi.php';
$id_pendaftaran_aparat		= $_POST['id_pendaftaran_aparat'];
$tanggal_tes_aparat		= date("Y-m-d", strtotime($_POST['tanggal_tes_aparat']));
$lokasi_tes_aparat		= $_POST['lokasi_tes_aparat'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO tes_aparat SET id_tes_aparat=NULL, id_pendaftaran_aparat='$id_pendaftaran_aparat', tanggal_tes_aparat='$tanggal_tes_aparat', lokasi_tes_aparat='$lokasi_tes_aparat'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Aparat Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE tes_aparat SET id_tes_aparat='$id', id_pendaftaran_aparat='$id_pendaftaran_aparat', tanggal_tes_aparat='$tanggal_tes_aparat', lokasi_tes_aparat='$lokasi_tes_aparat' WHERE id_tes_aparat='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pendaftaran Aparat Desa'</script>";
}
 ?>
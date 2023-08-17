
<?php 
include '../../conf/koneksi.php';
$id_pendaftaran		= $_POST['id_pendaftaran'];
$tanggal_tes		= date("Y-m-d", strtotime($_POST['tanggal_tes']));
$lokasi_tes		= $_POST['lokasi_tes'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO tes SET id_tes=NULL, id_pendaftaran='$id_pendaftaran', tanggal_tes='$tanggal_tes', lokasi_tes='$lokasi_tes'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE tes SET id_tes='$id', id_pendaftaran='$id_pendaftaran', tanggal_tes='$tanggal_tes', lokasi_tes='$lokasi_tes' WHERE id_tes='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}
 ?>
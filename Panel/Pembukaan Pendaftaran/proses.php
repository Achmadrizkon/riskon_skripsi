
<?php 
include '../../conf/koneksi.php';
$id_kecamatan		= $_POST['id_kecamatan'];
$tanggal_mulai		= date("Y-m-d", strtotime($_POST['tanggal_mulai']));
$tanggal_selesai		= date("Y-m-d", strtotime($_POST['tanggal_selesai']));
$desa		= $_POST['desa'];
$status_pembukaan_pendaftaran       = $_POST['status_pembukaan_pendaftaran'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO pembukaan_pendaftaran SET  id_kecamatan='$id_kecamatan', desa='$desa', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', status_pembukaan_pendaftaran='$status_pembukaan_pendaftaran'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pembukaan Pendaftaran'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE pembukaan_pendaftaran SET id_pembukaan_pendaftaran='$id', id_kecamatan='$id_kecamatan', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', status_pembukaan_pendaftaran='$status_pembukaan_pendaftaran', desa='$desa' WHERE id_pembukaan_pendaftaran='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pembukaan Pendaftaran'</script>";
}
 ?>
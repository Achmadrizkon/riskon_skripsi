
<?php 
include '../../conf/koneksi.php';
$id_kecamatan        = $_POST['id_kecamatan'];
$id_pangkat_aparat		= $_POST['id_pangkat_aparat'];
$tanggal_mulai		= date("Y-m-d", strtotime($_POST['tanggal_mulai']));
$tanggal_selesai	= date("Y-m-d", strtotime($_POST['tanggal_selesai']));
$desa		         = $_POST['desa'];
$status_pembukaan_pendaftaran_aparat       = $_POST['status_pembukaan_pendaftaran_aparat'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO pembukaan_pendaftaran_aparat SET  id_kecamatan='$id_kecamatan', id_pangkat_aparat='$id_pangkat_aparat', desa='$desa', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', status_pembukaan_pendaftaran_aparat='$status_pembukaan_pendaftaran_aparat'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pembukaan Pendaftaran Aparat Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE pembukaan_pendaftaran_aparat SET id_kecamatan='$id_kecamatan', id_pangkat_aparat='$id_pangkat_aparat', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', status_pembukaan_pendaftaran_aparat='$status_pembukaan_pendaftaran_aparat', desa='$desa' WHERE id_pembukaan_pendaftaran_aparat='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pembukaan Pendaftaran Aparat Desa'</script>";
}
 ?>
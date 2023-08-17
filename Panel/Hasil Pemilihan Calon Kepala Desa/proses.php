
<?php 
include '../../conf/koneksi.php';
$id_calon		= $_POST['id_calon'];
$tanggal_hasil		= date("Y-m-d");
$hasil_polling		= $_POST['hasil_polling'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO hasil SET id_hasil=NULL, id_calon='$id_calon', tanggal_hasil='$tanggal_hasil', hasil_polling='$hasil_polling'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE hasil SET id_hasil='$id', id_calon='$id_calon', tanggal_hasil='$tanggal_hasil', hasil_polling='$hasil_polling' WHERE id_hasil='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}
 ?>
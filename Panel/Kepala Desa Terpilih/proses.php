
<?php 
include '../../conf/koneksi.php';
$id_hasil		= $_POST['id_hasil'];
$tanggal_pelantikan		= date("Y-m-d", strtotime($_POST['tanggal_pelantikan']));

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO kepaladesa SET id_kepaladesa=NULL, id_hasil='$id_hasil', tanggal_pelantikan='$tanggal_pelantikan'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE kepaladesa SET id_kepaladesa='$id', id_hasil='$id_hasil', tanggal_pelantikan='$tanggal_pelantikan' WHERE id_kepaladesa='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}
 ?>
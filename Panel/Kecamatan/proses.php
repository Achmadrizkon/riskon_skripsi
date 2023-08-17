
<?php 
include '../../conf/koneksi.php';
$nama_kecamatan		= $_POST['nama_kecamatan'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO kecamatan SET id_kecamatan=NULL, nama_kecamatan='$nama_kecamatan'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Kecamatan'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE kecamatan SET id_kecamatan='$id', nama_kecamatan='$nama_kecamatan' WHERE id_kecamatan='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Kecamatan'</script>";
}
 ?>
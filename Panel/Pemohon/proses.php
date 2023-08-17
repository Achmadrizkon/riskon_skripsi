
<?php 
include '../../conf/koneksi.php';
$nama_user		= $_POST['nama_user'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$level_user		= "User";

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO user SET id_user=NULL, nama_user='$nama_user', username='$username', password='$password', level_user='$level_user'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pemohon'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE user SET id_user='$id', nama_user='$nama_user', username='$username', password='$password', level_user='$level_user' WHERE id_user='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pemohon'</script>";
}
 ?>
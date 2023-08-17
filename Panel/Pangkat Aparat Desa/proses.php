
<?php 
include '../../conf/koneksi.php';
$pangkat_aparat_desa		= $_POST['pangkat_aparat_desa'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO pangkat_aparat SET id_pangkat_aparat=NULL, pangkat_aparat_desa='$pangkat_aparat_desa'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pangkat Aparat Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE pangkat_aparat SET id_pangkat_aparat='$id', pangkat_aparat_desa='$pangkat_aparat_desa' WHERE id_pangkat_aparat='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pangkat Aparat Desa'</script>";
}
 ?>
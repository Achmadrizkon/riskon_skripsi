
<?php 
include '../../conf/koneksi.php';
$id_seleksi		= $_GET['id'];
$tanggal_calon		= date("Y-m-d");

$sql = mysqli_query($koneksi,"INSERT INTO calon SET id_seleksi='$id_seleksi', tanggal_calon='$tanggal_calon'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";

 ?>
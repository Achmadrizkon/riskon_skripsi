
<?php 
include '../../conf/koneksi.php';
$id_tes		= $_GET['id'];
$tanggal_seleksi		= date("Y-m-d");

$sql = mysqli_query($koneksi,"INSERT INTO seleksi SET id_tes='$id_tes', tanggal_seleksi='$tanggal_seleksi'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
 ?>
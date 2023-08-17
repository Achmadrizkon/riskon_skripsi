
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM tes WHERE id_tes='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=Pendaftaran Calon Kepala Desa';</script>"; 
?>

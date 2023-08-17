
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM seleksi WHERE id_seleksi='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=Pendaftaran Calon Kepala Desa';</script>"; 
?>

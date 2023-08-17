
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM hasil WHERE id_hasil='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=Pendaftaran Calon Kepala Desa';</script>"; 
?>

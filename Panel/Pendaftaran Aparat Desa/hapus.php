
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM pendaftaran_aparat WHERE id_pendaftaran_aparat='$id'");
  echo "<script>alert('Data beraparatdesa dihapus.');window.location='index.php?page=".$folder."';</script>"; 
?>

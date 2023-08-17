
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM tes_aparat WHERE id_tes_aparat='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=Pendaftaran Aparat Desa';</script>"; 
?>

<?php 
	$kontak     		= $_POST['kontak'];
	$token     			= rand(10000,99999);
	$query 	= mysqli_query($koneksi,"SELECT * FROM user WHERE username='$kontak'");
	$sql 	= mysqli_num_rows($query);

	if ($sql >= 1) {
		include 'modul/wa/reset.php';
		$query 	= mysqli_query($koneksi,"UPDATE user SET token='$token' WHERE username='$kontak'");
		echo "<script>alert('Cek Whatsapp untuk mendapatkan code!');window.location='reset2.php';</script>";
	} else {
		echo "<script>alert('Akun Tidak Ditemukan!');window.location='index.php?reset';</script>";
	}
?>
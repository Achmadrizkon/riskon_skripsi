<?php 
	$nama_pemohon 			= $_POST['nama_pemohon'];
	$wa_pemohon     		= $_POST['wa_pemohon'];
	$pass 					= rand(10000, 999999999999);
	$query 	= mysqli_query($koneksi,"SELECT * FROM user WHERE username='$wa_pemohon'");
	$sql 	= mysqli_num_rows($query);

	if ($sql == 1) {
		echo "<script>alert('Terdapat Kontak Whatsapp sama!');window.location='daftar.php';</script>";
	} else {
		include 'Modul/WA/daftar.php';
		$query =	mysqli_query($koneksi,"INSERT INTO user SET nama_user='$nama_pemohon', username='$wa_pemohon', password='$pass', level_user='User'");

		echo "<script>alert('Akun Berhasil didaftarkan!');window.location='index.php';</script>";
	}
	

?>
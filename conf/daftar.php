<?php 
$instansi 		= $_POST['instansi'];
$nama_pengguna 	= $_POST['nama_pengguna'];
$telp     		= $_POST['telp'];
$email    		= $_POST['email'];
$id             = rand(10,1000000);
$password 		= md5(rand());

$row = mysqli_query($koneksi, "INSERT INTO user SET id_user='$id',instansi='$instansi',nama_pengguna='$nama_pengguna',telp='$telp',email='$email',password='$password',akses='User'");

echo "<script>alert('Akun Berhasil didaftarkan, Silahkan Cek Email Untuk Mengganti Password Anda!');window.location='index.php';</script>";
?>
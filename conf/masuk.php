<?php 
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query ($koneksi,"SELECT * FROM user WHERE 
	username='$username' AND password='$password'");
$jumlah = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);
$level_user = $data['level_user'];

if ($jumlah >= 1) {
	$_SESSION['id_user']			= $data['id_user'];
	$_SESSION['nama']				= $data['nama'];
	$_SESSION['nama_lengkap_user']	= $data['nama_lengkap_user'];
	$_SESSION['username']			= $username;
	$_SESSION['password']			= $password;
	$_SESSION['level_user']			= $data['level_user'];
	echo "<script>alert('Login Sebagai ".$level_user." Berhasil!');window.location='Panel';</script>";
}else{
	echo "<script>alert('Tidak ditemukan username dan Password yang sesuai!');window.location='index.php';</script>";
}
?>
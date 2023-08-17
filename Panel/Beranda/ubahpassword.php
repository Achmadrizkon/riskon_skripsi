<?php 
include '../../conf/koneksi.php';

$id            = $_SESSION['id_user'];
$passwordlama  = $_POST['passwordlama'];
$passwordbaru  = $_POST['passwordbaru'];
$ulangpassword = $_POST['ulangpassword'];

$sq = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user='$id' AND password='$passwordlama'");
$s = mysqli_num_rows($sq);
if ($passwordbaru == $ulangpassword) {
	if ($s == 1) {
		mysqli_query($koneksi,"UPDATE tb_user SET password='$passwordbaru' WHERE id_user='$id'");
		echo "<script>alert('Password berhasil dirubah!'); window.location.href='../index.php'</script>";
	}else{
		echo "<script>alert('Password Lama Salah!'); window.location.href='../ubahpassword.php'</script>";
	}
}else{
		echo "<script>alert('Password Baru dan Ulang Password Baru Berbeda!'); window.location.href='../ubahpassword.php'</script>";
}

 ?>
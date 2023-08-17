
<?php 
include '../../conf/koneksi.php';
$nama		= $_POST['nama'];
$alamat		= $_POST['alamat'];
$nama_ketua		= $_POST['nama_ketua'];
$nip_ketua		= $_POST['nip_ketua'];

$file_logo_kantor  = $_FILES['logo_kantor']['name'];
$tmp_logo_kantor   = $_FILES['logo_kantor']['tmp_name'];	
move_uploaded_file($tmp_logo_kantor, '../../images/Setting/'.$file_logo_kantor);
if ($file_logo_kantor == NULL) {
    $logo_kantor 	= "logo.png"; 				
} else {
	$logo_kantor 	= $file_logo_kantor; 		
}
		
	
$file_background_login  = $_FILES['background_login']['name'];
$tmp_background_login   = $_FILES['background_login']['tmp_name'];	
move_uploaded_file($tmp_background_login, '../../images/Setting/'.$file_background_login);
$background_login 	= $file_background_login; 		
if ($file_background_login == NULL) {
    $background_login 	= "background.jpg"; 				
} else {
	$background_login 	= $file_background_login; 		
}

$file_background_user  = $_FILES['background_user']['name'];
$tmp_background_user   = $_FILES['background_user']['tmp_name'];	
move_uploaded_file($tmp_background_user, '../../images/Setting/'.$file_background_user);
$background_user 	= $file_background_user; 		
if ($file_background_user == NULL) {
    $background_user 	= "background.jpg"; 				
} else {
	$background_user 	= $file_background_user; 		
}

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO setting SET id_setting=NULL, nama='$nama', alamat='$alamat', nama_ketua='$nama_ketua', nip_ketua='$nip_ketua', logo_kantor='$logo_kantor', background_login='$background_login', background_user='$background_user'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Setting'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE setting SET id_setting='$id', nama='$nama', alamat='$alamat', nama_ketua='$nama_ketua', nip_ketua='$nip_ketua', logo_kantor='$logo_kantor', background_login='$background_login', background_user='$background_user' WHERE id_setting='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Setting'</script>";
}
 ?>
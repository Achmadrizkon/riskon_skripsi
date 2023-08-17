
<?php 
include '../../conf/koneksi.php';
$id_pembukaan_pendaftaran		= $_POST['id_pembukaan_pendaftaran'];
$id_user		= $_POST['id_user'];
$nama_lengkap		= $_POST['nama_lengkap'];
$alamat		= $_POST['alamat'];
$kontak		= $_POST['kontak'];
$jk		= $_POST['jk'];
$tanggal		= date("Y-m-d");
$tanggal_lahir		= date("Y-m-d", strtotime($_POST['tanggal_lahir']));
$tempat_lahir		= $_POST['tempat_lahir'];

	$file_ktp  = $_FILES['ktp']['name'];
	$tmp_ktp   = $_FILES['ktp']['tmp_name'];	
	move_uploaded_file($tmp_ktp, '../../images/Pendaftaran Calon Kepala Desa/'.$file_ktp);
	$ktp 	= $file_ktp; 		
	
	$file_ijasah  = $_FILES['ijasah']['name'];
	$tmp_ijasah   = $_FILES['ijasah']['tmp_name'];	
	move_uploaded_file($tmp_ijasah, '../../images/Pendaftaran Calon Kepala Desa/'.$file_ijasah);
	$ijasah 	= $file_ijasah; 		
	
if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO pendaftaran SET id_pembukaan_pendaftaran='$id_pembukaan_pendaftaran', tanggal='$tanggal', id_user='$id_user', nama_lengkap='$nama_lengkap', alamat='$alamat', kontak='$kontak', jk='$jk', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir', ktp='$ktp', ijasah='$ijasah'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE pendaftaran SET nama_lengkap='$nama_lengkap', id_user='$id_user', alamat='$alamat', kontak='$kontak', jk='$jk', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir', ktp='$ktp', ijasah='$ijasah' WHERE id_pendaftaran='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pendaftaran Calon Kepala Desa'</script>";
}
 ?>
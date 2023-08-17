<?php 
if (isset($_GET['page'])) {
	$folder = $_GET['page'];
	$judul = "".$folder;
}else{
	$folder = "Beranda";
	$judul = "Dashboard";
}
include '../conf/kepala.php';

if (isset($_GET['page'])) {
	$nama = $_GET['form'];

	if ($_GET['form'] == "Tambah") {
		$button = "<button style='float: right;' class='btn btn-primary' name='tambah'>Tambah</button>";
		include $folder.'/form.php';	

	}else if ($_GET['form'] == "Ubah") {
		$id = $_GET['id'];
		$button = "
		<input type='hidden' name='id' value='".$id."'>
		<button style='float: right;' class='btn btn-primary' name='ubah'>Ubah</button>";		
		include $folder.'/form.php';

	}else if ($_GET['form'] == "Hapus") {
		$id = $_GET['id'];
		include $folder.'/hapus.php';	
	}else if ($_GET['form'] == "Cetak") {
		include $folder.'/cetak.php';
	}else if ($_GET['form'] == "Cetak1") {
		include $folder.'/cetak1.php';
	}else if ($_GET['form'] == "Cetak2") {
		include $folder.'/cetak2.php';
	}else if ($_GET['form'] == "Cetak3") {
		include $folder.'/cetak3.php';
	}else if ($_GET['form'] == "Cetak4") {
		include $folder.'/cetak4.php';
	}else if ($_GET['form'] == "Cetak5") {
		include $folder.'/cetak5.php';
	}else if ($_GET['form'] == "detail") {
		include $folder.'/detail.php';	
	}else if ($_GET['form'] == "Verifikasi") {
		include $folder.'/index2.php';	
	}else{
		include $folder.'/index.php';
	}

}else{
	include $folder.'/index.php';
}

include '../conf/kaki.php';
?>
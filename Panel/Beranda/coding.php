<?php 

$user         	= mysqli_query($koneksi,"SELECT * FROM user");
$jumlah_user  	= mysqli_num_rows($user);

$pendaftaran         	= mysqli_query($koneksi,"SELECT * FROM pendaftaran");
$jumlah_pendaftaran  	= mysqli_num_rows($pendaftaran);
?>
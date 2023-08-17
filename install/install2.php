<?php 
if (isset($_POST['step1'])) {
fopen("../conf/koneksi.php", "x");
$host = $_POST['host'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$db   = $_POST['db'];
$conn = new mysqli($host, $user, $pass);
$sql = "CREATE DATABASE ".$db;
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$filename = '
<?php 
session_start(); 
error_reporting(0);
$host = "'.$host.'"; 
$user = "'.$user.'"; 
$pass = "'.$pass.'"; 
$db   = "'.$db.'"; 

$koneksi = mysqli_connect("$host","$user","$pass","$db");

function tgl($tanggal){
    $bulan = array (
        1 =>   "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    );
    $pecahkan = explode("-", $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
}
function rp($angka){

    $hasil_rupiah = "Rp." . number_format($angka,2,",",".");
    return $hasil_rupiah;
}
?>

';

file_put_contents('../conf/koneksi.php',$filename,FILE_APPEND);
 ?>
<meta http-equiv="refresh" content="0;url=install2.php?step2">
<?php 
}
if (isset($_GET['step2'])) {
    include '../conf/koneksi.php';
    $sqlSource = file_get_contents('db.sql');
    mysqli_multi_query($koneksi,$sqlSource);
header('location: install3.php');
}
 ?>
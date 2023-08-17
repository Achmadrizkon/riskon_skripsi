
<?php 
session_start(); 
error_reporting(0);
date_default_timezone_set("Asia/Makassar");
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db   = "riskon_skripsi"; 

$koneksi = mysqli_connect("$host","$user","$pass","$db");
$st         = mysqli_query($koneksi,"SELECT * FROM setting");
$setting    = mysqli_fetch_array($st);
$apk        = $setting['nama']; 
$fapk       = $setting['nama']; 
$fnama      = $setting['nama']; 
$lokasi     = $setting['alamat'];

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
function umur($tanggal_lahir){
    $birthDate = new DateTime($tanggal_lahir);
    $today = new DateTime("today");
    if ($birthDate > $today) { 
        exit("0 tahun");
    }
    $y = $today->diff($birthDate)->y;
    $m = $today->diff($birthDate)->m;
    $d = $today->diff($birthDate)->d;
    return $y;
}
?>



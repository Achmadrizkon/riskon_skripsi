<?php 
    $token             = $_POST['token'];
    $passwordbaru      = $_POST['passwordbaru'];
    $verifpassword     = $_POST['verifpassword'];
    $password          = $_POST['verifpassword'];
    $query  = mysqli_query($koneksi,"SELECT * FROM user WHERE token='$token'");
    $sql    = mysqli_num_rows($query);
    $rows   = mysqli_fetch_array($query);
    $kontak = $rows['username'];

    if ($sql >= 1) {
        if ($passwordbaru == $verifpassword) {
            include 'modul/wa/reset2.php';
            $query  = mysqli_query($koneksi,"UPDATE user SET password='$password' WHERE token='$token'");
            echo "<script>alert('Password Berhasil Diubah!');window.location='index.php';</script>";
        } else {
        echo "<script>alert('Verifikasi Password Harus Sama dengan Password Baru!');window.location='index.php?reset2';</script>";
        }
        
    } else {
        echo "<script>alert('Token Salah!');window.location='index.php?reset2';</script>";
    }
?>
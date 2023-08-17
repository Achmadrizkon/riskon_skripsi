<?php 
include 'conf/koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['passwordbaru'])) {
	$id 		= $_POST['id'];
	$password 	= $_POST['password'];
	$verpassword 	= $_POST['verpassword'];
    $sql = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
    $data = mysqli_fetch_array($sql);
    $email = $data['email'];
    $nama_pengguna = $data['nama_pengguna'];
    $instansi = $data['instansi'];
    $telp = $data['telp'];
    
	if ($password == $verpassword) {
	    $row = mysqli_query($koneksi,"UPDATE user SET password='$password' WHERE id_user='$id'");
	    
		require_once "library/PHPMailer.php";
		require_once "library/Exception.php";
		require_once "library/OAuth.php";
		require_once "library/POP3.php";
		require_once "library/SMTP.php";

		$mail = new PHPMailer;
		//Enable SMTP debugging. 
		$mail->SMTPDebug = 0;                               
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "mail.demoaplikasikalsel.online"; //host mail server
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password               
	    $ggmail = "001@demoaplikasikalsel.online";     
		$mail->Username = $ggmail;   //nama-email smtp          
		$mail->Password = "Sultan Nih Bos";           //password email smtp
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "ssl";                           
		//Set TCP port to connect to 
		$mail->Port = 465;                    
		$mail->From = $ggmail; //email pengirim
		$mail->FromName = "Admin Website"; //nama pengirim
		$mail->addAddress($email, $nama_pengguna); //email penerima
	 
		$mail->isHTML(true);
		$mail->Subject = "Pendaftaran Akun Berhasil"; //subject
	    $mail->Body    = "
	    <p>Yth ".$nama_pengguna.", Perubahan Password Anda Berhasil :</p>
	    <p>Nama Instansi       : ".$instansi."</p>
	    <p>Nama Pengguna       : ".$nama_pengguna."</p>
	    <p>Nomor HP            : ".$telp."</p>
	    <p>Email			   : ".$email."</p>
	    <p>Password			   : ".$password."</p>
	    <p>Terima Kasih Telah Bergabung Bersama Kami</p>"; //isi email
	        $mail->AltBody = "Admin Website"; //body email (optional)
	 
		if(!$mail->send()) 
		{
		    
		} 
		else 
		{
		}
		echo "<script>alert('Perubahan Password Berhasil!');window.location='index.php';</script>";
	 }else{
		echo "<script>alert('Mohon Password Baru dan Verifikasi Password Baru Berbeda!');window.location='07aad1df9d8908b63e5e8170b2bcc819".$id."';</script>";
	 }
}
 ?>
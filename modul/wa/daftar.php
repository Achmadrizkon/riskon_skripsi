<?php
//script php
$pesan = "
Halo ".$nama_pemohon.".
Pendaftaran Anda Berhasil.
Username : ".$wa_pemohon."
Password : ".$pass."

Terima Kasih
";
$data = [
'api_key' => 'Bz9Qpl2SyoVHry9cPKhBlXrSxGlkFg', // isi api key di menu profile -> setting
'sender' => '622155558593', // isi no device yang telah di scan
'number' => $wa_pemohon, // isi no pengirim
'message' => $pesan // isi pesan
      ];
   $curl = curl_init();
                                            
     curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://wa.sicanggih.site/send-message',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($data),
      CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
      ),
      ));
                                            
      $response = curl_exec($curl);
                                            
      curl_close($curl);
?>
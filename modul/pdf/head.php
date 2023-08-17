<?php 
$petik = '"';
require_once '../modul/pdf/pdf/autoload.inc.php';
include '../conf/koneksi.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$dari = date('Y-m-d', strtotime($_POST['dari']));
$sampai = date('Y-m-d', strtotime($_POST['sampai']));
$id_user = $_POST['id_user'];

$html = "
<style>

  table{
      font-size: 14px;

  }
  table, th, td {
      border-collapse: collapse;
  }
  thead{
    font-size: 16px;
  }
  .judul h3,h2,p{
    text-align: center;
    margin: 5px 0 5px 0;
  }
  .form-inline img{

    display: inline-block;
  }
  h2{
    font-size: 30px;
  }
  .kop tr td{
    text-align: center;
    border: 2px solid white;
    border-collapse: collapse;
  }
  .gambar{
    margin-right: 10px;
  }
  .isi tr td{
    padding-left: 5px;
    padding-right: 5px;
  }
  .ttd{
    text-align: center;
    display: inline-block;
    float: right;
  }

</style>

<title>".$title."</title>
<div class='container-fluid'>
  <center>
  <table class='kop' style='width:100%;'>
    <tr>
      <td rowspan='5' align='center'><img src='../images/Setting/".$setting['logo_kantor']."' height='80px'>
      </td>
      <td style='font-size: 20px; font-weight: bold;' align='center'>&nbsp;</td>
     <td rowspan='5' align='center'><img src='../modul/internal/1.png' height='80px'>
      </td>
    </tr>
    <tr>
      <td style='font-size: 25px; font-weight: bold;'>".$apk."</td>
      <td style='font-size: 25px; font-weight: bold;'></td>
    </tr>
    <tr>
      <td style='font-size: 15px;'>".$lokasi."</td>
    </tr>
  </table>
  </center>
<hr/>
  <table class='kop' style='width:100%;'>
    <tr>
      <td style='font-size: 20px; font-weight: bold;'>".$title."</td>
    </tr>
  </table>

";
 ?>
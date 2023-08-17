 
<?php
$title 	= " Laporan Pendaftaran Calon Kepala Desa";
$id_kecamatan = $_POST['id_kecamatan'];

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>Pemohon</th>
    <th>Desa</th>
    <th>Nama Lengkap</th>
    <th>Alamat</th>
    <th>Kontak</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Lahir</th>
    <th>Tempat Lahir</th>
</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM pendaftaran

JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN kecamatan USING(id_kecamatan)
WHERE id_kecamatan='$id_kecamatan' AND tanggal BETWEEN '$dari' AND '$sampai'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pendaftaran'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nama_kecamatan']."</td>
<td align='center'>".$data['desa']."</td>

<td align='center'>".$data['nama_lengkap']."</td>

<td align='center'>".$data['alamat']."</td>

<td align='center'>".$data['kontak']."</td>

<td align='center'>".$data['jk']."</td>

<td align='center'>".tgl($data['tanggal_lahir'])."</td>

<td align='center'>".$data['tempat_lahir']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>


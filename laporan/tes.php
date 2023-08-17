
<?php
$title 	= " Laporan Tes Kepala Desa";
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
    <th>Tanggal Tes</th>
    <th>Lokasi Tes</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM tes

JOIN pendaftaran USING(id_pendaftaran)
JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN user USING(id_user)
JOIN kecamatan USING(id_kecamatan)
WHERE id_kecamatan='$id_kecamatan' AND tanggal_tes BETWEEN '$dari' AND '$sampai'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_tes'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nama_user']."</td>
<td align='center'>".$data['desa']."</td>

<td align='center'>".$data['nama_lengkap']."</td>

<td align='center'>".$data['alamat']."</td>

<td align='center'>".$data['kontak']."</td>

<td align='center'>".$data['jk']."</td>

<td align='center'>".tgl($data['tanggal_lahir'])."</td>

<td align='center'>".$data['tempat_lahir']."</td>

<td align='center'>".tgl($data['tanggal_tes'])."</td>

<td align='center'>".$data['lokasi_tes']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>


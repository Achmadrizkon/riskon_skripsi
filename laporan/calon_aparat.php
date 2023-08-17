
<?php
$title 	= " Laporan Calon Kepala Desa";
$id_pangkat_aparat = $_POST['id_pangkat_aparat'];

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
    <th>Tanggal Konfirmasi</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM calon_aparat
JOIN seleksi_aparat USING(id_seleksi_aparat)
JOIN tes_aparat USING(id_tes_aparat)
JOIN pendaftaran_aparat USING(id_pendaftaran_aparat)
JOIN pembukaan_pendaftaran_aparat USING(id_pembukaan_pendaftaran_aparat)
JOIN pangkat_aparat USING(id_pangkat_aparat)
JOIN user USING(id_user)

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_calon'];
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

<td align='center'>".tgl($data['tanggal'])."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>


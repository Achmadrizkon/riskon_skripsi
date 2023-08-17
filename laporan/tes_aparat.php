
<?php
$title  = " Laporan Pembukaan Pendaftaran";
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

    <th>Tanggal tes_aparat</th>

    <th>Lokasi tes_aparat</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM tes_aparat
JOIN pendaftaran_aparat USING(id_pendaftaran_aparat)
JOIN pembukaan_pendaftaran_aparat USING(id_pembukaan_pendaftaran_aparat)
JOIN pangkat_aparat USING(id_pangkat_aparat)
JOIN user USING(id_user)
WHERE id_pangkat_aparat='$id_pangkat_aparat' AND tanggal BETWEEN '$dari' AND '$sampai'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pembukaan_pendaftaran'];
    $html .="<tr>
<td>".$no++."</td>
<td>".$data['nama_user']."</td>
<td>".$data['desa']."</td>

<td>".$data['nama_lengkap']."</td>

<td>".$data['alamat']."</td>

<td>".$data['kontak']."</td>

<td>".$data['jk']."</td>

<td>".tgl($data['tanggal_lahir'])."</td>

<td>".$data['tempat_lahir']."</td>

<td>".tgl($data['tanggal_tes_aparat'])."</td>

<td>".$data['lokasi_tes_aparat']."</td>
";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>


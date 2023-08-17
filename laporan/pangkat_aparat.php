
<?php
$title 	= " Laporan Pangkat Aparat Desa";
$id_pangkat_aparat = $_POST['id_pangkat_aparat'];

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>Pangkat Aparat Desa</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM pangkat_aparat

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pangkat_aparat'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['pangkat_aparat_desa']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>


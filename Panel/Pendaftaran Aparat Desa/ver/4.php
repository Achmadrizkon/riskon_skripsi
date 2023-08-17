<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable4">
 									<thead>
 										<tr>
 											<th>No</th>
    <th>Pemohon</th>
    <th>Kecamatan</th>
    <th>Nama Lengkap</th>
    <th>Pangkat Aparat</th>
    <th>Scan KTP</th>
    <th>Scan Ijasah Terakhir</th>    
    <th>Tanggal ACC</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM calon_aparat 
JOIN seleksi_aparat USING(id_seleksi_aparat)
JOIN tes_aparat USING(id_tes_aparat)
JOIN pendaftaran_aparat USING(id_pendaftaran_aparat)
JOIN pembukaan_pendaftaran_aparat USING(id_pembukaan_pendaftaran_aparat)
JOIN pangkat_aparat USING(id_pangkat_aparat)
JOIN kecamatan USING(id_kecamatan)
JOIN user USING(id_user)
WHERE id_pembukaan_pendaftaran_aparat='$id_reg'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_calon_aparat'];
$ss = mysqli_query($koneksi,"SELECT * FROM aparatdesa WHERE id_calon_aparat='$id'");
$jm = mysqli_num_rows($ss);
if ($jm >= 1) {
} else {
?>
<tr>
<td><?=$no++;?></td>
<td><?=$data['nama_user'];?></td>
<td><?=$data['nama_kecamatan'];?></td>
<td><?=$data['nama_lengkap'];?></td>
<td><?=$data['pangkat_aparat_desa'];?></td>
<td><a target="_BLANK" href="../images/Pendaftaran Aparat Desa/<?=$data['ktp'];?>"><img src="../images/Pendaftaran Aparat Desa/<?=$data['ktp'];?>" width="100px"></a></td>
<td><a target="_BLANK" href="../images/Pendaftaran Aparat Desa/<?=$data['ijasah'];?>"><img src="../images/Pendaftaran Aparat Desa/<?=$data['ijasah'];?>" width="100px"></a></td>
<td><?=tgl($data['tanggal_calon_aparat']);?></td>

<?php 
    if ($jml >= 1) {
    ?>
        <td align="center">
        <button class="btn btn-icon btn-success" disabled>
            Saat Ini Aksi Kami Matikan
        </button>
        </td>        
    <?php
    }else{
    ?>
<td align="center">
<a href="index.php?page=Aparat Desa&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
<i class="fe fe-trash"></i>
</a>
</td>
    <?php
    }
 ?>
</tr>
<?php } } ?>
</tbody>
</table>
</div>
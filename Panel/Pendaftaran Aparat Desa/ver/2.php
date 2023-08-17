<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable1">
 									<thead>
 										<tr>
 											<th>No</th>

<?php if ($level_user == "Administrator"): ?>
    <th>Opsi</th>
<?php endif ?>
    <th>Kecamatan</th>
    <th>Nama Lengkap</th>
    <th>Pangkat Aparat</th>
    <th>Scan KTP</th>
    <th>Scan Ijasah Terakhir</th>    
    <th>Tanggal Tes</th>
    <th>Lokasi</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM tes_aparat 
JOIN pendaftaran_aparat USING(id_pendaftaran_aparat)
JOIN pembukaan_pendaftaran_aparat USING(id_pembukaan_pendaftaran_aparat)
JOIN pangkat_aparat USING(id_pangkat_aparat)
JOIN kecamatan USING(id_kecamatan)
WHERE id_pembukaan_pendaftaran_aparat='$id_reg'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_tes_aparat'];
$ss = mysqli_query($koneksi,"SELECT * FROM seleksi_aparat WHERE id_tes_aparat='$id'");
$jm = mysqli_num_rows($ss);
if ($jm >= 1) {
} else {
?>
<tr>
<td><?=$no++;?></td>
<?php if ($level_user == "Administrator"): ?>
    <?php 
        if ($jml >= 1) {
        ?>
            <td align="center">
            <button class="btn btn-icon btn-success" disabled>
                Hanya bisa memilih 1 kepala desa
            </button>
            </td>        
        <?php
        }else{
        ?>
<td align="center">
<a href="Seleksi Aparat Desa/proses.php?id=<?=$id;?>" class="btn btn-icon btn-success">
Seleksi Calon
</a>
</td>
        <?php
        }
     ?>
<?php endif ?>


<td><?=$data['nama_kecamatan'];?></td>
<td><?=$data['nama_lengkap'];?></td>
<td><?=$data['pangkat_aparat_desa'];?></td>
<td><a target="_BLANK" href="../images/Pendaftaran Aparat Desa/<?=$data['ktp'];?>"><img src="../images/Pendaftaran Aparat Desa/<?=$data['ktp'];?>" width="100px"></a></td>
<td><a target="_BLANK" href="../images/Pendaftaran Aparat Desa/<?=$data['ijasah'];?>"><img src="../images/Pendaftaran Aparat Desa/<?=$data['ijasah'];?>" width="100px"></a></td>
<td><?=tgl($data['tanggal_tes_aparat']);?></td>
<td><?=$data['lokasi_tes_aparat'];?></td>
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
<a href="index.php?page=Tes Aparat Desa&form=Ubah&id=<?=$id;?>" class="btn btn-icon btn-primary">
<i class="fe fe-edit"></i>
</a>
<a href="index.php?page=Tes Aparat Desa&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
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
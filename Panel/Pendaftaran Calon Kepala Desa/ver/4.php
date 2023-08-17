<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable4">
 									<thead>
 										<tr>
 											<th>No</th>

<?php if ($level_user == "Administrator"): ?>
    <th>Opsi</th>
<?php endif ?>
    <th>Kecamatan</th>
    <th>Nama Lengkap</th>
    <th>Scan KTP</th>
    <th>Scan Ijasah Terakhir</th>    
    <th>Tanggal ACC</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM calon 
JOIN seleksi USING(id_seleksi)
JOIN tes USING(id_tes)
JOIN pendaftaran USING(id_pendaftaran)
JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN kecamatan USING(id_kecamatan)
JOIN user USING(id_user)
WHERE id_pembukaan_pendaftaran='$id_reg'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_calon'];
$ss = mysqli_query($koneksi,"SELECT * FROM hasil WHERE id_calon='$id'");
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
<a href="index.php?page=Hasil Pemilihan Calon Kepala Desa&form=Tambah&id=<?=$id;?>" class="btn btn-icon btn-success">
Masukkan Angka Polling
</a>
</td>
        <?php
        }
     ?>
<?php endif ?>


<td><?=$data['nama_kecamatan'];?></td>
<td><?=$data['nama_lengkap'];?></td>
<td><a target="_BLANK" href="../images/Pendaftaran Calon Kepala Desa/<?=$data['ktp'];?>"><img src="../images/Pendaftaran Calon Kepala Desa/<?=$data['ktp'];?>" width="100px"></a></td>
<td><a target="_BLANK" href="../images/Pendaftaran Calon Kepala Desa/<?=$data['ijasah'];?>"><img src="../images/Pendaftaran Calon Kepala Desa/<?=$data['ijasah'];?>" width="100px"></a></td>
<td><?=tgl($data['tanggal_calon']);?></td>

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
<a href="index.php?page=Calon Kepala Desa&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
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
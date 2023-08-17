<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable4">
 									<thead>
 										<tr>
 											<th>No</th>

    <th>Tanggal Pelantikan</th>
    <th>Masa Jabatan</th>
    <th>Kecamatan</th>
    <th>Nama Lengkap</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM kepaladesa 
JOIN hasil USING(id_hasil)
JOIN calon USING(id_calon)
JOIN seleksi USING(id_seleksi)
JOIN tes USING(id_tes)
JOIN pendaftaran USING(id_pendaftaran)
JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN kecamatan USING(id_kecamatan)
WHERE id_pembukaan_pendaftaran='$id_reg'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_kepaladesa'];
$jabatan = date('Y-m-d', strtotime('+6 year', strtotime($data['tanggal_pelantikan'])));
?>
<tr>
<td><?=$no++;?></td>
<td><?=tgl($data['tanggal_pelantikan']);?></td>
<td><?=tgl($jabatan);?></td>
<td><?=$data['nama_kecamatan'];?></td>
<td><?=$data['nama_lengkap'];?></td>
<td align="center">
<a href="index.php?page=Kepala Desa Terpilih&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
<i class="fe fe-trash"></i>
</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
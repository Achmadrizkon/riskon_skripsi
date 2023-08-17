            <div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
 									<thead>
 										<tr>
 											<th>No</th>
<?php if ($level_user == "Administrator"): ?>
    <th>Opsi</th>
<?php endif ?>
    <th>Pemohon</th>
    <th>Kecamatan</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>

    <th>Nama Lengkap</th>

    <th>Alamat</th>

    <th>Kontak</th>

    <th>Jenis Kelamin</th>

    <th>Tanggal Lahir</th>

    <th>Tempat Lahir</th>

    <th>Scan KTP</th>

    <th>Scan Ijasah Terakhir</th>

<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM pendaftaran
JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN kecamatan USING(id_kecamatan)
JOIN user USING(id_user)
WHERE id_pembukaan_pendaftaran='$id_reg'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pendaftaran'];
$ss = mysqli_query($koneksi,"SELECT * FROM tes WHERE id_pendaftaran='$id'");
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
<a href="index.php?page=Tes Calon Kepala Desa&form=Tambah&id=<?=$id;?>" class="btn btn-icon btn-success">
Kirim Informasi Tes
</a>
</td>
        <?php
        }
     ?>
<?php endif ?>


<td><?=$data['nama_user'];?></td>
<td><?=$data['nama_kecamatan'];?></td>
<td><?=tgl($data['tanggal_mulai']);?></td>
<td><?=tgl($data['tanggal_selesai']);?></td>

<td><?=$data['nama_lengkap'];?></td>

<td><?=$data['alamat'];?></td>

<td><?=$data['kontak'];?></td>

<td><?=$data['jk'];?></td>

<td><?=tgl($data['tanggal_lahir']);?></td>

<td><?=$data['tempat_lahir'];?></td>

<td><a target="_BLANK" href="../images/Pendaftaran Calon Kepala Desa/<?=$data['ktp'];?>"><img src="../images/Pendaftaran Calon Kepala Desa/<?=$data['ktp'];?>" width="100px"></a></td>

<td><a target="_BLANK" href="../images/Pendaftaran Calon Kepala Desa/<?=$data['ijasah'];?>"><img src="../images/Pendaftaran Calon Kepala Desa/<?=$data['ijasah'];?>" width="100px"></a></td>
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
<?php if ($id_pengguna == $data['id_user']): ?>
    <a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-icon btn-primary">
    <i class="fe fe-edit"></i>
    </a>
    <a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
    <i class="fe fe-trash"></i>
    </a>
<?php endif ?>
    </td>    
    <?php
    }
 ?>

</tr>
<?php } } ?>
</tbody>
</table>
</div>
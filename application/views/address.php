<div class="content">
<div class="content-header">
<h1>Halaman Alamat</h1>
</div>
<div class="content-main">
<div class="main-header">
<div class="column-main">
<p>TABEL DATA ALAMAT</p>
</div>
<div class="column-tombol">
<a href="<?php echo base_url('alamat/tambah_alamat'); ?>" class="tombol">TAMBAH DATA</a>
</div>
</div>
<div class="main-content">
<table class="tabel-siswa" border="1">
<tr>
<th>ID</th>
<th>ALAMAT</th>
<th>KODE POS</th>
<th colspan="2">AKSI</th>
</tr>
<?php foreach ($alamat as $al) : ?>
<tr>
<td><?= $al['id'] ?></td>
<td><?= $al['alamat'] ?></td>
<td><?= $al['kode_pos'] ?></td>
<td><a href="<?= base_url(); ?>alamat/edit/<?= $al['id'] ?>">edit</a></td>
<td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>alamat/hapus/<?= $al['id']
?>">hapus</a></td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>
</div>

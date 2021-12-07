<?= $this->extend('template/layout') ?>
<?= $this->section('content'); ?>
<div class="content">
<table border="1">
	<tr>
		<th colspan="2">Biodataku</th>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?= $nama; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?=$alamat;?></td>
	</tr>
	<tr>
		<td>Kelamin</td>
		<td><?=$kelamin;?></td>
	</tr>
	<tr>
		<td>Sekolah</td>
		<td><?=$sekolah;?></td>
	</tr>
</table>
</div>
<?= $this->endSection(); ?>
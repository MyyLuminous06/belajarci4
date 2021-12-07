<?= $this->extend('template/layout') ?>
<?= $this->section('content'); ?>
<h2>MASUKAN INPUTAN ANDA!</h2>
<form action="/web/segitiga" method="post">
		<?= csrf_field(); ?>
		<p>
			
			<input type="number" name="alas" value="<?= $alas; ?>"> x
			<input type="number" name="tinggi" value="<?= $tinggi; ?>">
			
		</p>
		<p>1/2 * alas * tinggi = <?= $hasil; ?></p>
		<p><button type="submit">HITUNG</button></p>

</form>
<?= $this->endSection(); ?>

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$judul;?></title>
</head>
<body>
<h1 style="margin-left: 515px"><?= $judul; ?></h1>
<hr>
<h2>MASUKAN INPUTAN ANDA!</h2>
	<form action="/web/segitiga" method="post">
		<?= csrf_field(); ?>
		<p>
			
			<input type="number" name="alas" value="<?= $alas; ?>"> x
			<input type="number" name="tinggi" value="<?= $tinggi; ?>">
			
		</p>
		<p>1/2 * alas * tinggi = <?= $hasil; ?></p>
		<p><button type="submit">HITUNG</button></p>

	</form>
</body>
</html> -->
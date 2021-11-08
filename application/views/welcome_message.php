<!DOCTYPE html>
<html lang="en">

<head>
	<title>Online Store</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<?php $this->load->view('layout/top_layout') ?>

	<!-- Tampilkan semua produk -->
	<div class="row">
		<!-- looping products -->
		<?php foreach ($products as $product) : ?>
			<div class="col-sm-3 col-md-3">
				<?= $product->nama ?>
				<?= $product->harga ?>
				<img src="uploads/" <?= $product->image ?>>
				<?= $product->keterangan ?>
				<?= $product->stok ?>
			</div>
	</div>
<?php endforeach; ?>
<!-- end looping -->
</div>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_detailTransaksi.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
	<div class="back" style="margin-top: 70px;">
		<a href="<?php echo base_url('admin/v_all_dataTransaksi'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
	</div>
	<div class="login-box1">
		<h1 class="h1-color";">DETAIL TRANSAKSI</h1>
	</div>
	<?php foreach ($dataTransaksi as $value): ?>
	<?php endforeach ?>
	<div class="login-box-transaksi">			
		<form action="" method="post">
			<span style="margin-left: 30px;"><b>ID Transaksi</b></span>
			<input type="text" name="id_transaksi" placeholder="ID Transaksi" readonly="" value="<?php echo $value->id_transaksi ?>">
			<span><b>No. Meja</b></span>
			<input type="text" placeholder="No. Meja" name="no_meja" value="<?php echo $value->no_meja ?>" readonly>
			<span><b>Tanggal</b></span>
			<input type="text" name="tanggal" placeholder="tanggal" value="<?php echo $value->tanggal_transaksi ?>" readonly>
			<span><b>ID Order</b></span>
			<input type="text" name="id_order" placeholder="ID Order" readonly="" value="<?php echo $value->id_order ?>">
		</div>
		<div class="container">
			
			<table class="fixed-th" style="width: 1000px; margin-right: 300px;" >
				<thead>
					<tr>
						<th>Foto</th>
						<th>Nama Masakan</th>
						<th>Harga</th>
						<th>Banyak Makanan</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($dataTransaksi as $value): ?>
						<tr>
							<td><img src="<?php echo base_url('gambar/'.$value->foto) ?>" style="width:80px;" alt=""></td>
							<td><?php echo $value->nama_masakan; ?></td>
							<td><?php echo $value->harga; ?></td>
							<td><?php echo $value->qty; ?></td>
							<td><?php echo $value->keterangan; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<br/>
		</div>
		<div class="form-input-transaksi">
			<span>Total	Bayar:</span>
			<input type="text" name="total_bayar" value="<?php echo $value->total_bayar ?>" readonly>
		</div>
	</form>
</body>
</html>
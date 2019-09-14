<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>

	<style type="text/css">
		.header{
			background: #141E30;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.no-print{
			color: blue;
			cursor: pointer;
			text-align: center;
			background: #ccc;
			margin-bottom: 20px;
		}

		@media print
		{    
			.no-print, .no-print * {
				display: none !important;
			}

			.header{
				background: #141E30;
				-webkit-print-color-adjust: exact; 
			}

		}
	</style>
</head>
<body style="margin: 0; padding: 0; background: #eee">

	<div class="no-print" onclick="window.print();">PRINT KWITANSI</div>

	<div style="width: 1000px; border: 1px solid #ccc; padding:0; margin-left: auto; margin-right: auto; background: #fff">
		<div class="header" style="margin: 0; color: #fff; padding: 10px">
			<h1 style="text-align: right;">KWITANSI - Lizza Wedding</h1>
		</div>
		<div style="padding: 10px 30px">
			<table>
				<tr>
					<td>
						Nama Pelanggan
					</td>
					<td style="padding-left: 20px; padding-right: 20px">:</td>
					<td>
						<?=$data['nama_user']?>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal pernikahan
					</td>
					<td style="padding-left: 20px; padding-right: 20px">:</td>
					<td>
						<?php echo date('Y-m-d'); ?>
					</td>
				</tr>
				<tr>
					<td>
						Paket Pernikahan
					</td>
					<td style="padding-left: 20px; padding-right: 20px">:</td>
					<td>
						<?=$data['nama_paket']?>
					</td>
				</tr>
				<tr>
					<td>
						Harga
					</td>
					<td style="padding-left: 20px; padding-right: 20px">:</td>
					<td>
						<?=$data['harga']?>
					</td>
				</tr>
				<tr>
					<td>
						Status
					</td>
					<td style="padding-left: 20px; padding-right: 20px">:</td>
					<td>
						<?php if($data['is_lunas']): ?>
							LUNAS
						<?php else: ?>
							BELUM LUNAS (sisa : <?=$data['harga']-$data['bayar']?>)
						<?php endif; ?>
					</td>
				</tr>
			</table>
			<hr>

			<p><?=nl2br($data['keterangan'])?></p>

			<div style="text-align: right;">
				<?=date('d F Y')?>
			</div>

		</div>
	</div>

</body>
</html>
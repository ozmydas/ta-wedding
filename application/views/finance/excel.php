<h1>Laporan Pesanan Pernikahan</h1>
<br/>
<table border="1">
	
	<tr>
		<td>No</td>
		<td>Nama Pemesan</td>
		<td>Paket</td>
		<td>Harga</td>
		<td>Dibayar</td>
		<td>Tanggal Pesta</td>
		<td>Tanggal Pesan</td>
		<td>Keterangan</td>
	</tr>

	<?php $i=1;
	foreach($data as $key => $value): ?>
		<tr>
			<td scope="row"><?=$i++?></td>
			<td><?=$value['nama_user']?></td>
			<td><?=$value['nama_paket']?></td>
			<td><?=$value['harga']?></td>
			<td><?=$value['bayar']?></td>
			<td><?=date('d F Y', strtotime($value['pesta_date']))?></td>
			<td><?=date('d F Y H:i', strtotime($value['created_datetime']))?></td>
			<td><?=$value['keterangan']?></td>
		</tr>
	<?php endforeach; ?>

</table>
<?php require('header.php'); ?>


<h1 class="">Kelola Pernikahan</h1>

<hr/>

<div style="text-align: center;">
	<a href="<?=site_url('admin/pesanan/tambah')?>"><button class="ui primary basic button">Tambah Baru</button></a>
</div>

<table class="ui celled table" id="myTable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Pelanggan</th>
			<th scope="col">Pilihan Paket</th>
			<th scope="col">Bayar/Total</th>
			<th scope="col">Tanggal Acara</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;
		foreach($data as $key => $value): ?>
			<tr>
				<th scope="row"><?=$i++?></th>
				<td><?=$value['nama_user']?></td>
				<td><?=$value['nama_paket']?></td>
				<td><?=$value['bayar'] >= $value['harga']?'LUNAS':$value['bayar']?>/<?=$value['harga']?></td>
				<td><?=date('d F Y', strtotime($value['pesta_date']))?></td>
				<td>
					<?php if($value['is_lunas']): ?>
					<a href="<?=site_url('admin/pesanan/detail/'.$value['id'])?>" class="ui basic button green" style="width:90px">lihat pesanan</a>
					<?php else:?>
					<a href="<?=site_url('admin/pesanan/detail/'.$value['id'])?>" class="ui basic button blue" style="width:90px">pembayaran</a>
					<?php endif;?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>



<link rel="stylesheet" type="text/css" href="<?=base_url('assets/datatables/datatables.min.css')?>">
<script type="text/javascript" src="<?=base_url('assets/datatables/datatables.min.js')?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	} );
</script>


<?php require('footer.php'); ?>
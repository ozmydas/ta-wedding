<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Transaksi Sewa</h1>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">invoice</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;
					foreach($barang as $key => $value):?>
						<tr>
							<th scope="row"><?=$i++?></th>
							<td><?=$key?></td>
							<td><?=$value['nama_barang']?></td>
							<td><?=$value['harga']?></td>
							<?php if($value['is_done'] AND $value['is_lunas']): ?>
							<td>SUDAH SELESAI</td>
							<?php elseif($value['is_lunas']): ?>
							<td>DISEWA</td>
							<?php else: ?>
							<td><?= $value['is_lunas'] ? 'LUNAS' : 'BELUM LUNAS' ?></td>
							<?php endif?>
							<td><?= $value['is_lunas'] ? '-' : '<a class="btn btn-sm btn-warning" href="'.site_url('member/barang/hapusinv/'.$value['invoice']).'">hapus</a>' ?></td>
						</tr>
					<?php endforeach; ?>
					
				</tbody>
			</table>
		</div>

	</div>

</div>

<link rel="stylesheet" type="text/css" href="<?=base_url('assets/datatables/datatables.min.css')?>">
<script type="text/javascript" src="<?=base_url('assets/datatables/datatables.min.js')?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	} );
</script>

<?php include('footer.php'); ?>
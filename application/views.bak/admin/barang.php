<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Barang Dibeli Member</h1>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Pembeli</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;
					foreach($barang as $key => $value): ?>
						<tr>
							<th scope="row"><?=$i++?></th>
							<td><?=$value['nama']?></td>
							<td><?=$value['nama_barang']?></td>
							<td><?=$value['harga']?></td>
							<td><?= $value['is_lunas'] ? 'LUNAS' : 'BELUM LUNAS' ?></td>
							<td><?= $value['is_lunas'] ? '-' : '<a class="btn btn-sm btn-warning" href="'.site_url('admin/barang/lunas/'.$value['id']).'">ubah jadi lunas</a>' ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>

</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	} );
</script>

<?php include('footer.php'); ?>
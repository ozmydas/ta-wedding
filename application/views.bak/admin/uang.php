<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Daftar Pinjaman Member</h1>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Peminjam</th>
						<th scope="col">Nominal</th>
						<th scope="col">Dibayar</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;
					foreach($pinjaman as $key => $value):
						$max = $value['nominal'] - $value['bayar'];
					?>
						<tr>
							<th scope="row"><?=$i++?></th>
							<td><?=$value['nama']?></td>
							<td><?=$value['nominal']?></td>
							<td><?=$value['bayar']?></td>
							<td><?= $value['is_lunas'] ? 'LUNAS' : 'BELUM LUNAS' ?></td>
							<td><?= $value['is_lunas'] ? '-' : '<form name="bayar-'.$i.'" action="'.site_url('admin/uang/bayar/'.$value['id']).'" method="POST"><input type="number" name="bayaran" max="'.$max.'" placeholder="sisa '.$max.'" required /><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-left: 5px; padding:3px !important;">SUBMIT</button></form>' ?></td>
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
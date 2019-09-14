<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Barang Tersedia</h1>
		<a href="<?=site_url('admin/barang/baru')?>">Tambah Barang Baru</a>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Gambar</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;
					foreach($barang as $key => $value): ?>
						<tr>
							<th scope="row"><?=$i++?></th>
							<td><img class="img img-responsive" style="height: 50px;" src="<?=base_url('upload/barang/'.$value['gambar'])?>"></td>
							<td><?=$value['nama_barang']?></td>
							<td><?=$value['harga']?></td>
							<td>
								<a class="btn btn-sm btn-primary" href="<?=site_url('admin/barang/edit/'.$value['id'])?>">edit</a>
								<a class="btn btn-sm btn-warning" href="<?=site_url('admin/barang/hapus/'.$value['id'])?>">hapus</a>
							</td>
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
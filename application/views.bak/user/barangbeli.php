<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Barang Akan Disewa</h1>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Gambar</th>
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
							<td><img class="img img-responsive" style="height: 50px;" src="<?=base_url('upload/barang/'.$value['gambar'])?>"></td>
							<td><?=$value['nama_barang']?></td>
							<td><?=$value['harga']?></td>
							<td><?= $value['is_lunas'] ? 'LUNAS' : 'BELUM LUNAS' ?></td>
							<td><?= $value['is_lunas'] ? '-' : '<a class="btn btn-sm btn-warning" href="'.site_url('member/barang/hapus/'.$value['id']).'">hapus</a>' ?></td>
						</tr>
					<?php endforeach; ?>

						<tr style="font-weight: bold;">
							<td colspan="3">TOTAL HARGA SEWA</td>
							<td>40000</td>
							<td></td>
							<td></td>
						</tr>
				</tbody>
			</table>
		</div>

		<div>
			<div class="row">
				<div class="col-sm-6 form-group">
					<label>Tanggal Mulai Sewa</label>
					<input type="date" class="form-control" name="tgl_start">
				</div>
				<div class="col-sm-6 form-group">
					<label>Tanggal Akhir Sewa</label>
					<input type="date" class="form-control" name="tgl_end">
				</div>
			</div>
		</div>

	</div>

</div>


<script type="text/javascript">
	$(document).ready(function() {
		// $('#myTable').DataTable();
	} );
</script>

<?php include('footer.php'); ?>
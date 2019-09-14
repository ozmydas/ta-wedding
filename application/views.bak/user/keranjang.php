<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Keranjang Belanja</h1>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th class="text-center" scope="col">#</th>
						<th class="text-center" scope="col">Gambar</th>
						<th class="text-center" scope="col">Nama Barang</th>
						<th class="text-center" scope="col">Harga</th>
						<th class="text-center" scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;
					$harga = 0;
					foreach($barang as $key => $value): ?>
						<tr>
							<th scope="row"><?=$i++?></th>
							<td><img class="img img-responsive" style="height: 50px;" src="<?=base_url('upload/barang/'.$value['gambar'])?>"></td>
							<td><?=$value['nama_barang']?></td>
							<td class="text-right"><?=$value['harga']?></td>
							<td class="text-center"><?= $value['is_lunas'] ? '-' : '<a class="btn btn-sm btn-warning" href="'.site_url('member/barang/hapus/'.$value['id']).'">hapus</a>' ?></td>
						</tr>
					<?php $harga += $value['harga']; 
					endforeach; ?>

						<tr style="font-weight: bold;">
							<td colspan="3">TOTAL HARGA SEWA</td>
							<td class="text-right"><?=$harga?></td>
							<td></td>
						</tr>
				</tbody>
			</table>
		</div>

		<div>
			<form action="<?=site_url('member/barang/proses')?>" method="POST">
	
			<div class="row">
				<div class="col-sm-6 form-group">
					<label>Tanggal Mulai Sewa</label>
					<input type="date" class="form-control" name="tgl_start">
				</div>
				<div class="col-sm-6 form-group">
					<label>Tanggal Akhir Sewa</label>
					<input type="date" class="form-control" name="tgl_end">
				</div>
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary">PROSES</button>
				</div>
			</div>
	
			</form>
		</div>

	</div>

</div>


<script type="text/javascript">
	$(document).ready(function() {
		// $('#myTable').DataTable();
	} );
</script>

<?php include('footer.php'); ?>
<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Tambah Data Pengantin</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('admin/pesanan/simpan')?>" method="POST" enctype="multipart/form-data" class="ui form">
			<div class="field">
				<label>Nama Pelanggan</label>
				<input type="text" name="nama_user" class="form-control" required>
			</div>

			<div class="field">
				<label>Tanggal Pernikahan</label>
				<input type="date" name="pesta_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>" required>
			</div>

			<div class="field">
				<label>Pilihan Paket</label>
				<select name="paket_id" required="">
					<option value="" selected disabled>-- Pilih Paket --</option>
					<?php foreach ($paket as $key => $value): ?>
						<option value="<?=$value['id']?>" id="opt-<?=$value['id']?>" data-harga="<?=$value['harga']?>"><?=$value['nama_paket']?> (Rp. <?=$value['harga']?>)</option>
					<?php endforeach; ?>
				</select>
				<p style="font-size: 0.8em">* pilih paket terlebih dahulu untuk memunculkan harga dasar</p>
			</div>

			<div class="field">
				<label>Total Harga</label>
				<input type="number" name="harga" class="form-control" value="0" required>
				<p style="font-size: 0.8em">* jika ada biaya tambahan, tambahkan di total harga</p>
			</div>

			<div class="field">
				<label>Jumlah DP / Dibayar Lunas</label>
				<input type="number" name="bayar" class="form-control" required>
				<p style="font-size: 0.8em">* jika dibayar lunas, masukkan nominal sesuai harga</p>
			</div>

			<div class="field">
				<label>Keterangan</label>
				<textarea name="keterangan" class="form-control" placeholder="keterangan alamat lokasi, fasilitas tambahan, atau informasi lainnya"></textarea>
			</div>

			<div>
				<button class="ui button green">SIMPAN</button>
				<a href="<?=site_url('admin/pesanan')?>" class="ui button">BATAL</a>
			</div>
			<br/>
		</form>
	</div>

</div>

<script type="text/javascript">
	$('[name="paket_id"]').on('change', function (e) {
		var ex = $(this).val();
		var hrg = $('#opt-' + ex).attr('data-harga');

		console.log(hrg);
		$('[name="harga"]').val(hrg);
	})
</script>

<?php include('footer.php'); ?>
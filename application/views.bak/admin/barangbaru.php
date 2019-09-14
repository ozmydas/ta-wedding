<?php include('header.php'); ?>

<div class="row">

	<div class="col-sm-12">
		<h1 class="text-center">Tambah Data Barang</h1>
		<hr/>

		<?php if(! empty($this->session->flashdata('alert'))): ?>
			<div class="alert alert-warning text-center">
				<?=$this->session->flashdata('alert')?>
			</div>
		<?php endif; ?>


		<form action="<?=site_url('admin/barang/simpan')?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="number" name="harga" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" required>
			</div>

			<div>
				<button class="btn btn-success">SIMPAN</button>
			</div>
			<br/>
		</form>
	</div>

</div>

<?php include('footer.php'); ?>